<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller as BaseController;

use App\Http\Controllers\CartService;

use Alert;

use App\Cart;

use Illuminate\Http\Request;

class CartController extends BaseController
{
    public function __construct()
    {
        $this->cart = new CartService;
    }

    public function index()
    {
        $carts = $this->cart->browse()->where('id_user', Auth::user()->id);
        return view('cart.index')->with('carts', $carts);
    }

    public function create(Request $req)
    {
        $products = Cart::select('id_product')->where('id_user', Auth::user()->id)->get();
        $condition = true;

        foreach($products as $product)
        {
            if($req->product == $product->id_product)
            {
                $condition = false;
            }
        }

        if( $condition == true )
        {
            $this->cart->create([
                'id_product' => $req->product,
                'id_user' => Auth::user()->id,
                'quantity' => $req->quantity,
            ]);
    
            alert()->success('Menambahkan ke keranjang!', 'Berhasil');
            return redirect()->back();
        }
        elseif( $condition == false )
        {
            alert()->warning('Barang sudah ada di keranjang!', 'Warning');
            $condition = true;
            return redirect()->back();
        }
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

        Alert::success('Menghapus barang dari keranjang!', 'Berhasil');
        return redirect('carts');
    }
}
