<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function pembayaran()
    {
        return view('order.pembayaran');
    }
}
