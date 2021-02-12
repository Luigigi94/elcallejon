<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);

        return view('admin.categories.index')->with(compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');

    }

    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();

        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
//        $product = Product::find($id);
//        @dd($categories);
        return view('admin.categories.edit')->with(compact('category'));
    }

    public function update(Request $request, Category $category)
    {

        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();
        return redirect('/admin/categories');

    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
