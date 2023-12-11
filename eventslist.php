<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <title>Event Data</title>
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

</style>
</head>
<body><!-- Spinner Start -->
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
                            <a href="admin.html" class="nav-item nav-link">Home</a>
                            <a href="userslist.php" class="nav-item nav-link ">Users List</a>
                            <a href="eventslist.php" class="nav-item nav-link active">Events List</a>
                          
                            
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
         <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Events List</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="eventslist.php">Events List</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


                 

        <!-- Book Us Start -->
        <div style="align-content: center; justify-content: center;">
    <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container" style="justify-content: center;">
            <div class="row g-0" style="justify-content: center; padding-left: 100px;">
                <div class="col-20" style="justify-content: center; padding-left: 100px;">
                    <div class="border-bottom border-top border-primary bg-light py-5 px-10">
                        <div class="text-center">
                            <h1>Event Details</h1>
                        </div>
                        
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Location</th>
                                        <th>City</th>
                                        <th>Place</th>
                                        <th>Category</th>
                                        <th>People</th>
                                        <th>Cost</th>
                                        <th>Contact</th>
                                        <th>Date</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Database Connection
                                    $conn = new mysqli('localhost', 'id21269171_mesh001', 'Event*Fusion001', 'id21269171_eventfusion');

                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $i = 1;
                                    $rows = mysqli_query($conn, "SELECT * FROM eventlist");

                                    if ($rows) {
                                        // Loop through the results
                                        foreach ($rows as $row) :
                                    ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row['Location']; ?></td>
                                                <td><?php echo $row['City']; ?></td>
                                                <td><?php echo $row['Place']; ?></td>
                                                <td><?php echo $row['Category']; ?></td>
                                                <td><?php echo $row['People']; ?></td>
                                                <td><?php echo $row['Cost']; ?></td>
                                                <td><?php echo $row['Contact']; ?></td>
                                                <td><?php echo $row['Date']; ?></td>
                                                <td><?php echo $row['Email']; ?></td>
                                                <td><?php echo $row['Description']; ?></td>
                                            </tr>
                                    <?php endforeach;
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Book Us End -->


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
-->                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Event Fusion </a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                       <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>-->
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