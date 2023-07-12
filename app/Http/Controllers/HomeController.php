<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_title = 'Home';

        return view('web.home', compact(['page_title']));
    }

    public function shop_product()
    {
        return view('web.shop');
    }
}
