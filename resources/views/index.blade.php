@extends("layouts.master")


@section("content")

    <!-- 2. Slider Section  -->
    <div class="container-fluid px-0">
        <div class="carousel slide" data-bs-ride="carousel" id="mainSlider">
            <a href="#mainSlider" class="carousel-control-prev" data-bs-slide="prev">
                <i class="fas fa-arrow-circle-left text-black-50 display-4"></i>
            </a>
            <a href="#mainSlider" class="carousel-control-next" data-bs-slide="next">
                <i class="fas fa-arrow-circle-right text-black-50 display-4"></i>
            </a>

            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url('images/slide1.jpg')">
                    <div class="carousel-caption">
                        <h2 class="fw-bolder">Food For<br> Your Soul</h2>
                        <p class="text-black-50 h4 my-3">
                            It's about good food and fresh ingredients.
                        </p>
                        <a href="{{ route("menuPage") }}" type="button" class="btn btn-warning">
                            View Our Menu
                        </a>
                    </div>

                </div>
                <div class="carousel-item" style="background-image:url('images/slide2.jpg')">
                    <div class="carousel-caption">
                        <h2 class="fw-bold">Try Our New <br>Burger Menu</h2>
                        <p class="text-black-50 h4 my-3">
                            It's about good food and fresh ingredients.
                        </p>
                        <a href="{{ route("menuPage") }}" type="button" class="btn btn-warning">
                            View Our Menu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Slider Section  -->

    <!-- 3. Offer Section  -->
    <div class="offer-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-light">
                    <p class="text-white-50 h4 pt-5">Best Dish Of The Day</p>
                    <h3>Hamburger &<br>
                        Sweet Potato Fries</h3>
                    <p class="offer-price">49.99 <sup class="small">egp</sup></p>
                    <button type="button" class="btn btn-warning">
                        Add To Cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Offer Section  -->


    <!-- 4. Dish Section  -->
    <div class="dish-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Popular Dishes</h3>
                    <p class="text-black-50 mb-5"> Try the delicious new dishes from our chef. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card border-0 bg-light mt-3">
                        <div class="px-4">
                            <img class="card-img-top" src="images/dish01.jpg" class="img-fluid" alt="dish">
                        </div>
                        <div class="card-body mb-2">
                            <h4 class="card-title">Classic Havana Burger</h4>
                            <p class="card-text text-black-50">Grilled beef patty, Turkey rashes, and burger relish.</p>
                            <p class="price">69.00 <sup>egp</sup></p>
                            <button type="button" class="btn btn-outline-warning text-dark py-2 px-5">Add To
                                Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card border-0 bg-light mt-3">
                        <div class="px-4">
                            <img class="card-img-top" src="images/dish02.jpg" class="img-fluid" alt="dish">
                        </div>
                        <div class="card-body mb-2">
                            <h4 class="card-title">Bufalo Mozzarella</h4>
                            <p class="card-text text-black-50">Grilled beef patty, Turkey rashes, and burger relish.</p>
                            <p class="price">90.00 <sup>egp</sup></p>
                            <button type="button" class="btn btn-outline-warning text-dark py-2 px-5">Add To
                                Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card border-0 bg-light mt-3">
                        <div class="px-4">
                            <img class="card-img-top" src="images/dish03.jpg" class="img-fluid" alt="dish">
                        </div>
                        <div class="card-body  mb-2">
                            <h4 class="card-title">Cheese Royale Burger</h4>
                            <p class="card-text text-black-50">Grilled beef patty, Turkey rashes, and burger relish.</p>
                            <p class="price">80.00 <sup>egp</sup></p>
                            <button type="button" class="btn btn-outline-warning text-dark py-2 px-5">Add To
                                Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card border-0 bg-light mt-3">
                        <div class="px-4">
                            <img class="card-img-top" src="images/dish05.jpg" class="img-fluid" alt="dish">
                        </div>
                        <div class="card-body  mb-2">
                            <h4 class="card-title">White Rocotta Pizza</h4>
                            <p class="card-text text-black-50">Tomato sauce, mozzarella, anchovies, oregano, basil.</p>
                            <p class="price">150.00 <sup>egp</sup></p>
                            <button type="button" class="btn btn-outline-warning text-dark py-2 px-5">Add To
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Dish Section  -->


    <!-- 5. Features Section  -->
    <div class="features-section text-center">
        <div class="container">
            <div class="row border-top mt-5">
                <div class="col-md-6 col-lg-3">
                    <i class="fas fa-wheat-awn"></i>
                    <h4 class="py-1">Fresh Ingredients</h4>
                    <p class="text-black-50">
                        The best doughs, the most flavorful sauces, superior cheese!
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fas fa-pizza-slice"></i>
                    <h4 class="py-1">Best Recipe</h4>
                    <p class="text-black-50">
                        We offers you deliciously cheesy pizzas that will leave you totally satisfied.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fas fa-face-grin"></i>
                    <h4 class="py-1">Happy Clients</h4>
                    <p class="text-black-50">
                        Want to tell us about a delicious pizza you ate? We'd love to hear from you.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fas fa-apple-whole"></i>
                    <h4 class="py-1">Vegan Menu</h4>
                    <p class="text-black-50">
                        Whether you’re vegan, veggie, or flexi, we are making things a whole tastier.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Section  -->
    
@endsection