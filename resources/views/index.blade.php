<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VacyMate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/notification.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/logout.css') }}">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>VacyMate</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a class="nav-item nav-link active" onclick="homeClick()" id="homeTab">Home</a>
                    <a class="nav-item nav-link" onclick="locationsClick()" id="locationTab">Locations</a>
                    <a class="nav-item nav-link" onclick="servicesClick()" id="servicesTab">Vehicles</a>
                    <a class="nav-item nav-link" onclick="aboutClick()" id="aboutTab">Hotels</a>
                    <a class="nav-item nav-link" onclick="contactClick()" id="contactTab">Guides</a>
                    {{-- <a class="nav-item nav-link" onclick="contactClick()" id="contactTab">Plan</a> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Packages</a>
                        <div class="dropdown-menu m-0 text-center">
                            <a href="/package?type=complete" class="dropdown-item">Complete Packages</a>
                            <a href="/package?type=vehicle" class="dropdown-item">Vehicle Packages</a>
                            <a href="/package?type=guide" class="dropdown-item">Guides Packages</a>
                            <a href="/package?type=hotel" class="dropdown-item">hotel Packages</a>
                        </div>
                    </div>
                </div>

                {{-- notifications --}}
                <div class="notification" id="notific">
                    <input type="checkbox" name="uro" id="uro">
                    <input type="checkbox" name="btn" id="btn">
                    <label for="btn">
                        <span class="counter">2</span>
                    </label>
                    <div class="panel">
                        <div class="unread-only">Only show unread <label for="uro"></label></div>
                        <ul>
                            <li class="unread"><img src="https://i.pravatar.cc/40?img=8"><strong>Tene</strong> added
                                your Pen <a href="#">404 Error Room</a> to their Collection</li>
                            {{-- <li class="unread"><img src="https://i.pravatar.cc/40?img=11"><strong>Sem</strong> and 14
                                others loves your pen <a href="#">Crack Climbing Map</a></li>
                            <li class="read"><img src="https://i.pravatar.cc/40?img=3"><strong>Rufo</strong> and 11
                                others loves your pen <a href="#">Notification Icon</a></li>
                            <li class="read"><img src="https://i.pravatar.cc/40?img=4"><strong>Wirki</strong> and 6
                                others followed you</li> --}}
                        </ul>
                    </div>
                </div>
                {{-- notifications end --}}
                <a style="margin-right: 15px" class="btn btn-primary rounded-pill py-2 px-4 "
                    onclick="userPortal()">User Portal</a>
                {{-- <div style=""></div> --}}
                <button class="Btnlg " onclick="logout()" id="btnLgout">
                    <div class="sign">
                        <svg viewBox="0 0 512 512">
                            <path
                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                            </path>
                        </svg>
                    </div>

                    <div class="textlg">Logout</div>
                </button>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Plan Your Vacation With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet
                            diam et eos erat ipsum lorem sit</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Place to go, things to do, hotels... ">
                            <button type="button"
                                class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="aboutUs">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">VacyMate</span></h1>

                    <p class="mb-4">At VacayMate, we're your one-stop solution for unforgettable travel experiences
                        in Sri Lanka. Let us take the stress out of planning your dream vacation. Ready to start your
                        adventure? Click below to get started or explore more about our services.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Plan Entire Vacaction
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Attractive Complete
                                Packages
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Vehicle Rental
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Find Where to visit
                                Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Discover More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5" id="serviceDv">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Discover Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3 inner-containers">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Plan Entire Vacation</h5>
                            <p>Easily plan every aspect of your vacation, from choosing destinations to scheduling
                                activities and managing transportation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3 inner-containers">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Quickly find and book accommodations tailored to your preferences and budget, ensuring a
                                comfortable stay wherever you go.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3 inner-containers">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Access curated travel guides for insider tips and local insights to enhance your trip.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3 inner-containers">
                        <div class="p-4">
                            <i class="fa fa-3x fa-car text-primary mb-4"></i>
                            <h5>Vehicle Hiring</h5>
                            <p>Arrange hassle-free vehicle rentals for seamless transportation during your travels,
                                whether it's a car, bike, or other modes of transport.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3 inner-containers">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Translators</h5>
                            <p> Break down language barriers with translation services or access to live interpreters to
                                communicate effectively in any destination.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3 inner-containers">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Direct Contact</h5>
                            <p>Connect directly with local service providers, tour operators, and accommodation hosts
                                for personalized assistance and support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3 inner-containers">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Featured Destinations</h5>
                            <p>Connect directly with local hosts and service providers for personalized support and
                                assistance during your trip.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3 inner-containers">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Complete Packages</h5>
                            <p>
                                Select from pre-arranged travel packages encompassing accommodations, activities,
                                transportation, and more for a hassle-free vacation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-1.jpg" alt="">

                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Galle</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-2.jpg" alt="">

                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Nuwara Eliya</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-3.jpg" alt="">

                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Jaffna</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg"
                            alt="" style="object-fit: cover;">

                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                            Neluwa</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="package-carousel" id="packages-carousel">
            </div>
        </div>
        <div style="width:99%; display: flex; justify-content: flex-end;">
            <button class="button" onclick="packageAll()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
                    </path>
                </svg>
                <div class="text">
                    See more
                </div>
            </button>
        </div>
    </div>
    <!-- Package End -->

    <!-- Hotel Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Hotels</h6>
                <h1 class="mb-5">Hotel Reservation</h1>
            </div>
            <div class="package-carousel" id="hotel-carousel">
            </div>
        </div>
        <div style="width:99%; display: flex; justify-content: flex-end;">
            <button class="button" onclick="htlPackage()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
                    </path>
                </svg>
                <div class="text">
                    See more
                </div>
            </button>
        </div>
    </div>
    <!-- Hotel End -->

    <!-- Vehicle Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Find a vehicle</h6>
                <h1 class="mb-5">Vehicle Hiring</h1>
            </div>
            <div class="package-carousel" id="vehicle-carousel">
            </div>
        </div>
        <div style="width:99%; display: flex; justify-content: flex-end;">
            <button class="button" onclick="vehiclePackage()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
                    </path>
                </svg>
                <div class="text">
                    See more
                </div>
            </button>
        </div>
    </div>
    <!-- Vehicle End -->

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="contactUs">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Contact Us</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input"
                                            id="datetime" placeholder="Date & Time" data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="select1">
                                            <option value="1">Destination 1</option>
                                            <option value="2">Destination 2</option>
                                            <option value="3">Destination 3</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                            ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                            ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                            ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->

    <!-- guides Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">TRAVEL GUIDE</h6>
                <h1 class="mb-5">Travel Guides</h1>
            </div>
            <div class="package-carousel " id="guides-carousel">
            </div>
        </div>
        <div style="width:99%; display: flex; justify-content: flex-end;">
            <button class="button" onclick="guidePackage()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
                    </path>
                </svg>
                <div class="text">
                    See more
                </div>
            </button>
        </div>
    </div>
    <!-- guides End -->

    <!-- translator Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Translators</h6>
                <h1 class="mb-5">Translators</h1>
            </div>
            <div class="package-carousel " id="translator-carousel">
            </div>
        </div>
        <div style="width:99%; display: flex; justify-content: flex-end;">
            <button class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
                    </path>
                </svg>
                <div class="text">
                    See more
                </div>
            </button>
        </div>
    </div>
    <!-- Translators End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Galle, Sri Lanka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+94912261068</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            getGuides();
            getHotels();
            getVehicle();
            getTranslators();
            getPackages();
        });

        function getGuides() {
            for (var i = 0; i < 6; i++) {
                var divElement = document.createElement('div');
                divElement.className = 'col-lg-3 col-md-6 wow fadeInUp guidesDiv';
                divElement.setAttribute('data-wow-delay', '0.1s');

                // Generate dynamic content
                // <img class="img-fluid" src="img/team-${i + 1}.jpg" alt="">
                divElement.innerHTML = `
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Full Name ${i + 1}</h5>
                        <small>Designation</small>
                    </div>
                </div>
            `;

                document.getElementById('guides-carousel').appendChild(divElement);
            }
        }

        function getTranslators() {
            for (var i = 0; i < 6; i++) {
                var divElement = document.createElement('div');
                divElement.className = 'col-lg-3 col-md-6 wow fadeInUp guidesDiv';
                divElement.setAttribute('data-wow-delay', '0.1s');

                // Generate dynamic content
                // <img class="img-fluid" src="img/team-${i + 1}.jpg" alt="">
                divElement.innerHTML = `
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Full Name ${i + 1}</h5>
                        <small>Designation</small>
                    </div>
                </div>
            `;

                document.getElementById('translator-carousel').appendChild(divElement);
            }
        }

        function getPackages() {
            for (var i = 0; i < 6; i++) {
                var divElement = document.createElement('div');
                divElement.className = 'col-lg-4 col-md-6 wow fadeInUp carousel-itm';
                divElement.setAttribute('data-wow-delay', '0.5s');

                // Generate dynamic content
                divElement.innerHTML = `
            <div class="package-item">
                <div class="overflow-hidden">
                    <img class="img-fluid" src="img/package-1.jpg" alt="">
                </div>
                <div class="d-flex border-bottom">
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Malaysia</small>
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
                </div>
                <div class="text-center p-4">
                    <h3 class="mb-0">$189.00</h3>
                    <div class="mb-3">
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                    </div>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                    </div>
                </div>
            </div>
        `;

                document.getElementById('packages-carousel').appendChild(divElement);
            }
        }

        function getHotels() {
            for (var i = 0; i < 6; i++) {
                var divElement = document.createElement('div');
                divElement.className = 'col-lg-4 col-md-6 wow fadeInUp carousel-itm';
                divElement.setAttribute('data-wow-delay', '0.5s');

                // Generate dynamic content
                divElement.innerHTML = `
            <div class="package-item">
                <div class="overflow-hidden">
                    <img class="img-fluid" src="img/package-1.jpg" alt="">
                </div>
                <div class="d-flex border-bottom">
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Malaysia</small>
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
                </div>
                <div class="text-center p-4">
                    <h3 class="mb-0">$189.00</h3>
                    <div class="mb-3">
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                    </div>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                    </div>
                </div>
            </div>
        `;

                document.getElementById('hotel-carousel').appendChild(divElement);
            }
        }

        function getVehicle() {
            for (var i = 0; i < 6; i++) {
                var divElement = document.createElement('div');
                divElement.className = 'col-lg-4 col-md-6 wow fadeInUp carousel-itm';
                divElement.setAttribute('data-wow-delay', '0.5s');

                // Generate dynamic content
                divElement.innerHTML = `
            <div class="package-item">
                <div class="overflow-hidden">
                    <img class="img-fluid" src="img/package-3.jpg" alt="">
                </div>
                <div class="d-flex border-bottom">
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Malaysia</small>
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
                </div>
                <div class="text-center p-4">
                    <h3 class="mb-0">$189.00</h3>
                    <div class="mb-3">
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                    </div>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                    </div>
                </div>
            </div>
        `;

                document.getElementById('vehicle-carousel').appendChild(divElement);
            }
        }

        $(document).ready(function() {
            $(".package-carousel").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
            setInterval(function() {
                $(".package-carousel").slick('slickNext');
            }, 4000);
        });

        function packageAll() {
            window.location.href = `/package?type=complete`;

        }

        function htlPackage() {
            window.location.href = `/package?type=hotel`;
        }

        function vehiclePackage() {
            window.location.href = `/package?type=vehicle`;
        }

        function guidePackage() {
            window.location.href = `/package?type=guide`;
        }

        function logout() {
            localStorage.removeItem('user');
            alert('Logout Successfully...');
            window.location.href = `/`;
        }

        document.addEventListener('DOMContentLoaded', function() {
            var logged = localStorage.getItem('user');
            if (!logged) {

                document.getElementById('btnLgout').style.display = 'none';
                document.getElementById('notific').style.display = 'none';

                // window.location.href = `/signup`;
            }


        });

        function aboutClick() {
            window.location.href = `/hotels`;
            setActive('aboutTab');
        }

        function homeClick() {
            window.location.href = `/#home`;
            setActive('homeTab');
        }

        function servicesClick() {
            window.location.href = `/vehicles`;
            setActive('servicesTab');
        }

        function locationsClick() {
            window.location.href = `/location`;
            setActive('locationTab');
        }

        function contactClick() {
            window.location.href = `/guides`;
            setActive('contactTab');
        }

        function setActive(tabId) {
            const tabs = document.querySelectorAll('.nav-item');

            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            document.getElementById(tabId).classList.add('active');
        }

        function userPortal() {
            var logged = localStorage.getItem('userType');

            if (logged == 'SERVICE') {
                window.location.href = '/provider-home';
            } else if (logged == 'USER') {
                window.location.href = '/user-home';
            } else {
                window.location.href = '/signup';
            }

        }
    </script>
</body>

</html>
