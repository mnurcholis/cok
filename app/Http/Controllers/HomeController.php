<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_title = 'Home';
        $produk = Produk::with(['kategori', 'gambar'])->simplePaginate(6);

        return view('web.home', compact(['page_title', 'produk']));
    }

    public function shop_product($id)
    {
        $data = Produk::with('gambar')->find($id);
        $page_title = 'Detail ' . $data->nama;
        $produk = Produk::inRandomOrder()->take(6)->get();
        return view('web.shop', compact(['data','page_title','produk']));
    }
}
