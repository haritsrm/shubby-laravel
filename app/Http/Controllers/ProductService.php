<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductService extends Controller
{
    public function newProduct()
    {
        return new Product;
    }

    public function browse()
    {
        return $this->newProduct()->all();
    }

    public function find($id)
    {
        return $this->newProduct()->find($id);
    }

    public function create($req)
    {
        return $this->newProduct()->create($req);
    }

    public function update($id, $req)
    {
        return $this->find($id)->update($req);
    }
}
