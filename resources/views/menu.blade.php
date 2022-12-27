@extends("layouts.master")


@section("content")

<!-- Start Contents  -->
<div class="header-section mt-5">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1 class="my-5 text-warning display-4">Coco Menu</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($rows as $row)
        <div class="col-md-3">
            <div class="card mb-5">
                <img class="card-img-top" src="{{ asset('images/menu/'.$row->img) }}" alt="pizza">
                <div class="card-body">
                    <h4 class="card-title">{{$row->title}}</h4>
                    <p class="card-text">
                        {{$row->info}}
                    </p>
                    <h5 class="badge bg-danger p-3">
                        {{$row->price}} EGP
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- End Contents  -->

@endsection
