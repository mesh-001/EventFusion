<?php
session_start();
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Event</title>
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
        <style>
            .popup{
                width:400px;
                background:#fff;
                border-radius:6px;
                position:absolute;
                top:0;
                left:50%;
                transform: translate(-50%,-50%) scale(0.1);
                text-align:center;
                padding:0px 30px 30px;
                color:#333;
                visibility:hidden;
                transition: transform 0.4s, top 0.4s;
            }
            .open-popup{
                visibility:visible;
                top:50%;
                transform: translate(-50%,-50%) scale(1);
            }
            .popup h1{
                font-size:38px;
                font-weight:500;
                margin:30px 0 10px;
                
            }
            .popup button{
                width:100%;
                margin-top:50px;
                padding:10px 0;
                background: #6fd649;
                color:#fff;
                border:0;
                outline:none;
                font-size:18px;
                border-radius:4px;
                cursor:pointer;
                 box-shadow: 0 5px 5px rgba(0,0,0,0.2);
            }
        </style>
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
                            <a href="organizer.php" class="nav-item nav-link active">Home</a>
                            <a href="participantslist.php" class="nav-item nav-link">Participants List</a>
                            <a href="oeventslist.php" class="nav-item nav-link">Events List</a>
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
                        <!--<button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>-->
                        
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
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Events</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="organizer.php">Home</a></li>
                    
                    <li class="breadcrumb-item text-dark" aria-current="page">Add Events</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


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
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937460/pexels-mikky-k-625644_ft788d.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Local Talent</h2>
                                                        <P>Come show your talent to all of Vizag!</P>
                                                        <p>Number of slots:100</p>
                                                        <p>Registration fee:50</p>
                                                        <p>Date:30 dec 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937647/pexels-rdne-stock-project-6646770_dnlj8w.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Campaigns</h4>
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937647/pexels-rdne-stock-project-6646770_dnlj8w.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Medical Camp</h2>
                                                        <P>3 Day Free Medical Campaign</P>
                                                        <p>Number of slots:300</p>
                                                        <p>No Registration fee</p>
                                                        <p>Start Date:25 dec 2023</p>
                                                        <p>End Date:30 dec 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
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
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136653/workshop_jseltp.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>AWS WORKSHOP</h2>
                                                        <P>This is a 4 days workshop and followed by 24 hours hackathon.</P>
                                                        <p>Number of slots:200</p>
                                                        <p>Registration fee:150</p>
                                                        <p>Start Date:21 aug 2023</p>
                                                        <p>End Date:26 aug 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694938043/pexels-leeloo-thefirst-5556303_lrceoh.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Special Offers</h4>
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694938043/pexels-leeloo-thefirst-5556303_lrceoh.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Black Friday</h2>
                                                        <P>For very popular items, McGrath says you can expect a more modest discount that\'s up to 20% off.</P>
                                                        <p>Number of slots:500</p>
                                                        <p>Registration fee:150</p>
                                                        <p>Start Date:23 nov 2023</p>
                                                        <p>End Date:24 nov 2023</p>
                                                        <a href="https://www.amazon.com/blackfriday"><button type="button">SHOP NOW!</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136657/party_h6ddor.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Celebrations</h4>
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694925604/cld-sample-4.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>New Year Event</h2>
                                                        <P>No end to Enjoyment! Have unlimited Food!</P>
                                                        <p>Number of slots:500</p>
                                                        <p>Registration fee:100</p>
                                                        <p>Date:31 dec 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1699074046/pexels-anna-shvets-3786157_ovf8g8.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Blood Donation Camp</h4>
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1699074046/pexels-anna-shvets-3786157_ovf8g8.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Blood Donation Camp</h2>
                                                        <P>Donate your blood & Save Lives</P>
                                                        <p>Number of slots:150</p>
                                                        <p>No Registration fee</p>
                                                        <p>Date:22 nov 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694925604/cld-sample-4.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Food Fest</h4>
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694925604/cld-sample-4.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Food Fest</h2>
                                                        <P>No end to Food & Eating! Have unlimited Food!</P>
                                                        <p>Number of slots:500</p>
                                                        <p>Registration fee:100</p>
                                                        <p>Date:28 nov 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
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
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694925604/cld-sample-4.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>New Year Event</h2>
                                                        <P>No end to Enjoyment! Have unlimited Food!</P>
                                                        <p>Number of slots:500</p>
                                                        <p>Registration fee:100</p>
                                                        <p>Date:31 dec 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
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
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937460/pexels-mikky-k-625644_ft788d.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Local Talent</h2>
                                                        <P>Come show your talent to all of Vizag!</P>
                                                        <p>Number of slots:100</p>
                                                        <p>Registration fee:50</p>
                                                        <p>Date:30 dec 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
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
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694937647/pexels-rdne-stock-project-6646770_dnlj8w.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Medical Camp</h2>
                                                        <P>5 Day Free Medical Campaign</P>
                                                        <p>Number of slots:300</p>
                                                        <p>No Registration fee</p>
                                                        <p>Start Date:25 dec 2023</p>
                                                        <p>End Date:30 dec 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1699074046/pexels-anna-shvets-3786157_ovf8g8.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Blood Donation</h4>
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="img-fluid rounded w-100" src="https://res.cloudinary.com/dfnrww5gx/image/upload/v1699074046/pexels-anna-shvets-3786157_ovf8g8.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Blood Donation Camp</h2>
                                                        <P>Donate your blood & Save Lives</P>
                                                        <p>Number of slots:150</p>
                                                        <p>No Registration fee</p>
                                                        <p>Date:22 nov 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
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
                                                    
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1695136653/workshop_jseltp.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>AWS WORKSHOP</h2>
                                                        <P>This is a 4 days workshop and followed by 24 hours hackathon.</P>
                                                        <p>Number of slots:200</p>
                                                        <p>Registration fee:150</p>
                                                        <p>Start Date:21 aug 2023</p>
                                                        <p>End Date:26 aug 2023</p>
                                                        <a href="https://www,facebook.com"><button type="button">REGISTER</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
                                                    
                                                    </div>
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
                                                    
                                                    <button type="submit" class="btn" onclick="openpopup()"><a href="https://res.cloudinary.com/dfnrww5gx/image/upload/v1694938043/pexels-leeloo-thefirst-5556303_lrceoh.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a></button>
                                                    <div class="popup" id="popup">
                                                        <h1>Black Friday</h2>
                                                        <P>For very popular items, McGrath says you can expect a more modest discount that\'s up to 20% off.</P>
                                                        <p>Number of slots:500</p>
                                                        <p>Registration fee:150</p>
                                                        <p>Start Date:23 nov 2023</p>
                                                        <p>End Date:24 nov 2023</p>
                                                        <a href="https://www.amazon.com/blackfriday"><button type="button">SHOP NOW!</button></a>
                                                        <button type="button" onclick="closepopup()">DONE</button>
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
        </div>
        <!-- Events End -->

        <!-- Book Us Start -->
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
                            <form class="form form-addevent" method="POST" action="" onclick="submit">
                            <div class="row g-4 form">
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Location</option>
                                        <option name="loc" value="Adarsh Nagar">Adarsh Nagar</option>
                                        <option name="loc" value="Anakapalle">Anakapalle</option>
                                        <option name="loc" value="Asilmetta">Asilmetta</option>
                                        <option name="loc" value="Auto Nagar">Auto Nagar</option>
                                        <option name="loc" value="Beach Road">Beach Road</option>
                                        <option name="loc" value="Daba Gardens">Daba Gardens</option>
                                        <option name="loc" value="Daspalla Hills">Daspalla Hills</option>
                                        <option name="loc" value="Diamond Park Rd">Diamond Park Rd</option>
                                        <option name="loc" value="Dondaparthy">Dondaparthy</option>
                                        <option name="loc" value="Dwaraka Nagar">Dwaraka Nagar</option>
                                        <option name="loc" value="Gajuwaka">Gajuwaka</option>
                                        <option name="loc" value="Jagadamba">Jagadamba</option>
                                        <option name="loc" value="Jagadamba Junction">Jagadamba Junction</option>
                                        <option name="loc" value="Kancharapalem">Kancharapalem</option>
                                        <option name="loc" value="Kancheru Road">Kancheru Road</option>
                                        <option name="loc" value="Kurmannapalem">Kurmannapalem</option>
                                        <option name="loc" value="Maddilapalem">Maddilapalem</option>
                                        <option name="loc" value="Madhavadhara">Madhavadhara</option>
                                        <option name="loc" value="Madhurawada">Madhurawada</option>
                                        <option name="loc" value="Marripalem">Marripalem</option>
                                        <option name="loc" value="Muralinagar">Muralinagar</option>
                                        <option name="loc" value="MVP Colony">MVP Colony</option>
                                        <option name="loc" value="NAD Junction">NAD Junction</option>
                                        <option name="loc" value="Pedda Waltair">Pedda Waltair</option>
                                        <option name="loc" value="Pendurthi">Pendurthi</option>
                                        <option name="loc" value="Railway New Colony">Railway New Colony</option>
                                        <option name="loc" value="Ram Nagar">Ram Nagar</option>
                                        <option name="loc" value="Rushikonda">Rushikonda</option>
                                        <option name="loc" value="Seethammadhara">Seethammadhara</option>
                                        <option name="loc" value="Simhachalam">Simhachalam</option>
                                        <option name="loc" value="Steel Plant Township">Steel Plant Township</option>
                                        <option name="loc" value="Vepagunta">Vepagunta</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Select City</option>
                                        <option name="city" value="Visakhapatnam">Visakhapatnam</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Select Place</option>
                                        <option name="place" value="India">India</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Event Category</option>
                                        <option name="cat" value="Celebrations">Celebrations</option>
                                        <option name="cat" value="Concerts">Concerts</option>
                                        <option name="cat" value="Fests">Fests</option>
                                        <option name="cat" value="Workshops">Workshops</option>
                                        <option name="cat" value="Campaigns">Campaigns</option>
                                        <option name="cat" value="Special Offers">Special Offers</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="people" class="form-control border-primary p-2" name="people" id="people" placeholder="No. of Tickets">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="cost" class="form-control border-primary p-2" name="cost" id="cost" placeholder="Ticket Cost">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="mobile" class="form-control border-primary p-2" name="phno" id="phno" placeholder="Your Contact No.">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="date" class="form-control border-primary p-2" name="date" id="date" placeholder="Select Date">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="email" class="form-control border-primary p-2" name="email" id="email" placeholder="Enter Your Email">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="textarea" class="form-control border-primary p-2" name="desc" id="desc" placeholder="Enter Description">
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill" value="Add Event" name="submit" onclick="submit">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-1">
                        <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Us End -->
