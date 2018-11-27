<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller as BaseController;

use App\Http\Controllers\ProductService;

use App\Http\Controllers\PictureService;

use App\Http\Controllers\StockService;

use App\Http\Controllers\OrderService;

use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->product = new ProductService;
        $this->picture = new PictureService;
        $this->stock   = new StockService;
        $this->order   = new OrderService;
    }

    public function index()
    {
        $products = $this->product->browse();
        return view('product.index')->with('products', $products);
    }

    // public function latest()
    // {
    //     $products = $this->product->browse()->orderBy('created_at', 'asc');
    //     return view('product.index')->with('products', $products);
    // }

    // public function bestSelling()
    // {
    //     $products = [];
    //     $orders = $this->order->select('id_product', DB::raw('count(*) as total'))
    //                 ->groupBy('id_product')
    //                 ->orderBy('id_product', 'desc')
    //                 ->get();
    //     foreach($orders as $order){
    //         array_push($this->product->find($order->id_product));
    //     }

    //     return view('product.index')->with('products', $products);
    // }

    public function detail($id)
    {
        $product = $this->product->find($id);
        return view('product.detail')->with('product', $product);
    }

    public function new()
    {
        return view('product.new');
    }

    public function create(Request $req)
    {
        $pict = $req->pictures;
        $product = $this->product->create([
            'name' => $req->name,
            'id_category' => $req->category,
            'description' => $req->description,
            'price' => $req->price,
        ]);
        foreach ($pict as $p)
        {
            $this->picture->create([
                'id_product' => $product->id,
                'picture' => base64_encode($p),
            ]);
        }
        $this->stock->create([
            'id_product' => $product->id,
            'stock' => $req->stock,
        ]);

        return redirect('products');
    }

    public function edit()
    {
        $product = $this->product->find($id);
        return view('product.edit', $product);
    }

    public function update(Request $req, $id)
    {
        $product = $this->product->find($id);
        $product->update([
            'name' => $req->name,
            'id_category' => $req->category,
            'pictures' => $picts,
            'description' => $req->description,
            'price' => $req->price,
        ]);

        return redirect('products');
    }

    public function delete($id)
    {
        $product = $this->product->find($id);
        $product->delete();

        return redirect('products');
    }
}
