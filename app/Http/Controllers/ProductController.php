<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index'); //ver el listado de productos
    }

    public function create()
    {
        return view('admin.products.create'); // ver el formulario de registro
    }

    public function store()
    {
        //registrar el producto en la db
    }
}
