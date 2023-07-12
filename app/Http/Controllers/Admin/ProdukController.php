<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gambar_produks;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ProdukController extends Controller
{
    public function index()
    {
        $page_title                 = 'Daftar Produk';

        return view('admin.produk.index', compact(['page_title']));
    }

    public function json()
    {
        $data = Produk::orderBy('created_at', 'DESC');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<button id="button_edit_kategori" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_kategori" data-id="' . $row->id . '" data-name="' . $row->nama . '"><i class="bi bi-pencil-square"></i></button>';
                $actionBtn .= ' <button id="button_delete_kategori" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                data-bs-target="#modal_delete_kategori" data-id="' . $row->id . '" data-name="' . $row->nama . '"><i class="bi bi-trash-fill"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
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
            // 'kategori' => 'required|array',
            'status' => 'required',
        ]);

        // Ambil data form
        $nama = $request->nama;
        $harga = $request->harga;
        $description = $request->description;
        $kategori = $request->kategori;
        $status = $request->status;

        // Unggah file gambar ke server
        if ($request->hasFile('gambar')) {
            $gambarPaths = [];

            foreach ($request->file('gambar') as $gambar) {
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
        $produk->id_user = Auth::user()->id;
        $produk->save();

        // Simpan relasi kategori
        // $produk->kategori()->sync($kategori);

        // Simpan relasi gambar
        if (isset($gambarPaths)) {
            foreach ($gambarPaths as $gambarPath) {
                $gambar = new Gambar_produks();
                $gambar->path = $gambarPath;
                $produk->gambar()->save($gambar);
            }
        }

        // Redirect atau lakukan sesuatu setelah pengunggahan berhasil
        return redirect()->to('admin/produk/produk')->with('success', 'Produk berhasil diunggah!');
    }
}
