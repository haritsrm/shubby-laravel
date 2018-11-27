<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller as BaseController;

use App\Http\Controllers\PictureService;

use Illuminate\Http\Request;

class PictureController extends BaseController
{
    public function __construct()
    {
        $this->picture = new PictureService;
    }

    public function edit()
    {
        $picture = $this->picture->find($id);
        return view('product.edit', $picture);
    }

    public function update(Request $req, $id)
    {
        $picture = $this->picture->find($id);
        $picture->update([
            'picture' => $req->picture,
        ]);

        return redirect('products');
    }
}
