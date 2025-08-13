<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preetheme.com/html/codeit/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2023 15:55:19 GMT -->
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CODEIT - Technology & IT Solutions HTML5 Template</title>
        <link rel="icon" href="assets/img/icon.png" type="image/gif" sizes="16x16" />
        <link rel="icon" href="assets/img/icon.png" type="image/gif" sizes="18x18" />
        <link rel="icon" href="assets/img/icon.png" type="image/gif" sizes="20x20" />

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" />
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css" />
        <link rel="stylesheet" href="assets/css/normalize.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="assets/css/responsive.css" />
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Start HEader Area -->
        <header class="header">
            <!-- Header Top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Top Left -->
                        <div class="col-lg-6 align-self-center">
                            <div class="top-info-left">
                                <span><i class="fas fa-map-marker-alt"></i> 24 Tech Roqad st Ny 10023</span>
                                <span><i class="far fa-envelope"></i> info123@example.com</span>
                            </div>
                        </div>
                        <!-- Top Right -->
                        <div class="col-lg-6 align-self-center text-right">
                            <div class="top-info-right">
                                <div class="office-time">
                                    <span><i class="far fa-clock"></i> Office Hour : 08:00am - 6:00pm</span>
                                </div>
                                <div class="top-social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-xl-2 col-4">
                            <div class="logo">
                                <a href="index-2.html">
                                    <img src="assets/img/logo.png" alt="logo" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-xl-10 col-8">
                            <!-- Header Search -->
                            <div class="header-search">
                                <div class="header-search-icon">
                                    <i class="fas fa-search active"></i>
                                    <i class="fas fa-times"></i>
                                </div>
                                <div class="header-top-search-form">
                                    <div class="header-top-search-form-full">
                                        <form action="#">
                                            <input type="search" name="search" placeholder="Search Here.." />
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="canvas_open">
                                <a href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                            <!-- Menu -->
                            <div class="menu">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.html">Home</a>
                                            
                                        </li>
                                        
                                            
                                                
                                                <li><a href="team.html">Team Members</a></li>
                                                
                                            
                                        
                                        <li>
                                            <a href="services.html">Services</a>
                                        </li>
                                        <li>
                                            <a href="project.html">Project</a>
                                            
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="login.php"><li>
                                        <?php if (isset($_SESSION['username'])): ?>
                                            <a href="#"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
                                        <?php else: ?>
                                            <a href="#">Guest</a>
                                        <?php endif; ?>
                                    </li>
                                    </a></li>
                                        <li><a href="about.html">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End HEader Area -->
        <!-- Start Mobile Menu Area -->
        <div class="mobile-menu-area">
            <!--offcanvas menu area start-->
            <div class="off_canvars_overlay"></div>
            <div class="offcanvas_menu">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="mobile-logo">
                        <a href="index-2.html">
                            <img src="assets/img/logo.png" alt="logo" />
                        </a>
                    </div>
                    <div id="menu" class="text-left">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index-2.html">Home v1</a></li>
                                    <li><a href="index2.html">Home v2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Page</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Team Members</a></li>
                                    <li><a href="pricing.html">Pricing Plane</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="services-details.html">Services Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="project.html">Project</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-grid.html">Blog Grid View</a></li>
                                    <li><a href="single.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html"> Contact Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="login.html">Register/Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--offcanvas menu area end-->
        <!-- Start Hero Area -->
        <section class="hero-area">
            <div class="hero-slider-full owl-carousel">
                <!-- single -->
                <div class="hero-slider-item" style="background-image: url('assets/img/slider2.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hero-lsider-caption">
                                    <h4>Empower your business</h4>
                                    <h2>Excellent IT services for your success</h2>
                                    <a class="button-1" href="contact.html">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="hero-slider-item" style="background-image: url('assets/img/slider3.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hero-lsider-caption">
                                    <h4>Empower your business</h4>
                                    <h2>Excellent IT services for your success</h2>
                                    <a class="button-1" href="contact.html">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="hero-slider-item" style="background-image: url('assets/img/slider1.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hero-lsider-caption">
                                    <h4>Empower your business</h4>
                                    <h2>Excellent IT services for your success</h2>
                                    <a class="button-1" href="contact.html">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Area -->
        <!-- Start Features Area -->
        <section class="feature-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 align-self-center">
                        <div class="feature-area-content">
                            <h5>FEATURES</h5>
                            <h2>Some Web App Features We Have</h2>
                            <a class="button-1" href="about.html">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="features-area-left-content">
                            <img class="shap-features" src="assets/img/dots-features-left.png" alt="shap" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="features-item active">
                                        <img src="assets/img/home-visit.png" alt="features" />
                                        <h2>Home Visit</h2>
                                        <p>Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget libero lorem ipsum.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="features-item">
                                        <img src="assets/img/free-consult.png" alt="features" />
                                        <h2>Free Consultation</h2>
                                        <p>Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget libero lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->
        <!-- Start About Area -->
        <section class="about-area section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-thumbnail">
                            <img src="assets/img/about.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-content">
                            <h5>About Our Company</h5>
                            <h2>Logik Award Winning Digital Solutions</h2>
                            <div class="about-content-navs-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="aboutus-tab" data-bs-toggle="tab" data-bs-target="#aboutus" type="button" role="tab" aria-controls="aboutus" aria-selected="true">About Us</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="mission" aria-selected="false">Our Mission</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false">Our Vision</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="aboutus" role="tabpanel" aria-labelledby="aboutus-tab">
                                        <div class="about-content-navs-tab-content-full">
                                            <div class="title">
                                                <h2>25</h2>
                                                <span>Years of Experience</span>
                                            </div>
                                            <p>We develop innovative and contemporary web and mobile apps which makes the world a smaller place through faster services.</p>
                                            <ul>
                                                <li><i class="far fa-check-square"></i> UI/UX Design Journey</li>
                                                <li><i class="far fa-check-square"></i> Software Consulting</li>
                                            </ul>
                                            <a class="button-1" href="about.html">View Details</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                                        <div class="about-content-navs-tab-content-full">
                                            <div class="title">
                                                <h2>20</h2>
                                                <span>More Than UI/UX </span>
                                            </div>
                                            <p>We develop innovative and contemporary web and mobile apps which makes the world a smaller place through faster services.</p>
                                            <ul>
                                                <li><i class="far fa-check-square"></i> Holistic Web Solutions</li>
                                                <li><i class="far fa-check-square"></i> Software Consulting</li>
                                            </ul>
                                            <a class="button-1" href="about.html">View Details</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                                        <div class="about-content-navs-tab-content-full">
                                            <div class="title">
                                                <h2>16</h2>
                                                <span>Delivering Consistent Promises </span>
                                            </div>
                                            <p>We develop innovative and contemporary web and mobile apps which makes the world a smaller place through faster services.</p>
                                            <ul>
                                                <li><i class="far fa-check-square"></i> Holistic Web Solutions</li>
                                                <li><i class="far fa-check-square"></i> Software Consulting</li>
                                            </ul>
                                            <a class="button-1" href="about.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->
        <!-- Start Services Area Area -->
        <section class="services-area section-padding-2">
            <div class="container">
                <!-- Section Headding -->
                <div class="row">
                    <div class="col-lg-12 mb-50 text-center">
                        <div class="section-headding">
                            <h5>Our Services</h5>
                            <h2>
                                Our IT Solutions & Services for <br />
                                Your Business
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box-1">
                            <div class="info-box-1-inner">
                                <div class="number-c">01</div>
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="services-details.html">Mobile Devlopment</a></h3>
                                    <p>Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking for better.</p>
                                    <a href="services-details.html" class="link">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box-1">
                            <div class="info-box-1-inner">
                                <div class="number-c">02</div>
                                <div class="icon">
                                    <i class="fas fa-pencil-ruler"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="services-details.html">UI UX Design</a></h3>
                                    <p>Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking for better.</p>
                                    <a href="services-details.html" class="link">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box-1">
                            <div class="info-box-1-inner">
                                <div class="number-c">03</div>
                                <div class="icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="services-details.html">Digital Marketing</a></h3>
                                    <p>Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking for better.</p>
                                    <a href="services-details.html" class="link">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box-1">
                            <div class="info-box-1-inner">
                                <div class="number-c">04</div>
                                <div class="icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="services-details.html">Web Devlopment</a></h3>
                                    <p>Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking for better.</p>
                                    <a href="services-details.html" class="link">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box-1">
                            <div class="info-box-1-inner">
                                <div class="number-c">05</div>
                                <div class="icon">
                                    <i class="far fa-thumbs-up"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="services-details.html">IT Management</a></h3>
                                    <p>Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking for better.</p>
                                    <a href="services-details.html" class="link">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box-1">
                            <div class="info-box-1-inner">
                                <div class="number-c">06</div>
                                <div class="icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="services-details.html">Business Security</a></h3>
                                    <p>Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking for better.</p>
                                    <a href="services-details.html" class="link">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area Area -->
        <!-- Start Works About Area -->
        <section class="works-about-area section-padding">
            <div class="container">
                <div class="row">
                    <!-- Content -->
                    <div class="col-lg-6 align-self-center">
                        <div class="works-about-content">
                            <h5>Works About</h5>
                            <h2>Trusted by 5,000+ Happy Customers</h2>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                letters.
                            </p>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> 100% Client Satisfaction</li>
                                <li><i class="fas fa-check-circle"></i> World Class Worker</li>
                            </ul>
                            <div class="btn-aa">
                                <a class="button-2" href="project.html">Completed Projects</a>
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail -->
                    <div class="col-lg-6 align-self-center">
                        <div class="works-about-thumbanil">
                            <div class="thumbnail">
                                <img src="assets/img/works-about.jpg" alt="img" />
                            </div>
                            <div class="works-about-vedio">
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=sY2bdbsy3rg"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Works About Area -->
        <!-- Start Latest Project Area -->
        <section class="latest-project-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-50 text-center">
                        <div class="section-headding">
                            <h5>Latest Projects</h5>
                            <h2>Some Of Our Work</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-item">
                        <div class="thumbnail">
                            <img src="assets/img/project/1.jpg" alt="project" />
                        </div>
                        <div class="info">
                            <div class="info-item">
                                <div class="left-info">
                                    <h4><a href="project-details.html">IT Counsultancy</a></h4>
                                    <a class="cat" href="#">Technology</a>
                                </div>
                                <div class="right-info">
                                    <div class="img-gallery-popup">
                                        <a href="assets/img/project/1.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-item">
                        <div class="thumbnail">
                            <img src="assets/img/project/2.jpg" alt="project" />
                        </div>
                        <div class="info">
                            <div class="info-item">
                                <div class="left-info">
                                    <h4><a href="project-details.html">IT Counsultancy</a></h4>
                                    <a class="cat" href="#">Technology</a>
                                </div>
                                <div class="right-info">
                                    <div class="img-gallery-popup">
                                        <a href="assets/img/project/2.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-item">
                        <div class="thumbnail">
                            <img src="assets/img/project/3.jpg" alt="project" />
                        </div>
                        <div class="info">
                            <div class="info-item">
                                <div class="left-info">
                                    <h4><a href="project-details.html">IT Counsultancy</a></h4>
                                    <a class="cat" href="#">Technology</a>
                                </div>
                                <div class="right-info">
                                    <div class="img-gallery-popup">
                                        <a href="assets/img/project/3.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-item">
                        <div class="thumbnail">
                            <img src="assets/img/project/4.jpg" alt="project" />
                        </div>
                        <div class="info">
                            <div class="info-item">
                                <div class="left-info">
                                    <h4><a href="project-details.html">IT Counsultancy</a></h4>
                                    <a class="cat" href="#">Technology</a>
                                </div>
                                <div class="right-info">
                                    <div class="img-gallery-popup">
                                        <a href="assets/img/project/4.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-item">
                        <div class="thumbnail">
                            <img src="assets/img/project/5.jpg" alt="project" />
                        </div>
                        <div class="info">
                            <div class="info-item">
                                <div class="left-info">
                                    <h4><a href="project-details.html">IT Counsultancy</a></h4>
                                    <a class="cat" href="#">Technology</a>
                                </div>
                                <div class="right-info">
                                    <div class="img-gallery-popup">
                                        <a href="assets/img/project/5.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-item">
                        <div class="thumbnail">
                            <img src="assets/img/project/6.jpg" alt="project" />
                        </div>
                        <div class="info">
                            <div class="info-item">
                                <div class="left-info">
                                    <h4><a href="project-details.html">IT Counsultancy</a></h4>
                                    <a class="cat" href="#">Technology</a>
                                </div>
                                <div class="right-info">
                                    <div class="img-gallery-popup">
                                        <a href="assets/img/project/6.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest Project Area -->
        <!-- Start Counter Area -->
        <div class="counter-area pt-50 pb-20" style="background-image: url('assets/img/counterbg.jpg');">
            <div class="container">
                <div class="row">
                    <!-- Single -->
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <h2 class="counter">201</h2>
                                    <h3>+</h3>
                                </div>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <h2 class="counter">255</h2>
                                    <h3>+</h3>
                                </div>
                                <p>Remaining Project</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="far fa-gem"></i>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <h2 class="counter">100</h2>
                                    <h3>+</h3>
                                </div>
                                <p>Business Start-up</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <h2 class="counter">25</h2>
                                    <h3>+</h3>
                                </div>
                                <p>Former Employer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter Area -->
        <!-- Start We Provide Area -->
        <section class="web-prodive" style="background-image: url('assets/img/provide.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="we-provide-content">
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=sY2bdbsy3rg"><i class="fas fa-play"></i></a>
                            </div>
                            <h2>We Provide Outsourced IT Services For Small & Mid-Sized Business</h2>
                            <p>Appropriate for your specific business, making it easy for you to have quality IT services. What We Do</p>
                            <a class="button-2" href="services.html">More Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End We Provide Area -->
        <!-- Start Testimonial Area -->
        <section class="testimonial-area">
            <div class="container">
                <div class="testimonial-area-full">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="what-we-do-c">
                                <h5>What We do</h5>
                                <h2>We Help You to Grow Your Business Exponentially</h2>
                                <div class="ww-do">
                                    <div class="progress-bars wow fadeInUp" data-wow-delay=".1s">
                                        <div class="single-progress">
                                            <h3>UI/UX Design</h3>
                                            <div class="progress">
                                                <div class="progress-bar wow" style="width: 90%;">
                                                    <span class="percent">90%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-bars wow fadeInUp" data-wow-delay=".1s">
                                        <div class="single-progress">
                                            <h3>App Development</h3>
                                            <div class="progress">
                                                <div class="progress-bar wow" style="width: 98%;">
                                                    <span class="percent">98%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial-item-full owl-carousel" style="background-image: url('assets/img/provide.jpg');">
                                <!-- Single -->
                                <div class="testimonial-item">
                                    <div class="thumbnail">
                                        <img src="assets/img/testimonial.png" alt="img" />
                                    </div>
                                    <div class="content">
                                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without</p>
                                        <div class="ratting">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <h4>John Amanda</h4>
                                        <h5>App Developer</h5>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="testimonial-item">
                                    <div class="thumbnail">
                                        <img src="assets/img/testimonial.png" alt="img" />
                                    </div>
                                    <div class="content">
                                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without</p>
                                        <div class="ratting">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <h4>John Amanda</h4>
                                        <h5>App Developer</h5>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="testimonial-item">
                                    <div class="thumbnail">
                                        <img src="assets/img/testimonial.png" alt="img" />
                                    </div>
                                    <div class="content">
                                        <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without</p>
                                        <div class="ratting">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <h4>John Amanda</h4>
                                        <h5>App Developer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->
        <!-- Start Latest News Area -->
        <section class="latest-news section-padding-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-50 text-center">
                        <div class="section-headding">
                            <h5>Recent Articles</h5>
                            <h2>Latest News from Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="thumbnail">
                                <a href="single.html">
                                    <img src="assets/img/blog/1.jpg" alt="blog" />
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span><i class="far fa-calendar-alt"></i> 12 September 2021</span>
                                    <span><i class="fas fa-tags"></i> <a href="#">Technology</a></span>
                                </div>
                                <h2 class="title"><a href="single.html">What’s the Holding Back the It Solution Industry?</a></h2>
                                <p>In a lobortis lorem. Duis ultrices, lorem id tristique tempus, massa ligula ornare erat, id mattis sem diam ac ante</p>
                                <div class="author">
                                    <a href="#">
                                        <img src="assets/img/auth.jpg" alt="auth" />
                                        <span>by <b>Sagor Biswas</b></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="thumbnail">
                                <a href="single.html">
                                    <img src="assets/img/blog/2.jpg" alt="blog" />
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span><i class="far fa-calendar-alt"></i> 12 September 2021</span>
                                    <span><i class="fas fa-tags"></i> <a href="#">Technology</a></span>
                                </div>
                                <h2 class="title"><a href="single.html">What’s the Holding Back the It Solution Industry?</a></h2>
                                <p>In a lobortis lorem. Duis ultrices, lorem id tristique tempus, massa ligula ornare erat, id mattis sem diam ac ante</p>
                                <div class="author">
                                    <a href="#">
                                        <img src="assets/img/auth.jpg" alt="auth" />
                                        <span>by <b>Sagor Biswas</b></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="thumbnail">
                                <a href="single.html">
                                    <img src="assets/img/blog/3.jpg" alt="blog" />
                                </a>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span><i class="far fa-calendar-alt"></i> 12 September 2021</span>
                                    <span><i class="fas fa-tags"></i> <a href="#">Technology</a></span>
                                </div>
                                <h2 class="title"><a href="single.html">What’s the Holding Back the It Solution Industry?</a></h2>
                                <p>In a lobortis lorem. Duis ultrices, lorem id tristique tempus, massa ligula ornare erat, id mattis sem diam ac ante</p>
                                <div class="author">
                                    <a href="#">
                                        <img src="assets/img/auth.jpg" alt="auth" />
                                        <span>by <b>Sagor Biswas</b></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest News Area -->
        <!-- Start Subscriber Area -->
        <div class="subscribe-area pt-70 pb-70" style="background-image: url('assets/img/sub.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="subscribe-content">
                            <h2>Subscribe to our newsletter</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elementum dui in suscipit congue...</p>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-center">
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="email" name="sub" placeholder="Email Address" />
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscriber Area -->
        <!-- Start Footer Area -->
        <footer class="footer">
            <!-- Footer Top -->
            <div class="footer-top pt-70 pb-20">
                <div class="container">
                    <div class="row">
                        <!-- Single -->
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="footer-widgets-single">
                                <h2 class="title">About Company</h2>
                                <p>Happen active county. Winding for the morning am shyness evident to poor. Garrets because elderly new.</p>
                                <div class="footer-call-btn">
                                    <div class="icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="con">
                                        <p>Talk To Our Support</p>
                                        <span>+1 002-123-4567</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="footer-widgets-single">
                                <h2 class="title">Quick Links</h2>
                                <ul>
                                    <li><a href="#">Make Appointment</a></li>
                                    <li><a href="#">Customer Services</a></li>
                                    <li><a href="#">Department</a></li>
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Our Case Studies</a></li>
                                    <li><a href="#">Free Consultation</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="footer-widgets-single">
                                <h2 class="title">Solutions</h2>
                                <ul>
                                    <li><a href="#">Our Business Growth</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Cloud Migration</a></li>
                                    <li><a href="#">Software Development</a></li>
                                    <li><a href="#">Mobile Development</a></li>
                                    <li><a href="#">Digital Solutions</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="footer-widgets-single">
                                <h2 class="title">Latest News</h2>
                                <div class="f-w-l-blog">
                                    <!-- Single -->
                                    <div class="single">
                                        <div class="thumbnail">
                                            <a href="single.html">
                                                <img src="assets/img/blog/1.jpg" alt="blog" />
                                            </a>
                                        </div>
                                        <div class="cont">
                                            <h4><a href="single.html">5 Easy Ways to Improve Your Web Security</a></h4>
                                            <span><i class="far fa-calendar-alt"></i> 12 September 2021</span>
                                        </div>
                                    </div>
                                    <!-- Single -->
                                    <div class="single">
                                        <div class="thumbnail">
                                            <a href="single.html">
                                                <img src="assets/img/blog/2.jpg" alt="blog" />
                                            </a>
                                        </div>
                                        <div class="cont">
                                            <h4><a href="single.html">5 Easy Ways to Improve Your Web Security</a></h4>
                                            <span><i class="far fa-calendar-alt"></i> 12 September 2021</span>
                                        </div>
                                    </div>
                                    <!-- Single -->
                                    <div class="single">
                                        <div class="thumbnail">
                                            <a href="single.html">
                                                <img src="assets/img/blog/3.jpg" alt="blog" />
                                            </a>
                                        </div>
                                        <div class="cont">
                                            <h4><a href="single.html">5 Easy Ways to Improve Your Web Security</a></h4>
                                            <span><i class="far fa-calendar-alt"></i> 12 September 2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom pt-30 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copy-text">
                                <p>Copyright © 2021 <a href="#">ITHOP</a> Theme by <a href="#">CodexUnicTheme</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- End Works About Area -->
        <div class="scroll-area">
            <i class="fa fa-angle-up"></i>
        </div>

        <!-- Js File -->
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/mixitup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/mobile-menu.js"></script>
    </body>

<!-- Mirrored from preetheme.com/html/codeit/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2023 15:55:55 GMT -->
</html>
