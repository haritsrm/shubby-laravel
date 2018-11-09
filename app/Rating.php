<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'id_product', 'id_user', 'rate', 'review',
    ];
}
