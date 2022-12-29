@extends("layouts.master")


@section("content")
<div class="container p-5">
    <h2 class="text-center">login</h2>

    <form action={{route('login')}} method="POST">
        @csrf

        username 
        <input type="text" name="username" class="form-control my-2" value="username">

        password 
        <input type="text" name="password" class="form-control my-2" value="password">


        {{-- <!--Price 
        <input type="text" name="menu_price" class="form-control my-2" value="{{$row->price}}">

        information
        <textarea name="menu_info" id="" class="form-control" cols="30" rows="10" >{{$row->info}}</textarea>

        status 
        <input type="text" name="menu_status" class="form-control my-2" value="{{$row->item_status}}">--> --}}

        <input type="submit" name="login" value="login" class="btn btn-success w-100 btn-lg">
    </form>

</div>


@endsection
