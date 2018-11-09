<?php

namespace App\Http\Controllers;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionService extends Controller
{
    public function newTransaction()
    {
        return new Transaction;
    }

    public function find($id)
    {
        return $this->newTransaction()->find($id);
    }

    public function create($req)
    {
        return $this->newTransaction()->create($req);
    }
}
