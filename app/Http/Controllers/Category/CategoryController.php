<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller as BaseController;

use App\Http\Controllers\CategoryService;

use Alert;

class CategoryController extends BaseController
{
    public function __construct()
    {
        $this->category = new CategoryService;
    }

    public function index()
    {
        $categories = $this->category->browse();
        return view('views_admin.kategori_tabel')->with('categories', $categories);
    }

    public function create(Request $req)
    {
        $this->category->create([
            'name' => $req->name,
        ]);

        Alert::success('Menambahkan kategori baru!', 'Berhasil');
        return redirect()->back();
    }

    public function update(Request $req, $id)
    {
        $category = $this->category->find($id);
        $category->update([
            'name' => $req->name,
        ]);
        
        Alert::success('merubah kategori!', 'Berhasil');
        return redirect()->back();
    }

    public function delete($id)
    {
        $category = $this->category->find($id);
        $category->delete();

        Alert::success('Menghapus '.$category->name.' dari daftar!', 'Berhasil');
        return redirect()->back();
    }
}
