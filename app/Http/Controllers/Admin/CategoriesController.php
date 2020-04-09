<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:50', 'unique:categories'],
            'description' => ['required', 'min:20', 'max:1000'],
        ]);

        Category::create($data);

        return redirect()->route('admin.categories.index');

    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:20', 'max:1000'],
        ]);

        $category->update($data);

        return redirect()->route('admin.categories.show', $category);
    }

    public function destroy(Category $category)
    {
        //Delete category
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}

