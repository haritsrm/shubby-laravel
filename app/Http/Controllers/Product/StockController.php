<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function __construct()
    {
        $this->stock = new StockService;
    }

    public function edit()
    {
        $stock = $this->stock->find($id);
        return view('product.edit', $stock);
    }

    public function update(Request $req, $id)
    {
        $stock = $this->stock->find($id);
        $stock->update([
            'stock' => $req->stock,
        ]);

        return redirect('products');
    }
}
