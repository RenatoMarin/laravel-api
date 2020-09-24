<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Hello There! General Kenobi';
    }
    //Function com parametro name ($name = null) <- para parametro opcional
    public function indexWithParameter($name)
    {
        return 'Hello There! ' . $name;
    }
}
