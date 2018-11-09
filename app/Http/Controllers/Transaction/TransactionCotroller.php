<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller as BaseController;

use Illuminate\Http\Request;

class TransactionController extends BaseController
{
    public function __construct()
    {
        $this->transaction = new TransactionService;
        $this->order = new OrderService;
    }

    public function index()
    {
        $transactions = $this->transaction->browse();
        return view('transaction.index', $transactions);
    }

    public function create(Request $req)
    {
        $status = 'paid off';
        $this->transaction->create([
            'code_order' => $req->code,
            'id_user' => Auth::user()->id,
            'proof' => base64_encode($req->proof),
        ]);
        foreach($this->order->code($req->code) as $order){
            $this->order->update([
                'status' => $status,
            ]);
        }

        return redirect('transaction.index');
    }
}
