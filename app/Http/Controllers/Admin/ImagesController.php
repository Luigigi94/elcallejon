<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $images = $product->images()->orderBy('featured', 'desc')->get();
        return view('admin.products.images.index')->with(compact('product','images'));
    }

    public function store(Request $request, $id)
    {

//        Para subir al servidor la imagen se usa esto
//        $path = public_path().'/img/products'; //con esto se guarda la ubicación de la carpeta que alojará la imagen.
//        $moved = $file->move($path,$fileName); //con esto se guardan en la ruta $path con el nombre $filename y se guarda en la variable para verificar que el archivo esté en la carpeta de manera física
//                                       y se pueda guardar en la db

        $file = $request->file('photo'); //Con esto se extraé la imagen y se guarda en la variable $file.
        $fileName = uniqid() . $file->getClientOriginalName(); //con esto se le asigna un identificador unico para evitar que el servidor sobreescriba archivos con el mismo nombre de archivo.
        $guardo = Storage::disk('local')->put($fileName,File::get($file));

//        para guardar en la db se hace esto

        if ($guardo){
            $productImage = new ProductImage();
            $productImage->image = $fileName;
            $productImage->product_id= $id;
            $productImage->save();

        }

//        if ($moved){
//            $productImage = new ProductImage();
//            $productImage->image = $fileName;
//            $productImage->product_id= $id;
//            $productImage->save();
//        }

        return back();
    }

    public function destroy(Request $request, $id)
    {
//        primero se elimina el archivo en la ruta del servidor

        $imagenes = ProductImage::find($request->input('image_id'));
        if (substr($imagenes->image, 0, 4) === "http") {
            $deleted = true;
        } else {
            $name = $imagenes->image;
//            $fullPath = '/images/products/';

            $deleted = Storage::disk('local')->delete($name);
//            @dd($deleted);
        }

//        eliminar en la db
        if($deleted){
            $imagenes->delete();
        }

        return back();
    }

    public function select($id, $image)
    {
        ProductImage::where('product_id',$id)->update([
            'featured' => false
        ]);

        $productImage = ProductImage::find($image);
        $productImage->featured = true;
        $productImage->save();

        return back();
    }
}
