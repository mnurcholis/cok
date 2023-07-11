<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('web.home');
    }
    
    public function shop_product(){
        return view('web.shop');
    }
}
