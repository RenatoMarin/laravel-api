<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>Hello there!!</h1>
    <h2>{{$name}}</h2>
    <p>{{$users['name']}}</p>
    <p>{{$users['email']}}</p>
    <p>{{$users['phone']}}</p>
    <img src="{{$users['gif']}}" alt="">
</body>
</html>