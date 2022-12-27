@extends("layouts.master")


@section("content")


    <!-- Start Contents  -->
    <div class="header-section mt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1 class="my-5 text-warning display-4">Contact us</h1>
                </div>
            </div>
        </div>
        </div>    
        <div class="container">
            <div class="row">
                <p>We are happy to answer your questions and we are glad to take your feedback into consideration.</p>
                <div class="col-lg-4">
                    <div class="card my-3">
                        <img class="card-img-top" src="{{ asset("images/store01.jpg") }}" alt="pizza">
                        <div class="card-body">
                            <h4 class="card-title">Coco Pizza EL TAHRIR </h4>
                            <p class="card-text">
                                Cairo - El Tahrir - 9 Tahrir Square in front of the American University
                                <br>Open 11:00 AM - 03:00 AM
                                <br>02425110111
                            </p>
                            <a href="tel:02425110111" class="btn btn-danger btn-lg w-100"> Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card  my-3">
                        <img class="card-img-top" src="{{ asset("images/store02.jpg") }}" alt="pizza">
                        <div class="card-body">
                            <h4 class="card-title">Coco Pizza Madinity</h4>
                            <p class="card-text">
                                Cairo - Madinity - El Nasr Buildings, El Nabawy El Mohandes St.
                                <br>Open 11:00 AM - 03:00 AM
                                <br>02425110111
                            </p>
                            <a href="tel:02425110111" class="btn btn-danger btn-lg w-100"> Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card  my-3">
                        <img class="card-img-top" src="{{ asset("images/store03.jpg") }}" alt="pizza">
                        <div class="card-body">
                            <h4 class="card-title">Coco Pizza CORNISH ALX. </h4>
                            <p class="card-text"> Alexandria No. 92 St. July 26 next to the theater Abdulwahab
                                <br>Open 11:00 AM - 03:00 AM
                                <br>02425110111 </p>
                                <a href="tel:02425110111" class="btn btn-danger btn-lg w-100"> Call Now</a>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- End Contents  -->

@endsection