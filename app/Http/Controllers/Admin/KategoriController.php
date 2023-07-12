<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    public function index()
    {
        $page_title                 = 'Daftar Kategori Produk';

        return view('admin.produk.kategori.index', compact(['page_title']));
    }

    public function json()
    {
        $data = Kategori::orderBy('created_at', 'DESC');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<button id="button_edit_kategori" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_kategori" data-id="' . $row->id . '" data-name="' . $row->kategori . '"><i class="bi bi-pencil-square"></i></button>';
                $actionBtn .= ' <button id="button_delete_kategori" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                data-bs-target="#modal_delete_kategori" data-id="' . $row->id . '" data-name="' . $row->kategori . '"><i class="bi bi-trash-fill"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function save(Request $request)
    {
        $data = [
            'kategori'     => $request->name,
            'id_user'      => Auth::user()->id
        ];
        Kategori::create($data);

        // Sending json response to client
        return response()->json([
            "status"    => true,
            "info"      => "Berhasil Simpan Data"
        ]);
    }

    public function update(Request $request)
    {
        $data = [
            'kategori'     => $request->name,
            'updated_at'   => date("Y-m-d H:i:s")
        ];
        Kategori::where('id', $request->id)->update($data);

        // Sending json response to client
        return response()->json([
            "status"    => true,
            "info"      => "Berhasil Update Data"
        ]);
    }

    public function delete(Request $request)
    {
        // $check_count = SiteOperator::where(['id_operator' => $request->id]);
        // if ($check_count->count() > 0) {
        //     return response()->json([
        //         "status"    => false,
        //         "info"      => "Tidak Bisa Hapus Data"
        //     ]);
        // } else {
            $operator          = Kategori::find($request->id);
            $operator->delete();

            // Sending json response to client
            return response()->json([
                "status"    => true,
                "info"      => "Berhasil Hapus Data"
            ]);
        // }
    }
}
