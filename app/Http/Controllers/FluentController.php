<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){
        echo '<h1>Fluent Strings</h1>';

        echo '<h4>After slice (Welcome to my Laravel tutorial) - after (Welcome to)</h4>';
        $slice = Str::of('Welcome to my Laravel tutorial')->after('Welcome to');
        echo $slice;

        echo '<h4>After Last slice (App\Http\Controllers\Controller) afterLast (\\\)</h4>';
        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2;

        echo '<h4>Basic Append</h4>';
        $string = Str::of('Hello')->append('World!');
        echo $string;

        echo '<h4>Lower function (LARAVEL)</h4>';
        $result = Str::of('LARAVEL 8')->lower();
        echo $result;

        echo '<h4>Replace (Laravel 7.0 -> 8.0)</h4>';
        $replace = Str::of('Laravel 7.0')->replace('7.0','8.0'); 
        echo $replace;

        echo '<h4>Convert to title</h4>';
        $converted = Str::of('This is a title')->title();
        echo $converted;

        echo '<h4>Convert to slug</h4>';
        $slug = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug;

        echo '<h4>Função subStr</h4>';
        $str = Str::of('Laravel Framework')->substr(8);
        echo $str;

        echo '<h4>Função Trim (/Laravel8/)</h4>';
        $str2 = Str::of('/Laravel8/')->trim('/');
        echo $str2;

        echo '<h4>Upper fuction (Laravel 8)</h4>';
        $str3 = Str::of('Laravel 8')->upper();
        echo $str3;
    }
}
