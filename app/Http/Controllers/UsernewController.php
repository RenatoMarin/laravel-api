<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsernewController extends Controller
{
    public function index(Request $request){
        //Retorna método
        //return $request->method();
        //Retorna path
        //return $request->path();
        //Retorna URL
        //return $request->url();
        //Retorna FULL URL
        return $request->fullurl();
    }
}
