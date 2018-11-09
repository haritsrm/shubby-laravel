<?php

namespace App\Http\Controllers;
use App\Rating;
use Illuminate\Http\Request;

class RatingService extends Controller
{
    public function newRating()
    {
        return new Rating;
    }

    public function browse()
    {
        return $this->newRating()->all();
    }

    public function find($id)
    {
        return $this->newRating()->find($id);
    }

    public function create($req)
    {
        return $this->newRating()->create($req);
    }

    public function update($id, $req)
    {
        return $this->find($id)->update($req);
    }
}
