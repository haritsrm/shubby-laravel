<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->order = new OrderService;
        $this->cart = new CartService;
    }

    public function index()
    {
        $orders = $this->order->browse();
        return view('order.index', $orders);
    }

    public function create(Request $req)
    {
        $code = rand(10000,1001238912);
        $status = 'not yet paid';
        foreach($this->cart->browse() as $cart){
            $this->order->create([
                'code' => $code,
                'id_product' => $cart->id_product,
                'id_user' => $cart->id_user,
                'status' => $status,
            ]);
            $this->cart->delete($cart->id);
        }

        return redirect('orders');
    }

    public function cancelOrder($code)
    {
        $order = $this->order->code($code);
        $order->delete();

        return redirect('orders');
    }
}
