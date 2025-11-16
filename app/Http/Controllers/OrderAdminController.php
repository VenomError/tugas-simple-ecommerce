<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function index()
    {
        return view('admin.order');
    }

    public function detail($order){
        return view('admin.order-detail');
    }
}
