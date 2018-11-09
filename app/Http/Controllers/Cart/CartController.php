<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller as BaseController;

use Illuminate\Http\Request;

class CartController extends BaseController
{
    public function __construct()
    {
        $this->cart = new CartService;
    }

    public function index()
    {
        $carts = $this->cart->browse();
        return view('cart.index', $carts);
    }

    public function create(Request $req)
    {
        $this->cart->create([
            'id_product' => $req->product,
            'id_user' => Auth::user()->id,
            'quantity' => $req->quantity,
        ]);

        return redirect('carts');
    }

    public function edit()
    {
        $cart = $this->cart->find($id);
        return view('cart.edit', $cart);
    }

    public function update(Request $req, $id)
    {
        $cart = $this->cart->find($id);
        $cart->update([
            'id_product' => $req->product,
            'id_user' => Auth::user()->id,
            'quantity' => $req->quantity,
        ]);

        return redirect('carts');
    }

    public function delete($id)
    {
        $cart = $this->cart->find($id);
        $cart->delete();

        return redirect('carts');
    }
}
