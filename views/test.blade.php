@include('headers')

<h1>Test Blade</h1>

@php
    $name = 'General Kenobi';

    $games = array('Demon souls', 'Dark Souls', 'Dragon Age', 'Mass Effect');

    $age = 11;
@endphp

<h2>{{$name}}</h2>

<h2>Games:</h2>

<ul>
@foreach($games as $game)
    <li>
        {{$game}}
    </li>
@endforeach
</ul>

<br>

@for($i=1; $i<=10; $i++)
    {{$i}}<br>
@endfor

<br>

@if(count($games)==1)
    Single Game
@elseif(count($games)>1)
    More than one
@else
    No game
@endif

<br>

{{$age >= 18 ? 'Whatever' : 'WhatFucking ever'}}