<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MenuController extends Controller
{
    public function index()
    {
        $page_title = 'Pengaturan Menu';
        $menu = Menu::orderBy('title', 'ASC')->pluck('title', 'id');

        return view('admin.setting.menu.index', compact(['page_title', 'menu']));
    }

    public function json()
    {
        $data = Menu::get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<button id="button_edit_menu" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_menu" data-id="' . $row->id . '" data-title="' . $row->title . '" data-slug="' . $row->slug . '" data-parent_id="' . $row->parent_id . '"><i class="bi bi-pencil-square"></i></button>';
                $actionBtn .= ' <button id="button_delete_menu" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                data-bs-target="#modal_delete_menu" data-id="' . $row->id . '" data-title="' . $row->title . '" data-slug="' . $row->slug . '" data-parent_id="' . $row->parent_id . '"><i class="bi bi-trash-fill"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function daftar()
    {
        $data = Menu::get();
        return response()->json($data);
    }

    public function save(Request $request)
    {
        $data = [
            'title' => $request->title,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ];
        Menu::create($data);

        // Sending json response to client
        return response()->json([
            "status"    => true,
            "info"      => "Berhasil Simpan Data"
        ]);
    }

    public function update(Request $request)
    {
        $data = [
            'title'        => $request->title,
            'slug'         => $request->slug,
            'parent_id'    => $request->parent_id,
            'updated_at'   => date("Y-m-d H:i:s")
        ];
        Menu::where('id', $request->id)->update($data);

        // Sending json response to client
        return response()->json([
            "status"    => true,
            "info"      => "Berhasil Update Data"
        ]);
    }

    public function delete(Request $request)
    {
        $site          = Menu::find($request->id);

        // Sending json response to client
        if ($site->delete()) {
            return response()->json([
                "status"    => true,
                "info"      => "Berhasil Hapus Data"
            ]);
        } else {
            return response()->json([
                "status"    => false,
                "info"      => "Gagal Hapus Data"
            ]);
        }
    }
}
