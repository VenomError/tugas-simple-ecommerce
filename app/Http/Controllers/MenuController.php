<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    public function account()
    {
        return view('landing.account');
    }

    public function shop()
    {
        return view('landing.shop');
    }

    public function auth()
    {
        return view('landing.auth');
    }

    public function wishlist()
    {
        return view('landing.wishlist');
    }

    public function cart()
    {
        return view('landing.cart');
    }
    public function checkout()
    {
        return view('landing.checkout');
    }

    public function detailProduct()
    {
        return view('landing.product-detail');
    }

    public function dashboardIndex()
    {
        return view('admin.index');
    }

    public function productIndex()
    {
        return view('admin.product');
    }
    public function productTambah()
    {
        return view('admin.product-tambah');
    }
    public function productDetail($slug)
    {
        return view('admin.product-detail');
    }

    public function productInvoice()
    {
        return view('admin.product-invoice');
    }

    public function productCategory()
    {
        return view('admin.category');
    }

    public function orderIndex()
    {
        return view('admin.order');
    }

    public function orderDetail($order)
    {
        return view('admin.order-detail');
    }

    public function costumerIndex()
    {
        return view('admin.costumer');
    }
}
