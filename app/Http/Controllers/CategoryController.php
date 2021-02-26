<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $products = $category->products;
        return view('categories.show')->with(compact('category','products'));
    }
}
