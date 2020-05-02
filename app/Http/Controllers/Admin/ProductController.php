<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\Product;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
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
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'product_category_id' => ['required', 'numeric'],
            'description' =>['required','min:3','max:1000'],
            'image' => ['image', 'mimes:png,jpg,jpeg,bmp'],
        ]);

        $product = Product::create($data);

        if($request->hasFile('image')){
            $url = $request->file('image')->store('uploads/images', 'public');

            $thumb_url = $request->file('image')->store('uploads/images', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(256, 320)->save();

            $product->image()->create([
                'url' => "/storage/{$url}",
                'thumb_url' => "/storage/{$thumb_url}",
            ]);
        }

        return redirect()->route('admin.products.index');
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
