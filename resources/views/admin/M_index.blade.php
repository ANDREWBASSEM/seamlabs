<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset('css/bootstrap.css')">
</head>
<body>
    <h1>Menus Section</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{route("menus.create")}}" class="btn btn-success btn-lg">
            Add New itemid
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Menus Lists</h2>
            <ul>
                @foreach ($rows as $row )
                    <li>{{$row->title}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>