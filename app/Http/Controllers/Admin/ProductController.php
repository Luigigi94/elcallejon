<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        return view('admin.products.index')->with(compact('products'));
    }

    public function create()
    {
        $products = Product::all();
        $categories = Category::all();
//        @dd($products->products->id);
        return view('admin.products.create')->with(compact('products','categories')); // ver el formulario de registro

    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Nombre Requerido',
            'name.min' => 'El campo nombre debe tener al menos 3 caracteres',
            'price.required' => 'Precio Requerido',
            'price.numeric' => 'El campo Precio debe contener solo numeros',
            'price.min' => 'El campo Precio debe contener solo numeros positivos',
            'description.required' => 'Descripción Requerida',
            'description.max' => 'El campo Descripción debe tener como máximo 200 caracteres',
            'long_description.required' => 'Descripción larga Requerida',

        ];
        $rules= [
            'name' => 'required | min:3',
            'description' => 'required | max:200',
            'price' => 'required | numeric | min:0',
            'long_description' => 'required',

        ];

        $this->validate($request,$rules,$messages);
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect('/admin/products');
    }

    public function edit(Product $product)
    {
        $category = Category::all();
        return view('admin.products.edit')->with(compact('product','category'));
    }

    public function update(Request $request, Product $product)
    {
        $messages = [
            'name.required' => 'Nombre Requerido',
            'name.min' => 'El campo nombre debe tener al menos 3 caracteres',
            'price.required' => 'Precio Requerido',
            'price.numeric' => 'El campo Precio debe contener solo numeros',
            'price.min' => 'El campo Precio debe contener solo numeros positivos',
            'description.required' => 'Descripción Requerida',
            'description.max' => 'El campo Descripción debe tener como máximo 200 caracteres',
            'long_description.required' => 'Descripción larga Requerida',

        ];
        $rules= [
            'name' => 'required | min:3',
            'description' => 'required | max:200',
            'price' => 'required | numeric | min:0',
            'long_description' => 'required',

        ];

        $this->validate($request,$rules,$messages);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect('/admin/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }



}
