@extends("layouts.master")


@section("content")

<div class="book-section mt-5" id="book-table">
    <div class="container">
        <div class="bg-overlay"></div>
        <div class="row align-items-center" style="min-height:240px">
            <div class="col-12">
                <h3 class="text-white">
                    logic test
                </h3>
                <p class="text-white-50">
                    task 1
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12  col-lg-10 text-center">
                <h3>
                    Count Number exclude 5
                </h3>
                <p class="text-black-50">
                    Make a GET api that have two parameters, start number and
                    the end number and should return the count of all numbers
                    except numbers with a 5 in it. The start and the end number are
                    both inclusive!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-5">
                            <label for="firstnum" class="form-label">please insert the start number</label>
                            <input type="number" id="firstnum" name="firstnum" class="form-control" required>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <label for="endnum" class="form-label">please insert the end number</label>
                            <input type="number" id="endnum" name="endnum" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-warning py-2 mb-5">count</button>

                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>




@endsection
