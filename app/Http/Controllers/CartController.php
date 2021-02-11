<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update()
    {
        $cart = auth()->user()->cart;
        $cart->status = 'Pending';
        $cart->save();

        $notification = 'Tu pedido ha sido generado. Se te contactará por Mail';
        return back()->with(compact('notification'));
    }
}
