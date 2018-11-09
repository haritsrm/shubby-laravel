<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryService extends Controller
{
    public function newCategory()
    {
        return new Category;
    }

    public function browse()
    {
        return $this->newCategory()->all();
    }

    public function find($id)
    {
        return $this->newCategory()->find($id);
    }

    public function create($req)
    {
        return $this->newCategory()->create($req);
    }

    public function update($id, $req)
    {
        return $this->find($id)->update($req);
    }
}
