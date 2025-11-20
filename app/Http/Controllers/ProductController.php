<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.product-view');
    }

    public function create()
    {
        return view('products.product-create');
    }

    public function edit($id)
    {
        return view('products.product-edit');
    }
}
