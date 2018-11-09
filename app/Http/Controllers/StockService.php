<?php

namespace App\Http\Controllers;
use App\Stock;
use Illuminate\Http\Request;

class StockService extends Controller
{
    public function newStock()
    {
        return new Stock;
    }

    public function find($id)
    {
        return $this->newStock()->find($id);
    }

    public function create($req)
    {
        return $this->newStock()->create($req);
    }

    public function update($id, $req)
    {
        return $this->find($id)->update($req);
    }
}
