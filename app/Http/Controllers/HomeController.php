<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_title = 'Home';
        $produk = Produk::with(['kategori', 'gambar'])->paginate(6);

        return view('web.home', compact(['page_title', 'produk']));
    }

    public function shop_product()
    {
        return view('web.shop');
    }
}
