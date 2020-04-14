<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;

class ProductController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $products = Product::latest()->paginate(20);
        $categories = ProductCategory::all();

        return view('products.index', compact('products', 'categories'));
    }
}
