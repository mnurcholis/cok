<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Operator;
use App\Models\Produk;
use App\Models\Retribusi;
use App\Models\Settings;
use App\Models\SiteOperator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_title                 = 'DashBoard';
        $data['total_kategori']     = Kategori::get()->count();
        $data['total_produk']       = Produk::get()->count();
        $data['total_retribusi']    = Retribusi::get()->count();
        $data['id']                 = 1;

        return view('admin.dashboard', compact(['page_title']))->with($data);
    }
}
