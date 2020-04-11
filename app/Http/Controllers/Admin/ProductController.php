<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::latest()->get();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {

    }

    public function edit(Product $product)
    {

    }

    public function update(Request $request, Product $product)
    {

    }

    public function destroy(Product $product)
    {

    }
}
