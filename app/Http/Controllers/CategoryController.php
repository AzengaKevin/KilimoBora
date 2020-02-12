<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:50', 'unique:categories'],
            'description' => ['required', 'min:20', 'max:1000'],
        ]);

        Category::create($data);

        return redirect()->route('categories.index');

    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:20', 'max:1000'],
        ]);

        $category->update($data);

        return redirect()->route('categories.show', $category);
    }

    public function destroy(Category $category)
    {
        //Delete category
        $category->delete();

        return redirect()->route('categories.index');
    }
}
