<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovelsController extends Controller
{
    public function classify()
    {
        return view('home.classify');
    }

    public function detail()
    {
        return view('novel.detail');
    }

    public function show()
    {
        return view('novel.show');
    }
}
