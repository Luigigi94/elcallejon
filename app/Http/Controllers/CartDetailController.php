<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function store(Request $request)
    {
        $cartDetail = new CartDetail();
        $cartDetail->cart_id = auth()->user()->cart->id;
//        $user = auth()->user();
//        $cart =  $user->;
//        $cartDetail->cart_id = $cart;
        $cartDetail->product_id = $request->product_id;
        $cartDetail->quantity = $request->quantity;
//        @dd($cartDetail);
        $cartDetail->save();

        $notification = 'El producto se ha agregado al carrito correctamente';
        return back()->with(compact('notification'));
    }

    public function destroy(Request $request)
    {
        $cartDetail = CartDetail::find($request->cart_detail_id);

        if ($cartDetail->cart_id == auth()->user()->cart->id)
            $cartDetail->delete();

        $notification = 'Producto Eliminado';
        return back()->with(compact('notification'));
    }
}
