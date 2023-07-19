<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $page_title = 'Daftar Page';

        return view('admin.page.index', compact(['page_title']));
    }

    public function json()
    {
        $data = Page::orderBy('created_at', 'DESC');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="' . route('edit-page', ['id' => $row->id]) . '" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>';
                $actionBtn .= ' <button id="button_delete_page" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                data-bs-target="#modal_delete_page" data-id="' . $row->id . '" data-title="' . $row->title . '"><i class="bi bi-trash-fill"></i></button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $page_title = 'Membuat Page';

        return view('admin.page.create', compact(['page_title']));
    }

    public function store(Request $request)
    {
        $data           = new Page();
        $data->title    = $request->title;
        $data->slug     = Str::slug(request('title'));
        $data->desc     = $request->desc;
        $data->save();

        return redirect('admin/page');
    }

    public function edit($id)
    {
        $page_title = 'Ubah Page';
        $page = Page::find($id);

        return view('admin.page.edit', compact(['page_title', 'page']));
    }

    public function update(Request $request, $id)
    {
        $data           = Page::find($id);
        $data->title    = $request->title;
        $data->slug     = Str::slug(request('title'));
        $data->desc     = $request->desc;
        $data->save();

        return redirect('admin/page');
    }

    public function delete(Request $request)
    {
        $site          = Page::find($request->id);

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
