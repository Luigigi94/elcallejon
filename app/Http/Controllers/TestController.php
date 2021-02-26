<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

        $categories = Category::has('products')->get();
        return view('welcome')->with(compact('categories'));

    }
}
