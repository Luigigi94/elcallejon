<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $ima = DB::select('select `products`.`id` AS `prodid`, `products`.`name` AS `nameprod`,
       `cat`.`name` AS `catname`, `products`.`price` AS `prodprice`, `cat`.`image` AS `catim`,`cat`.`id` AS `catid`
from `categories` as `Cat` inner join `products` on `products`.`category_id` = `cat`.`id` ');

//        ALTER TABLE products ADD CONSTRAINT fkey FOREIGN KEY (category_id) REFERENCES categories(id)  esta se necesito para poder usar el accesor
        $products = Product::paginate(9);

        return view('welcome')->with(compact('ima','products'));

    }
}
