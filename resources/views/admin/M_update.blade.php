@extends("layouts.master")


@section("content")
<div class="container p-5">
    <h2 class="text-center">Update Item</h2>

    <form action="{{route('menus.update',$row->id)}}" action="POST">
        @csrf
        @method('PUT')

        Title 
        <input type="text" name="menu_title" class="form-control my-2" value="{{$row->title}}">

        image 
        <input type="text" name="menu_image" class="form-control my-2" value="{{$row->img}}">


        Price 
        <input type="text" name="menu_price" class="form-control my-2" value="{{$row->price}}">

        information
        <textarea name="menu_info" id="" class="form-control" cols="30" rows="10" >{{$row->info}}</textarea>

        status 
        <input type="text" name="menu_status" class="form-control my-2" value="{{$row->item_status}}">

        <input type="submit" name="submit" value="Update Item" class="btn btn-success w-100 btn-lg">
    </form>

</div>


@endsection
