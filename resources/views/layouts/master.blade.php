<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Coco Pizza, Pizza">
    <meta name="description" content="Coco Pizza">

    <title>Coco Pizza</title>


    <!-- Fonts & CSS assets files  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">    
    <link rel="stylesheet" href="{{ asset("css/all.min.css") }}">    
    <link rel="stylesheet" href="{{ asset("css/aos.css") }}">    
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">    

</head>

<body id="top">
    <!-- 1. Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom">
        <div class="container">
            <a href="{{ route("homePage") }}" class="navbar-brand">
                <img src="{{ asset("images/logo.png") }}" height="51" alt="coco pizza logo">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav nav mx-auto">
                    <li class="nav-item active">
                        <a href="{{ route("homePage") }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("menuPage") }}" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("contactPage") }}" class="nav-link">Contacts</a>
                    </li>
                </ul>

                <a href="{{ route("bookPage") }}" class="btn btn-outline-warning px-4 py-2 text-dark d-none d-lg-block">
                    Book a Table
                </a>
            </div>
        </div>
    </nav>
    <!-- End Navbar Section -->


    @yield("content")


    <!--  Footer Section  -->
    <div class="footer-section bg-black">
        <div class="container">
            <div class="row justify-content-between g-lg-5">
                <div class="col-md-12 col-lg-4">
                    <img src="{{ asset("images/logo2.png") }}" height="51" alt="">
                    <p class="text-white-50 my-3">
                        Coco pizza is a world-famous fast food offering a variety of Pizza, fire-grilled hamburgers and chicken sandwiches, as well as salads and sides.
                    </p>
                    <ul class="list-unstyled  list-inline text-light my-4">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/cocopizza.eg" class="text-white social"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.twitter.com/cocopizza.eg" class="text-white social"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/cocopizza.eg" class="text-white social"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white pt-4">e-Newsletter</h5>
                    <p class="text-white-50 my-3">                                                
                        Keep updated on all our latest news, new pizzerias, and so much more.</p>
                    <form action="" method="post" class="form-inline">
                        <div class="input-group pb-3">
                            <input type="email" name="email" id="email" class="form-control rounded-0 w-50"
                                placeholder="enter your email" required>
                            <div class="input-group-append">
                                <button class="btn btn-success rounded-0">Subscribe</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-md-5 col-lg-4">
                    <h5 class="text-white pt-4">How To Find Us</h5>
                    <ul class="list-unstyled text-white-50 my-3 address">
                        <li>
                            <i class="fas fa-map-marker-alt px-3"></i>
                            Dokki Square, Giza, Egypt
                        </li>
                        <li class="pt-2">
                            <i class="fas fa-phone-alt px-3"></i>
                            +02010 000-19-99
                        </li>
                        <li class="pt-2">
                            <i class="fas fa-envelope px-3"></i>
                            support@coco.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row py-3 border-gray">
                <div class="col-8">
                    <h6 class="text-white-50 small">
                        Copyright © 2022 Coco Pizza. All rights reserved.
                    </h6>
                </div>
                <div class="col-4 text-end">
                    <a href="#top" class="text-white-50 small social">BACK TO TOP</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer  Section  -->




    <!-- JavaScript assets files -->
    <script src="{{ asset("js/bootstrap.bundle.js") }}"></script>
    <script src="{{ asset("js/aos.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>

</body>

</html>