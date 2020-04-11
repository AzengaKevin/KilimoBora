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

    public function destroy(ProductCategory $productCategory)
    {
        //Delete the category from the databae
        $productCategory->delete();

        return back();
    }
}
