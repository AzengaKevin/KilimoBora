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
            'price' => ['required', 'numeric'],
            'description' =>['required','min:3','max:1000'],
            'image' => ['image', 'mimes:png,jpg,jpeg,bmp', 'max:2048'],
        ]);

        $product = Product::create($data);

        if($request->hasFile('image')){
            $url = $request->file('image')->store('uploads/images', 'public');

            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
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
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'product_category_id' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'description' => ['string'],
            'image' => ['image', 'mimes:png,jpg,jpeg,bmp', 'max:2048'],
        ]);

        //Persist the changed data on the products table
        $product->update($data);

        //Check whether a new image for the product has been uploaded
        if($request->hasFile('image')){

            //Delete the previous image with the record if it exists
            if(!is_null($product->image)){
                $product->image->deleteFromStorage();
                $product->image()->delete();
            }            

            //Upload the new Image and link it to the product
            $url = $request->file('image')->store('uploads/images', 'public');

            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(256, 320)->save();

            $product->image()->create([
                'url' => "/storage/{$url}",
                'thumb_url' => "/storage/{$thumb_url}",
            ]);            
        }

        $request->session()->flash('success_message', 'Product Updated successfully');

        return redirect()->route('admin.products.index');
    }

    public function destroy(Request $request, Product $product)
    {
        //Delete product files from storage with the records
        if(!is_null($product->image)){
            $product->image->deleteFromStorage();
            $product->image()->delete();
        }

        //Delete the product record
        $product->delete();

        //Set the feedback
        $request->session()->flash('success_message', 'Product successfully deleted');

        //Redirect to browse other product resources
        return redirect()->route('admin.products.index');
    }
}
