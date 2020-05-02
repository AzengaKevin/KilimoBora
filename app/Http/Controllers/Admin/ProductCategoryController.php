<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCategory;

class ProductCategoryController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {   
        $productCategories = ProductCategory::latest()->get();

        return view('admin.product_categories.index', ['categories' => $productCategories]);
    }

    public function create()
    {
        return view('admin.product_categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:20', 'unique:product_categories'],
            'description' => ['required', 'min:20', 'max:1000'],
        ]);

        ProductCategory::create($data);

        return redirect()->route('admin.product_categories.index');

    }


    public function edit(ProductCategory $productCategory)
    {
        return view('admin.product_categories.edit', compact('productCategory'));
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:20', 'max:1000'],
        ]);

        $productCategory->update($data);

        $request->session()->flash('success_message', 'Product category updated successfully');

        return redirect()->route('admin.product_categories.index');
    }    

    public function destroy(ProductCategory $productCategory)
    {
        //Delete the category from the databae
        $productCategory->delete();

        return back();
    }
}
