<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function index()
    {
        return view('admin.product');
    }
    public function tambah()
    {
        return view('admin.product-tambah');
    }
    public function detail($slug)
    {
        return view('admin.product-detail');
    }

    public function invoice(){
        return view('admin.product-invoice');
    }

    public function category(){
        return view('admin.category');
    }
}
