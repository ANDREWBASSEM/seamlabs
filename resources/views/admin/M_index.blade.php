<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}} ">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
</head>

<body>
    <h1 class="text-md-center">Menus Section</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{route("menus.create")}}" class="btn btn-success btn-lg">
                    Add New item </a>
            </div>
        </div>
@if (session('msg'))
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <h3>{{session('msg')}}</h3>
            </div>
        </div>
    </div>
@endif
        <div class="row">
            <div class="col">

                <h2>Menus Lists</h2>

                <table class="table table-bordered table-striped table-primary">
                @php
                $counter = 0;
                @endphp
                @foreach ($rows as $row )
                <tr>
                    <td>{{++$counter}}</td>
                    <td>
                        <div class="d-flex p-3">
                            <img src="{{asset('images/menu/'.$row->img)}}" width="150" class="p-1" alt="">
                            <div class="P-3">
                                <h4> {{$row->title}}</h4>
                                <p>{{$row->info}}</p>
                                <h4>{{$row->price}} EGP</h4>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{route('menus.edit',$row->id)}}" class="btn btn-info w-100 btn-block">Edit</a>

                        <form action="{{route('menus.destroy',$row->id)}}" method="POST"> 
                        @csrf
                        @method("DELETE")

                        <input type="submit" name='submit' value="delete" class="btn btn-danger w-100 btn-block">
                        </form>
                    </td>
                </tr>
                @endforeach
                </table>

            </div>
        </div>
    </div>




    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>

</html>
