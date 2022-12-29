<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>

<body class="p-3 bg-info">
    <h2 class="text-center">Add New Item</h2>
<div class="container">
    <form action="{{route('menus.store')}}" action="POST">
        @csrf
        

        Title 
        <input type="text" name="menu_title" class="form-control my-2">

        image 
        <input type="text" name="menu_image" class="form-control my-2">


        Price 
        <input type="text" name="menu_price" class="form-control my-2">

        information
        <textarea name="menu_info" id="" class="form-control" cols="30" rows="10"></textarea>

        status 
        <input type="text" name="menu_status" class="form-control my-2">

        <input type="submit" name="submit" value="Add New Item" class="btn btn-success w-100 btn-lg">
    </form>

</div>
</body>

</html>
