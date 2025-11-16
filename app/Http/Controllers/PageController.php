<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }
    public function shop()
    {
        return view('landing.shop');
    }

    public function auth(){
        return view('landing.auth');
    }

    public function wishlist(){
        return view('landing.wishlist');
    }

}
