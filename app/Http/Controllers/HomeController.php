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
        $status = DB::table('boards')
            ->where('status_id','=',1);
        $products = Product::all();
        $boards = Board::all();
        return view('home')->with(compact('products','boards', 'status'));
    }
}
