<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Event Fusion</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary fw-bold mb-0">Event<span class="text-dark">Fusion</span> </h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="organizer.html" class="nav-item nav-link active">Home</a>
                            <a href="participantslist.php" class="nav-item nav-link">Participants List</a>
                            <a href="oeventlist.php" class="nav-item nav-link">Events List</a>
                            <a href="oevent.php" class="nav-item nav-link">Add Event</a>
                            
                            <!--
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="book.html" class="dropdown-item">Booking</a>
                                    <a href="blog.html" class="dropdown-item">Our Blog</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            -->
                        </div>
                        <!--<button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="event.html" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>-->
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <!--
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <h1 class="display-1 mb-4 animated bounceInDown">Hello <span class="text-primary">organizer </span>....!</h1>
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to Event Fusion</small>
                        <h1 class="display-1 mb-4 animated bounceInDown">Unite, <span class="text-primary">Explore & </span>Connect.</h1>
                        <!--<a href="event.html" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book Now</a>
                        <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a>-->
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <img src="img/hero1.png" class="img-fluid rounded animated zoomIn" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Satrt -->
        <!--<div class="container-fluid py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136906/connect_moggwh.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                        <h1 class="display-5 mb-4">It’s time to Unite and Enjoy</h1>
                        <p class="mb-4">Let's Connect with each other and Explore the events all around Visakhapatnam.</p>
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Unite Together
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Explore the World
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Organize your Events
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Connect with People
                            </div>
                        </div>
                        <a href="https://mesh001.000webhostapp.com/EventFusion/about.html" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- About End -->
        


        <!-- Fact Start-->
        
        <div class="container-fluid faqt py-6">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                       <div class="row g-4">
                           <h1 class="display-5 mb-5" style="align-items-center">Event Fusion Count</h1>
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                                <div class="faqt-item bg-primary rounded p-4 text-center">
                                    <i class="fas fa-star fa-4x mb-4 text-white"></i>
                                    <h1 class="display-4 fw-bold" data-toggle="counter-up">365</h1>
                                    <p class="text-dark text-uppercase fw-bold mb-0">Days</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                                <div class="faqt-item bg-primary rounded p-4 text-center">
                                    <i class="fas fa-envelope fa-4x mb-4 text-white"></i>
                                    <h1 class="display-4 fw-bold" data-toggle="counter-up">24</h1>
                                    <p class="text-dark text-uppercase fw-bold mb-0">hours Service</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                                <div class="faqt-item bg-primary rounded p-4 text-center">
                                    <i class="fas fa-check fa-4x mb-4 text-white"></i>
                                    <h1 class="display-4 fw-bold" data-toggle="counter-up">7</h1>
                                    <p class="text-dark text-uppercase fw-bold mb-0">Events Complete</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695146124/pexels-sebastian-ervi-1763075_xfjlfc.jpg" class="img-fluid rounded animated zoomIn" alt="">
                                <span></span>
                        </img>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <!--
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    -->
                        <!-- 16:9 aspect ratio -->
                        <!--
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->
        <!-- Fact End -->


        <!-- Service Start -->
        <!--<div class="container-fluid service py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
                    <h1 class="display-5 mb-5">Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-search fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Explore</h4>
                                    <p class="mb-4">Unlock the World: Explore, Discover, Adventure!</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-bars fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Organize</h4>
                                    <p class="mb-4">Empower Your Vision: Organize your destinations!</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-phone-alt fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Connect</h4>
                                    <p class="mb-4">Connecting Hearts, One Event at a Time!</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-envelope fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Sponsor</h4>
                                    <p class="mb-4">Fueling Dreams: Your Event, Our Support!</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        -->


        <!-- Events Start -->
        <div class="container-fluid event py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
                    <h1 class="display-5 mb-5">Event Categories</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All Events</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Celebrations</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Concerts</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Fests</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">Campaigns</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                <span class="text-dark" style="width: 150px;">Workshops</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-7">
                                <span class="text-dark" style="width: 150px;">Special Offers</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937460/pexels-mikky-k-625644_ft788d.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Concert</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937460/pexels-mikky-k-625644_ft788d.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937647/pexels-rdne-stock-project-6646770_dnlj8w.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Campaigns</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937647/pexels-rdne-stock-project-6646770_dnlj8w.jpg" data-lightbox="event-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136655/fest_tehkjh.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Fest</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136655/fest_tehkjh.jpg" data-lightbox="event-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136653/workshop_jseltp.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Workshop</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136653/workshop_jseltp.jpg" data-lightbox="event-4" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694938043/pexels-leeloo-thefirst-5556303_lrceoh.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Special Offers</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694938043/pexels-leeloo-thefirst-5556303_lrceoh.jpg" data-lightbox="event-5" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136657/party_h6ddor.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Celebrations</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136657/party_h6ddor.jpg" data-lightbox="event-6" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1699074046/pexels-anna-shvets-3786157_ovf8g8.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Blood Donation Camp</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1699074046/pexels-anna-shvets-3786157_ovf8g8.jpg" data-lightbox="event-7" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694925604/cld-sample-4.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Food Fest</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694925604/cld-sample-4.jpg" data-lightbox="event-17" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136657/party_h6ddor.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Celebrations</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136657/party_h6ddor.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937460/pexels-mikky-k-625644_ft788d.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Concert</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937460/pexels-mikky-k-625644_ft788d.jpg" data-lightbox="event-10" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136655/fest_tehkjh.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Fest</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136655/fest_tehkjh.jpg" data-lightbox="event-12" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937647/pexels-rdne-stock-project-6646770_dnlj8w.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Campaign</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937647/pexels-rdne-stock-project-6646770_dnlj8w.jpg" data-lightbox="event-14" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1699074046/pexels-anna-shvets-3786157_ovf8g8.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Blood Donation</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1699074046/pexels-anna-shvets-3786157_ovf8g8.jpg" data-lightbox="event-15" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136653/workshop_jseltp.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Workshop</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136653/workshop_jseltp.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-7" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694938043/pexels-leeloo-thefirst-5556303_lrceoh.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Special Offers</h4>
                                                    <a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694938043/pexels-leeloo-thefirst-5556303_lrceoh.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Events End -->

        <!-- Book Us Start -->
        <!--
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-0">
                    <div class="col-1">
                        <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                    <div class="col-10">
                        <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                            <div class="text-center">
                                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Add Event</small>
                                <h1 class="display-5 mb-5">Event Details</h1>
                            </div>
                            <div class="row g-4 form">
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Location</option>
                                        <option value="1">Simhachalam</option>
                                        <option value="2">Gajuwaka</option>
                                        <option value="3">Daba Gardens</option>
                                        <option value="4">Beach Road</option>
                                        <option value="5">Anakapalle</option>
                                        <option value="6">MVP Colony</option>
                                        <option value="7">Dwaraka Nagar</option>
                                        <option value="8">Seethammadhara</option>
                                        <option value="9">Pendurthi</option>
                                        <option value="10">Jagadamba Junction</option>
                                        <option value="11">Railway New Colony</option>
                                        <option value="12">Madhurawada</option>
                                        <option value="13">Madhavadhara</option>
                                        <option value="14">Ram Nagar</option>
                                        <option value="15">NAD Junction</option>
                                        <option value="16">Marripalem</option>
                                        <option value="17">Asilmetta</option>
                                        <option value="18">Daspalla Hills</option>
                                        <option value="19">Kurmannapalem</option>
                                        <option value="20">Pedda Waltair</option>
                                        <option value="21">Rushikonda</option>
                                        <option value="22">Maddilapalem</option>
                                        <option value="23">Vepagunta</option>
                                        <option value="24">Kancheru Road</option>
                                        <option value="25">Adarsh Nagar</option>
                                        <option value="26">Muralinagar</option>
                                        <option value="27">Steel Plant Township</option>
                                        <option value="28">Auto Nagar</option>
                                        <option value="29">Jagadamba</option>
                                        <option value="30">Dondaparthy</option>
                                        <option value="31">Kancharapalem</option>
                                        <option value="32">Diamond Park Rd</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Select City</option>
                                        <option value="1">Visakhapatnam</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Select Palace</option>
                                        <option value="1">Depend On Country</option>
                                        <option value="2">UK</option>
                                        <option value="3">India</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Event Category</option>
                                        <option value="1">Celebrations</option>
                                        <option value="2">Concerts</option>
                                        <option value="3">Fests</option>
                                        <option value="4">Workshops</option>
                                        <option value="5">Campaigns</option>
                                        <option value="6">Special Offers</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="people" class="form-control border-primary p-2" placeholder="No. of Tickets">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="cost" class="form-control border-primary p-2" placeholder="Ticket Cost">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No.">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="date" class="form-control border-primary p-2" placeholder="Select Date">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Book Us End -->

        <!-- Team Start -->
        <!--
        <div class="container-fluid team py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Team</small>
                    <h1 class="display-5 mb-5">We have experienced chef Team</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="img/team-1.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Henry</h4>
                                <p class="text-white mb-0">Decoration Chef</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="img/team-2.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Jemes Born</h4>
                                <p class="text-white mb-0">Executive Chef</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="img/team-3.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Martin Hill</h4>
                                <p class="text-white mb-0">Kitchen Porter</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="img/team-4.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Adam Smith</h4>
                                <p class="text-white mb-0">Head Chef</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Team End -->


        <!-- Testimonial Start -->
        <!--
        <div class="container-fluid py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Testimonial</small>
                    <h1 class="display-5 mb-5">What Our Customers says!</h1>
                </div>
                <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel testimonial-carousel testimonial-carousel-2 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <!--
        <div class="container-fluid blog py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Blog</small>
                    <h1 class="display-5 mb-5">Be First Who Read News</h1>
                </div>
                <div class="row gx-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Blog End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h1 class="text-primary">Event<span class="text-dark">Fusion</span></h1>
                            <p class="lh-lg mb-4">The event regularly attracts a diverse range of attendees from around the world, across different professions, and with different.</p>
                            <!-- <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Special Facilities</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Unite</a>
                                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Explore</a>
                                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Connect</a>
                                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Organize</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Contact Us</h4>
                            <div class="d-flex flex-column align-items-start">
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i> Visakhapatnam, Andhra Pradesh
                                    India</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i> +91 9X7X5X2X3X1</p>
                                <p><i class="fas fa-envelope text-primary me-2"></i> support@eventfusion.com</p>
                                <p><i class="fa fa-clock text-primary me-2"></i> Mon to Fri 9am to 6pm</p>
                                <p><i class="fa fa-clock text-primary me-2"></i> Sat to Sun 9am to 10pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Social Gallery</h4>
                            <div class="row g-2">
                                <div class="col-4">
                                     <img src="https://res.cloudinary.com/dfnrww5gx/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1696412129/eventcreation_amzod5.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="https://res.cloudinary.com/dfnrww5gx/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1695136804/connect1_gxlm96.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="https://res.cloudinary.com/dfnrww5gx/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1695146124/pexels-sebastian-ervi-1763075_xfjlfc.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="https://res.cloudinary.com/dfnrww5gx/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1695136655/fest_tehkjh.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="https://res.cloudinary.com/dfnrww5gx/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1694937275/pexels-thibault-trillet-167636_ddfc6v.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="https://res.cloudinary.com/dfnrww5gx/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1694937460/pexels-mikky-k-625644_ft788d.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>