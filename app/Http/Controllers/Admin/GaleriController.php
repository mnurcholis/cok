<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class GaleriController extends Controller
{
    public function index()
    {
        $page_title                 = 'Daftar Galeri';

        return view('admin.galeri.index', compact(['page_title']));
    }

    public function json()
    {
        $data = Galeri::orderBy('created_at', 'DESC');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<button id="button_edit_galeri" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_galeri" data-id="' . $row->id . '" data-name="' . $row->name . '"><i class="bi bi-pencil-square"></i></button>';
                $actionBtn .= ' <button id="button_delete_galeri" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                data-bs-target="#modal_delete_galeri" data-id="' . $row->id . '" data-name="' . $row->name . '"><i class="bi bi-trash-fill"></i></button>';
                return $actionBtn;
            })
            ->addColumn('gambar', function ($row) {
                $actionBtn = '<img src="' . url('/') . Storage::url($row->path) . '" alt="' . $row->name . '" class="col-md-12 col-lg-6 col-xl-4 mb-2" />';
                return $actionBtn;
            })
            ->rawColumns(['action', 'gambar'])
            ->make(true);
    }

    public function save(Request $request)
    {
        if ($request->id) {
            $galeri = Galeri::find($request->id);
            // Remove the image file from storage
            Storage::delete($galeri->path);

            $galeri->name = $request->name;
            $galeri->path = $request->path->store('public/galeri');
        } else {
            $galeri = new Galeri();
            $galeri->name = $request->name;
            $galeri->path = $request->path->store('public/galeri');
        }

        $galeri->save();

        // Sending json response to client
        return response()->json([
            "status"    => true,
            "info"      => "Data Berhasil disimpan..."
        ]);
    }

    public function delete(Request $request)
    {
        $galeri          = Galeri::find($request->id);
        // Remove the image file from storage
        Storage::delete($galeri->path);
        $galeri->delete();

        // Sending json response to client
        return response()->json([
            "status"    => true,
            "info"      => "Berhasil Hapus Data"
        ]);
    }
}
