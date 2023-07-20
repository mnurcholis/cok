<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paketcctv;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PaketcctvController extends Controller
{
    public function index()
    {
        $page_title = 'Daftar Paket CCTV';

        return view('admin.paketcctv.index', compact(['page_title']));
    }

    public function json()
    {
        $data = Paketcctv::orderBy('created_at', 'DESC');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="' . route('edit-paketcctv', ['id' => $row->id]) . '" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>';
                $actionBtn .= ' <button id="button_delete_paketcctv" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                data-bs-target="#modal_delete_paketcctv" data-id="' . $row->id . '" data-name="' . $row->nama . '"><i class="bi bi-trash-fill"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $page_title     = 'Tambah Paket CCTv';

        return view('admin.paketcctv.create', compact(['page_title']));
    }

    public function save(Request $request)
    {
        // Validasi data form
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Aturan validasi untuk file gambar
            'description' => 'required',
        ]);
        try {
            DB::transaction(function () use ($request) {
                // Ambil data form
                $nama = $request->nama;
                $harga = $request->harga;
                $description = $request->description;
                $path = $request->path->store('public/paketcctv');

                // Simpan data paket cctv ke database
                $paketcctv = new Paketcctv();
                $paketcctv->nama = $nama;
                $paketcctv->harga = $harga;
                $paketcctv->description = $description;
                $paketcctv->path = $path;
                $paketcctv->save();
            });

            return redirect('admin/paketcctv');
        } catch (QueryException $e) {
            return redirect('admin/paketcctv/create');
        } catch (\Exception $e) {
            return redirect('admin/paketcctv/create');
        }
    }

    public function edit($id)
    {
        $paketcctv         = Paketcctv::find($id);
        $page_title     = 'Edit Paket CCTV ' . $paketcctv->nama;

        return view('admin.paketcctv.edit', compact(['page_title', 'paketcctv']));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'description' => 'required',
        ]);

        // Find the product by ID
        $paketcctv = Paketcctv::findOrFail($id);

        // Update the product's information
        $paketcctv->nama = $request->nama;
        $paketcctv->harga = $request->harga;
        $paketcctv->description = $request->description;

        if ($request->path) {
            Storage::delete($paketcctv->path);
            $paketcctv->path = $request->path->store('public/paketcctv');
        }

        // Save the updated product
        $paketcctv->save();

        return redirect('admin/paketcctv');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        // Check if the ID is valid and exists in the database
        $paketcctv = Paketcctv::find($id);
        if (!$paketcctv) {
            return response()->json([
                'status' => false,
                'info' => 'Invalid Paket CCTV ID'
            ]);
        }

        // Perform the deletion
        try {
            Storage::delete($paketcctv->path);
            $paketcctv->delete();
            return response()->json([
                'status' => true,
                'info' => 'Paket CCTV deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'info' => 'Error deleting Paket CCTV'
            ]);
        }
    }
}
