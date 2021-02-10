<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);

//        $data =\DB::table('organizador')
//            ->join('unidades', 'organizador.unidad', '=', 'unidades.id')
//            ->select('unidades.unidad', 'organizador.columnaElegida')
//            ->get();
//        SELECT 'products.id AS idprod', 'products.name AS prodname', 'products.description AS descpro', 'products.price AS priceprod', 'products.category_id AS idforanea', 'categories.name AS catename'
//        FROM categories
//        INNER JOIN products ON products.category_id = categories.id
        $images = DB::table('categories AS c')
            ->join('products AS p', 'p.category_id', '=', 'c.id')
            ->select('p.id AS idprod', 'p.name AS prodname', 'p.description AS descpro', 'p.price AS priceprod', 'p.category_id AS idforanea', 'c.name AS catename')
            ->orderBy('idprod')
            ->paginate(6);

//        @dd($images);
        return view('admin.products.index')->with(compact('products','images'));
    }

    public function create()
    {
        return view('admin.products.create'); // ver el formulario de registro
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
        //registrar el producto en la db
//        dd($request->all());
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->save();

        return redirect('/admin/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
//        dd($product);
        return view('admin.products.edit')->with(compact('product'));
    }

    public function update(Request $request, $id)
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
        //registrar el producto en la db
//        dd($request->all());
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->save();

        return redirect('/admin/products');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back();
    }



}
