<div style="background-color: gray;">
    <h1> Here is the Header component </h1>
    <h3>{{$name}}</h3>
    <h3>Games are:</h3>
    <ul>
        @foreach ($games as $game)
            <li>{{$game}}</li>
        @endforeach
    </ul>
</div>