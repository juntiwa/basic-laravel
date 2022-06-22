<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_product_form()
    {
        return view('json.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
       
        return redirect()->back();
    }

    public function index()
    {
        $post = Product::all();

        return view('json.index', ['products' => $post]);
    }
}
