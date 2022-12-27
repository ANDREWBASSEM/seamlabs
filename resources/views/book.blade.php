@extends("layouts.master")


@section("content")


    <!-- Book Section  -->
    <div class="book-section mt-5" id="book-table">
        <div class="container">
            <div class="bg-overlay"></div>
            <div class="row align-items-center" style="min-height:240px">
                <div class="col-12">
                    <h3 class="text-white">
                        Book A Table
                    </h3>
                    <p class="text-white-50">
                        reservation
                    </p>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12  col-lg-10 text-center">
                    <h3>
                        Book a Table
                    </h3>
                    <p class="text-black-50">
                        We will do our best to give you your preferred table, but please note that window tables cannot
                        be guaranteed. If your ideal time or date is not available, please get in touch with us via
                        email or phone.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="" method="POST">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-5">
                                <label for="name" class="form-label">Your Name:</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <label for="time" class="form-label">Time:</label>
                                <input type="time" id="time" name="time" class="form-control" required>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-5">
                                <label for="date" class="form-label">Date:</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <label for="guest" class="form-label">Guests:</label>
                                <input type="text" id="guest" name="guest" class="form-control" placeholder="2"
                                    required>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <label for="message" class="form-label">Message:</label>
                                <textarea type="text" id="message" name="message" class="form-control"
                                    placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-warning py-2 mb-5">Reservation</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Book  Section  -->

@endsection