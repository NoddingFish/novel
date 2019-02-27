<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovelsController extends Controller
{
    public function classify()
    {
        return view('home.classify');
    }
}
