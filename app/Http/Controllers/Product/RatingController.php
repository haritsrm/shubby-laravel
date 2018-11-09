<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller as BaseController;

use Illuminate\Http\Request;

class RatingController extends BaseController
{
    public function __construct()
    {
        $this->rating = new RatingService;
    }

    public function create(Request $req)
    {
        $this->rating->create([
            'id_product' => $req->product,
            'id_user' => Auth::user()->id,
            'rate' => $req->rate,
            'review' => $req->review,
        ]);

        return redirect('product');
    }

    public function update(Request $req, $id)
    {
        $rating = $this->rating->find($id);
        $rating->update([
            'id_product' => $req->product,
            'id_user' => Auth::user()->id,
            'rate' => $req->rate,
            'review' => $req->review,
        ]);

        return redirect('product');
    }

    public function delete($id)
    {
        $rating = $this->rating->find($id);
        $rating->delete();

        return redirect('product');
    }
}
