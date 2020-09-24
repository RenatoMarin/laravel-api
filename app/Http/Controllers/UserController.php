<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//compact cria uma array que contém variáveis e seus valores.
class UserController extends Controller
{
    public function index(){
        $name = 'General Kenobi';
        $users = array(
            "name" => "Obi Wan",
            "email" => "obiwan@gmail.com",
            "phone" => "1234567890",
            "gif" => "https://pa1.narvii.com/6524/747a54c974c00adccea1edb99ab92396b5f469e2_00.gif"
        );
        return view('user', compact('name', 'users'));
    }
}
