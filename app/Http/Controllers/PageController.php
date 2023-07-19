<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Produk;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data = Page::first();
        return view('web.page.index', compact(['data']));
    }
}
