<?php

namespace App\Http\Controllers\Belanjaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BelanjaanController extends Controller
{
    public function index()
    {
        return view('belanjaan');
    }
}
