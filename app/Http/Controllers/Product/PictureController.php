<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PictureController extends Controller
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
