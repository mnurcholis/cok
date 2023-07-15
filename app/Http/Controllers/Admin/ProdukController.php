<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gambar_produks;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $page_title                 = 'Daftar Produk';

        return view('admin.produk.index', compact(['page_title']));
    }

    public function json()
    {
        $data = Produk::with('kategori')->orderBy('created_at', 'DESC');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="' . route('edit-produk', ['id' => $row->id]) . '" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>';
                $actionBtn .= ' <button id="button_delete_produk" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                data-bs-target="#modal_delete_produk" data-id="' . $row->id . '" data-name="' . $row->nama . '"><i class="bi bi-trash-fill"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action', 'ketegori'])
            ->make(true);
    }

    public function create()
    {
        $page_title     = 'Tambah Produk';
        $kategori       = Kategori::all();

        return view('admin.produk.create', compact(['page_title', 'kategori']));
    }

    public function save(Request $request)
    {
        // Validasi data form
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Aturan validasi untuk file gambar
            'description' => 'required',
            'kategori' => 'required|array',
            'status' => 'required',
        ]);
        try {
            DB::transaction(function () use ($request) {
                // Ambil data form
                $nama = $request->nama;
                $harga = $request->harga;
                $description = $request->description;
                $kategori = $request->kategori;
                $status = $request->status;

                // Unggah file gambar ke server
                if ($request->hasFile('gambar_diupload')) {
                    $gambarPaths = [];

                    foreach ($request->file('gambar_diupload') as $gambar) {
                        $gambarPath = $gambar->store('public/gambar');
                        $gambarPaths[] = $gambarPath;
                    }
                }

                // Simpan data produk ke database
                $produk = new Produk;
                $produk->nama = $nama;
                $produk->harga = $harga;
                $produk->description = $description;
                $produk->status = $status;
                $produk->user_id = Auth::user()->id;
                $produk->save();

                // Simpan relasi kategori
                $produk->kategori()->sync($kategori);

                // Simpan relasi gambar
                if (isset($gambarPaths)) {
                    foreach ($gambarPaths as $gambarPath) {
                        $gambar = new Gambar_produks();
                        $gambar->path = $gambarPath;
                        $gambar->user_id = Auth::user()->id;
                        $produk->gambar()->save($gambar);
                    }
                }
            });

            return response()->json([
                "success"    => true,
                "info"      => "Berhasil Simpan Data"
            ]);
        } catch (QueryException $e) {
            return response()->json([
                "success" => false,
                "error" => $e->getMessage()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "success" => false,
                "error" => $e->getMessage()
            ]);
        }
    }

    public function edit($id)
    {
        $produk         = Produk::with('gambar')->find($id);
        $kategori       = Kategori::all();
        $page_title     = 'Edit Produk ' . $produk->nama;

        return view('admin.produk.edit', compact(['page_title', 'kategori', 'produk']));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            // Add more validation rules for other fields if necessary
        ]);

        // Find the product by ID
        $produk = Produk::findOrFail($id);

        // Update the product's information
        $produk->nama = $request->input('nama');
        $produk->harga = $request->input('harga');
        $produk->description = $request->input('description');
        $produk->status = $request->input('status');
        // Update other fields as necessary

        // Update the product's categories
        $kategoriIds = $request->input('kategori', []);
        $produk->kategori()->sync($kategoriIds);

        // Update the product's images
        if ($request->hasFile('gambar_diupload')) {

            // Upload and save the new images
            foreach ($request->file('gambar_diupload') as $image) {
                $path = $image->store('public/gambar'); // Adjust the storage path as per your needs

                // Create a new image record in the database
                $gambar = new Gambar_produks();
                $gambar->path = $path;
                // Set other image properties if necessary
                $produk->gambar()->save($gambar);
            }
        }

        // Save the updated product
        $produk->save();

        return response()->json([
            'success' => true,
            'info' => 'Produk updated successfully'
        ]);
    }

    public function hapus_gambar(Request $request)
    {
        $id = $request->input('id');

        $gambar = Gambar_produks::findOrFail($id);

        // Remove the image file from storage
        Storage::delete($gambar->path);

        // Delete the image record from the database
        $gambar->delete();

        return response()->json([
            'success' => true,
            'info' => 'Gambar deleted successfully'
        ]);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        // Check if the ID is valid and exists in the database
        $produk = Produk::find($id);
        if (!$produk) {
            return response()->json([
                'status' => false,
                'info' => 'Invalid Produk ID'
            ]);
        }

        // Delete the associated images
        $gambarPaths = $produk->gambar()->pluck('path')->toArray();
        if (!empty($gambarPaths)) {
            // Delete the image files from storage
            Storage::delete($gambarPaths);

            // Delete the database records
            $produk->gambar()->delete();
        }

        // Delete the associated categories
        $produk->kategori()->detach();

        // Perform the deletion
        try {
            $produk->delete();
            return response()->json([
                'status' => true,
                'info' => 'Produk deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'info' => 'Error deleting Produk'
            ]);
        }
    }
}
