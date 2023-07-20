<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_title = 'Home';
        $produk = Produk::with(['kategori', 'gambar'])->simplePaginate(6);
        $galeri = Galeri::inRandomOrder()->take(10)->get();

        return view('web.home', compact(['page_title', 'produk', 'galeri']));
    }

    public function galeri()
    {
        $page_title = 'Galeri';
        $galeri = Galeri::inRandomOrder()->get();

        return view('web.galeri', compact(['page_title', 'galeri']));
    }

    public function produk()
    {
        $page_title = 'Semua Produk Produk';
        $produk = Produk::inRandomOrder()->get();

        return view('web.produk', compact(['page_title', 'produk']));
    }

    public function shop_product($id)
    {
        $data = Produk::with('gambar')->find($id);
        $page_title = 'Detail ' . $data->nama;
        $produk = Produk::inRandomOrder()->take(6)->get();
        return view('web.shop', compact(['data', 'page_title', 'produk']));
    }
}
