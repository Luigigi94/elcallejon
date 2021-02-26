<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $statboard = DB::select('SELECT COUNT(status) FROM boards WHERE status = 1');
        $products = Product::all();
        $boards = Board::all();
        return view('home')->with(compact('products','boards', 'statboard'));
    }
}