<?php
if(isset($_POST['submit'])) {
    // Database connection
    $mysqli = new mysqli('localhost', 'id21269171_mesh001', 'Event*Fusion001', 'id21269171_eventfusion');
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    // Prepare the SQL statement
    $sql = "INSERT INTO eventlist (Location, City, Place, Category, People, Cost, Contact, Date, Email, Description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    
    // Check for SQL query preparation error
    if (!$stmt) {
        die("Prepare failed: " . $mysqli->error);
    }
    
    // Bind parameters
    $stmt->bind_param("ssssssssss", $loc, $city, $place, $cat, $people, $cost, $phno, $date, $email, $desc);
    $loc = $_POST['loc'];
    $city = $_POST['city'];
    $place = $_POST['place'];
    $cat = $_POST['cat'];
    $people = $_POST['people'];
    $cost = $_POST['cost'];
    $phno = $_POST['phno'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record inserted successfully.";
        $URL = "https://mesh001.000webhostapp.com/events.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $mysqli->close();
}
?>

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
    <script src="js/main.js">
    </script>
    <script>
        let popup=document.getElementById("popup");
        function openpopup(){
            popup.classList.add("open-popup");
        }
        function closepopup(){
            popup.classList.remove("open-popup");
        }
    </script>
    </body>

</html>