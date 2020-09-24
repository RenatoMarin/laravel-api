<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $games = array('Dark Souls', 'Demon Souls', 'Dragon Age', 'Mass Effect');
        return view('welcome', compact('games'));
    }
}
