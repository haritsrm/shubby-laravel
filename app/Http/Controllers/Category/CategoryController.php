<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller as BaseController;

class CategoryController extends BaseController
{
    public function __construct()
    {
        $this->category = new CategoryService;
    }

    public function index()
    {
        $categories = $this->category->browse();
        return view('category.index', $categories);
    }

    public function new()
    {
        return view('category.new');
    }

    public function create(Request $req)
    {
        $this->category->create([
            'name' => $req->name,
        ]);

        return redirect('categories');
    }

    public function edit()
    {
        $category = $this->category->find($id);
        return view('category.edit', $category);
    }

    public function update(Request $req, $id)
    {
        $category = $this->category->find($id);
        $category->update([
            'name' => $req->name,
        ]);

        return redirect('categories');
    }

    public function delete($id)
    {
        $category = $this->category->find($id);
        $category->delete();

        return redirect('categories');
    }
}
