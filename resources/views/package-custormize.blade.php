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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/filters.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datePicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/delete.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search-btn.css') }}">

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
    <div class="container-fluid position-relative p-0 ">
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
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="package.html" class="nav-item nav-link active">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.html" class="dropdown-item">Destination</a>
                            <a href="booking.html" class="dropdown-item">Booking</a>
                            <a href="team.html" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill py-2 px-4">User Portal</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Booking</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                    <link href="https://fonts.googleapis.com/css?family=Coda|Open+Sans" rel="stylesheet">

                    <div id="date-picker-section" class="contasssiner">
                        <div id="date-picker-container">

                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="chkAirportPick" class="inp-cbx" />
                                <label for="chkAirportPick" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Airport Pickup</span>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="chkAirportDrop" class="inp-cbx" />
                                <label for="chkAirportDrop" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Airport Drop</span>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="cntPerson" class="inp-cbx" checked disabled />
                                <label for="cntPerson" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Up to 6 Persons</span>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="chkTourGuide" class="inp-cbx" />
                                <label for="chkTourGuide" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Free Tour Guide</span>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="ultimateService" class="inp-cbx" checked disabled />
                                <label for="ultimateService" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">24/7 Service</span>
                                </label>
                            </div>

                            <div class="mt-0 mb-4">
                                <h5 id="dtCount">18 days Package </h5>
                            </div>
                            <p id="dtCount2" style="display: none">18</p>
                            <div id="date-picker-title">
                                <h4> Select your dates </h4>
                            </div>

                            <p> Click on a date to open the date picker. </p>

                            <div id="date-picker-dates">
                                <div id="date-picker-date-first" class="date-picker-date">
                                    24/12/2017
                                </div>
                                {{-- <div class="date-picker-date">
                                    28/12/2017
                                </div> --}}
                            </div>

                            <p> Revel in how big the dates are now. </p>

                            <div id="date-picker-display-container">
                                <div class="date-picker-display-pair">
                                    <div class="date-picker-display">
                                        24 Dec
                                    </div>
                                    <div class="date-picker-display-label">
                                        Date one
                                    </div>
                                </div>
                                <div class="date-picker-display-pair">
                                    <div class="date-picker-display">
                                        28 Dec
                                    </div>
                                    <div class="date-picker-display-label">
                                        Date two
                                    </div>
                                </div>
                            </div>

                            <div id="date-picker-modal" class="hidden-2" style="margin-left: -150px">
                                <div id="date-picker-top-bar">
                                    <div id="date-picker-previous-month" class="date-picker-change-month">&lsaquo;
                                    </div>
                                    <div id="date-picker-month">December 17</div>
                                    <div id="date-picker-next-month" class="date-picker-change-month">&rsaquo;</div>
                                </div>
                                <div id="date-picker-exit">&times;</div>
                                <table id="date-picker">
                                    <tr id="date-picker-weekdays">
                                        <th>S</th>
                                        <th>M</th>
                                        <th>T</th>
                                        <th>W</th>
                                        <th>T</th>
                                        <th>F</th>
                                        <th>S</th>
                                    </tr>
                                    <!-- Actual calendar rows added dynamically -->
                                    <!--<tr class="date-picker-calendar-row"></tr>-->
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-8 wow fadeInUp " style="background-color: #fff; width : 75%;"
                    data-wow-delay="0.3s">
                    <div class="m-3">
                        <h3 class="m-0">D & W Touers</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <h4>Our this package</h4>
                        <p id="pkgDiscrip">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus
                            nulla deleniti a aut
                            perferendis dicta sit dolores voluptate asperiores ipsa ullam incidunt repudiandae amet
                            quisquam, sunt tempora ea hic quia?</p>
                        <h4>See How Our Customers Explore and Enjoy</h4>
                        <div class="row g-3">
                            <div class="col-lg-7 col-md-6">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                        <a class="position-relative d-block overflow-hidden" href="">
                                            <img class="img-fluid" src="img/destination-1.jpg" alt="">
                                            {{-- <div
                                                class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                                Thailand</div> --}}
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                        <a class="position-relative d-block overflow-hidden" href="">
                                            <img class="img-fluid" src="img/destination-2.jpg" alt="">

                                            {{-- <div
                                                class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                                Malaysia</div> --}}
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                        <a class="position-relative d-block overflow-hidden" href="">
                                            <img class="img-fluid" src="img/destination-3.jpg" alt="">
                                            {{-- <div
                                                class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                                Australia</div> --}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s"
                                style="min-height: 350px;">
                                <a class="position-relative d-block h-100 overflow-hidden" href="">
                                    <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg"
                                        alt="" style="object-fit: cover;">

                                    {{-- <div
                                        class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                        Indonesia</div> --}}
                                </a>
                            </div>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: flex-end;">
                            <button class="cssbuttons-io-button mt-2">
                                See All Images
                                <div class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container-xxl py-5" style="background-color: #fff; width:88%">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center">Locations That You Need To Cover</h3>
                    <div class="col-lg-10 col-sm-4 wow fadeInUp mt-2 mb-4" style="margin-left:50px"
                        data-wow-delay="0.1s">
                        <div class="search-corner">
                            <div class="search-box mt-2 mb-0">
                                <input type="text" id="locationSearch" name="" value=""
                                    placeholder="Location Name" oninput="searchResults(event)">
                                <button type="button"
                                    class="btn btn-primary rounded-pill py-2 px-5 position-absolute top-0 end-0 me-2"
                                    style="margin-top: 8px;">Search</button>
                            </div>
                            <div class="search-results">
                                <h2 class="query-title"></h2>
                                <div class="search-result r0"></div>
                                <div class="search-result r1"></div>
                                <div class="search-result r2"></div>
                                <div class="search-result r3"></div>
                                <div class="search-result r4"></div>
                                <div class="search-result r5"></div>
                                <div class="search-result r6"></div>
                                <div class="search-result r7"></div>
                                <div class="search-result r8"></div>
                                <div class="search-result r9"></div>
                            </div>

                        </div>
                    </div>
                    <div id="packageList">
                    </div>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="text-center mt-5">Vehicles That Brings You In Entire Vacation </h3>
                    <div class="col-lg-10 col-sm-4 wow fadeInUp" style="margin-left:50px" data-wow-delay="0.1s">
                        <div class="search-corner">
                            <div class="search-box mt-2 mb-0">
                                <input type="text" id="vehicSrh" name="" placeholder="Vehicle Number"
                                    oninput="searchResults(event)">
                                <button type="button"
                                    class="btn btn-primary rounded-pill py-2 px-5 position-absolute top-0 end-0 me-2"
                                    style="margin-top: 8px;">Search</button>
                            </div>
                            <div class="search-results">
                                <h2 class="query-title"></h2>
                                <div class="search-result a0"></div>
                                <div class="search-result a1"></div>
                                <div class="search-result a2"></div>
                                <div class="search-result a3"></div>
                                <div class="search-result a4"></div>
                                <div class="search-result a5"></div>
                                <div class="search-result a6"></div>
                                <div class="search-result a7"></div>
                                <div class="search-result a8"></div>
                                <div class="search-result a9"></div>
                            </div>

                        </div>
                    </div>
                    <div id="VehicleList">
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-10 col-sm-4 wow fadeInUp" style="margin-left:50px" data-wow-delay="0.3s">
                    <h3 class="text-center mt-5">Accommodation That You Stays In Entire Vacation </h3>
                    <div class="row g-4">

                        <div class="col-lg-10 col-sm-4 wow fadeInUp" style="margin-left:50px" data-wow-delay="0.1s">
                            <div class="search-corner">
                                <div class="search-box mt-2 mb-0">
                                    <input type="text" id="accSearch" name="" placeholder="Hotel Name"
                                        oninput="searchResults(event)">
                                    <button type="button"
                                        class="btn btn-primary rounded-pill py-2 px-5 position-absolute top-0 end-0 me-2"
                                        style="margin-top: 8px;">Search</button>
                                </div>
                                <div class="search-results">
                                    <h2 class="query-title"></h2>
                                    <div class="search-result b0"></div>
                                    <div class="search-result b1"></div>
                                    <div class="search-result b2"></div>
                                    <div class="search-result b3"></div>
                                    <div class="search-result b4"></div>
                                    <div class="search-result b5"></div>
                                    <div class="search-result b6"></div>
                                    <div class="search-result b7"></div>
                                    <div class="search-result b8"></div>
                                    <div class="search-result b9"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div id="accommodationList">
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="text-center mt-5">Guides And Language Translators</h3>
                    <div class="row g-4 ">

                        <div class="col-lg-10 col-sm-4 wow fadeInUp " style="margin-left:50px" data-wow-delay="0.1s">
                            <div class="search-corner">
                                <div class="search-box mt-2 mb-0">
                                    <input type="text" id="guideSrch" name="" placeholder="Guide Name"
                                        oninput="searchResults(event)">
                                    <button type="button"
                                        class="btn btn-primary rounded-pill py-2 px-5 position-absolute top-0 end-0 me-2"
                                        style="margin-top: 8px;">Search</button>
                                </div>
                                <div class="search-results">
                                    <h2 class="query-title"></h2>
                                    <div class="search-result c0"></div>
                                    <div class="search-result c1"></div>
                                    <div class="search-result c2"></div>
                                    <div class="search-result c3"></div>
                                    <div class="search-result c4"></div>
                                    <div class="search-result c5"></div>
                                    <div class="search-result c6"></div>
                                    <div class="search-result c7"></div>
                                    <div class="search-result c8"></div>
                                    <div class="search-result c9"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div id="translatorsList">
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                    <p class="mt-5" style=" font-size: 17px; color:black">If this package feels
                        just right for
                        your Sri Lanka
                        adventure, you can book it
                        and get started on
                        your journey with us. But if you’d like to make it your own, our customization options let you
                        tweak every detail from destinations and accommodations to vehicles and activities. The choice
                        is yours! Either way, we’re excited to help you create unforgettable memories.</p>
                </div>
            </div>

            <div class="row g-4">
                <h3 class="text-center">Submit Your Customized Package We Will Give Quotation As Soon As Possible
                </h3>
                <div class="col-lg-12 col-sm-4 wow fadeInUp " style=" display: flex; justify-content: center;"
                    data-wow-delay="0.4s">
                    <button class="animated-button" style="width: 15vw" onclick="submitPackage()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
                            <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                            </path>
                        </svg>
                        <span class="text" style="font-size: 20px">Submit</span>
                        <span class="circle"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
                            <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                            </path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </div>

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            getPackageData({{ $packageId }});
            // getLocations();
            // getVehicles();
            // getAccommodation();
            // getTranslators();
        });
        var monthFormatter = new Intl.DateTimeFormat("en-us", {
            month: "long"
        });
        var weekdayFormatter = new Intl.DateTimeFormat("en-us", {
            weekday: "long"
        });

        var dates = [];
        dates[0] = new Date(); // defaults to today
        dates[1] = addDays(dates[0], 31);

        var currentDate = 0; // index into dates[]
        var previousDate = 1;

        var datesBoxes = $(".date-picker-date");
        var displayBoxes = $(".date-picker-display");

        // sensible default just in case jQuery doesn't kick in
        // makes sure that the experience is still usable, and when $(window).width() returns then this variable is updated to the correct value
        var windowWidth = 300;
        var colourPickerWidth = 300;

        // set up dates
        $(document).ready(function() {
            // will work the same the first time as every other
            updateDatePicker();

            // update dates shown to correct dates
            $(datesBoxes[0]).text("dd/mm/yyyy");
            // $(datesBoxes[1]).text(getDateString(dates[1]));

            $(displayBoxes[0]).text("-- --");
            $(displayBoxes[1]).text("-- --");
        });

        // add event listeners
        $(document).ready(function() {

            // has to be applied each time, as it's removed when calendar is reset
            applyDateEventListener();

            $(".date-picker-date").click(function(e) {

                // if active, toggle picker off and return
                var currentlyActive = $(this).hasClass("active");
                if (currentlyActive) {
                    $(this).removeClass("active");
                    hideDatePicker();
                    return;
                }

                $(".date-picker-date").removeClass("active");
                $(this).addClass("active");

                // update currentDate
                previousDate = currentDate;
                if ($(this)[0].id == "date-picker-date-first") {
                    currentDate = 0;
                } else {
                    currentDate = 1;
                }

                // update calendar
                showDatePicker(e);
                updateDatePicker();
            });

            $("#date-picker-next-month").click(function() {
                changeMonth("Next");
            });

            $("#date-picker-previous-month").click(function() {
                changeMonth("Previous");
            });

            $("#date-picker-exit").click(function() {
                hideDatePicker();
            });

            $(document).click(function(e) {
                var target = $(e.target);
                var clickedOnPicker = (target.closest("#date-picker-modal").length);
                var clickedOnDate = (target.closest(".date-picker-date").length);
                var isPreviousOrNext = target.hasClass("previous-month") || target.hasClass("next-month");

                if (!(clickedOnPicker || clickedOnDate || isPreviousOrNext)) {
                    hideDatePicker();
                }
            });

        });

        function updateDatePicker(changeMonth = false) {

            var datePicker = $("#date-picker");
            var curDate = dates[currentDate]; // shorthand

            var differentMonth = checkChangedMonth();
            if (changeMonth === false && differentMonth === false) {
                return;
            }

            updatePickerMonth();

            // clear out all tr instances other than the header row
            // really just removing all rows and appending header row straight back in
            var headerRow = `
    <tr id="date-picker-weekdays">
      <th>S</th>
      <th>M</th>
      <th>T</th>
      <th>W</th>
      <th>T</th>
      <th>F</th>
      <th>S</th>
    </tr>`;
            // clear all rows
            datePicker.contents().remove();
            datePicker.append(headerRow);

            var todayDate = curDate.getDate();
            var firstOfMonth = new Date(curDate.getFullYear(), curDate.getMonth(), 1);
            var firstWeekday = firstOfMonth.getDay(); // 0-indexed; 0 is Sunday, 6 is Saturday
            var lastMonthToInclude = firstWeekday; // happily, this just works as-is.
            var firstOfNextMonth = addMonths(firstOfMonth, 1);
            var lastOfMonth = addDays(firstOfNextMonth, -1).getDate();

            var openRow = "<tr class='date-picker-calendar-row'>";
            var closeRow = "</tr>";
            var currentRow = openRow;

            // Add in as many of last month as required
            if (lastMonthToInclude > 0) {
                var lastMonthLastDay = addDays(firstOfMonth, -1);
                var lastMonthDays = lastMonthLastDay.getDate();
                var lastMonthStartAdding = lastMonthDays - lastMonthToInclude + 1;

                // add days from previous month
                // takes arguments (start loop, end loop <=, counter, 'true' if current month OR class if another month (optional, default "") )
                //addToCalendar(lastMonthStartAdding, lastMonthDays, 0, "previous-month");
                //addToCalendar(lastMonthStartAdding, lastMonthDays, 0, "month-previous");
                addToCalendar(lastMonthStartAdding, lastMonthDays, 0, "previous-month");
            }

            // fill out rest of row with current month
            // doesn't matter how many of last month were included, all accounted for
            addToCalendar(1, 7 - lastMonthToInclude, lastMonthToInclude, true);

            // reset for current month generation
            currentRow = openRow;

            var counter = 7;
            var addedFromCurrentMonth = 7 - firstWeekday + 1;

            addToCalendar(addedFromCurrentMonth, lastOfMonth, counter, true);

            // at this point, counter = all of this month + whatever was included from last month
            counter = lastMonthToInclude + lastOfMonth;
            var nextMonthToInclude = counter % 7 === 0 ? 0 : 7 - (counter % 7);

            addToCalendar(1, nextMonthToInclude, counter, "next-month");

            // add event listener again
            applyDateEventListener();

            // update current date box
            updateDateShown();



            // functions scoped to this outer function
            //############################################################
            function checkChangedMonth() {
                // updates if changed month directly (changeMonth) or if switched to other .date-picker-date and month is different (differentMonth)
                var differentMonth = false;
                // checks if it's the same date again
                if (currentDate !== previousDate) {
                    // if either month or year are different then month has changed
                    if (dates[0].getMonth() !== dates[1].getMonth() || dates[0].getYear() !== dates[1].getYear()) {
                        differentMonth = true;
                    }
                }

                return differentMonth;

            }

            function addToCalendar(start, end, counter, cellClass) {

                var currentMonth = cellClass === true ? true : false;

                for (var i = start; i <= end; i++) {
                    counter += 1;
                    if (i === todayDate && currentMonth) {
                        currentRow += `<td class="active">${i}</td>`;
                    } else if (cellClass && !currentMonth) {
                        currentRow += `<td class="${cellClass}">${i}</td>`;
                    } else {
                        currentRow += `<td>${i}</td>`;
                    }
                    if (counter % 7 === 0) {
                        datePicker.append(currentRow + closeRow);
                        currentRow = openRow;
                    }
                }
            }
        }

        function updatePickerMonth() {
            var monthName = monthFormatter.format(dates[currentDate]);
            var year = dates[currentDate].getFullYear();
            var dateText = monthName + " " + year;
            $("#date-picker-month").text(dateText);
        }

        function dateSelected(currentDay) {

            // update the active .date-picker-date with the current date
            var activeDate = $($(".date-picker-date.active")[0]);

            // get current date and update
            dates[currentDate].setDate(currentDay);
            updateDateShown();
        }

        // 'direction' can be either "Next" or "Previous"
        function changeMonth(direction) {

            var increment = direction === "Next" ? 1 : -1;

            // change month
            dates[currentDate] = addMonths(dates[currentDate], increment);

            // change month name in picker
            updatePickerMonth();

            // update calendar
            // passes 'true' that month has changed
            updateDatePicker(true);
        }

        function showDatePicker(e) {

            var pxFromTop = $(".date-picker-date").offset().top;
            var datePicker = $("#date-picker-modal");
            datePicker.css("top", pxFromTop + 40);
            // check if right edge of colourPicker will go off the edge of the screen, and if so then reduce left by that amount
            var rightEdge = e.pageX + colourPickerWidth;
            var overflowWidth = rightEdge - windowWidth;
            if (overflowWidth > 0) {
                datePicker.css("left", e.pageX - overflowWidth);
            } else {
                datePicker.css("left", e.pageX);
            }

            $("#date-picker-modal").removeClass("hidden-2");
        }

        function hideDatePicker() {
            $(".date-picker-date").removeClass("active");
            $("#date-picker-modal").addClass("hidden-2");
        }

        function applyDateEventListener() {

            $("#date-picker td").click(function() {

                // Calendar UI
                $("#date-picker td").removeClass("active");
                $(this).addClass("active");

                // update variables
                currentDay = $(this).text();

                // update the current date
                dateSelected(currentDay);

                // change month based on calendar day class
                if ($(this).hasClass("previous-month")) {
                    changeMonth("Previous");
                } else if ($(this).hasClass("next-month")) {
                    changeMonth("Next");
                } else {
                    // clicked in current month; made selection so hide picker again
                    hideDatePicker();
                }
            });

        }


        // Utilities
        //################################################################
        // set location for date picker
        $(document).ready(function() {
            updateWidths();
        });

        $(window).resize(function() {
            updateWidths();
        });

        function updateWidths() {
            windowWidth = $(window).width();
        }

        function addDays(date, days) {
            var result = new Date(date);
            result.setDate(result.getDate() + days);
            return result;
        }

        function addMonths(date, months) {
            var result = new Date(date);
            result.setMonth(result.getMonth() + months);
            return result;
        }


        function getDateString(date) {
            var year = date.getFullYear();

            var month = (1 + date.getMonth()).toString();
            month = month.length > 1 ? month : '0' + month;

            var day = date.getDate().toString();
            day = day.length > 1 ? day : '0' + day;

            return day + '/' + month + '/' + year;
        }

        function updateDateShown() {
            var formattedDate = getDateString(dates[currentDate]);
            var updateDateBox = $(datesBoxes[currentDate]);

            var updateDisplayBox = $(displayBoxes[currentDate]);
            var dayAndMonth = dates[currentDate].getDate() + " " + monthFormatter.format(dates[currentDate]).slice(0, 3);

            updateDateBox.text(formattedDate);
            updateDisplayBox.text(dayAndMonth);

            var updateDisplayBox2 = $(displayBoxes[1]);
            var dtCount = document.getElementById("dtCount2").textContent;
            var futureDayAndMonth = getFormattedDayAndMonth(dayAndMonth, parseInt(dtCount, 10));
            updateDisplayBox2.text(futureDayAndMonth);
        }

        function getFormattedDayAndMonth(date, daysToAdd) {

            var resultDate = new Date(date);

            resultDate.setDate(resultDate.getDate() + daysToAdd);

            var day = resultDate.getDate();
            var month = resultDate.toLocaleString('en-GB', {
                month: 'short'
            });

            return day + " " + month;
        }

        function getLocations() {
            for (var j = 0; j < 4; j++) {
                var divElement = document.createElement('div');
                divElement.className = 'row g-2 mt-1 justify-content-center';
                let content = "";
                for (var i = 0; i < 6; i++) {
                    content += `
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-1.jpg" alt="">
                            </div>

                            <div class="text-center p-2">
                                <h4 class="mb-0">Ella Rock</h4>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>Nice view point. You can see beauti of neture</p>
                                <button class="rmv-btn " style=" margin-left: 30%;">
                                    <svg viewBox="0 0 448 512" class="svgIcon">
                                        <path
                                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

        `;

                }
                divElement.innerHTML = content;
                document.getElementById('packageList').appendChild(divElement);
            }
        }

        function getVehicles() {
            for (var j = 0; j < 2; j++) {
                var divElement = document.createElement('div');
                divElement.className = 'row g-2 mt-1 justify-content-center';
                let content = "";
                for (var i = 0; i < 4; i++) {
                    content += `
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-1.jpg" alt="">
                            </div>

                            <div class="text-center p-2">
                                <h4 class="mb-0">Totota KDH</h4>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>Very comfortable vehicle with fully ac</p>
                                <button class="rmv-btn " style=" margin-left: 40%;">
                                    <svg viewBox="0 0 448 512" class="svgIcon">
                                        <path
                                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

        `;

                }
                divElement.innerHTML = content;
                document.getElementById('VehicleList').appendChild(divElement);
            }
        }

        function getAccommodation() {
            for (var j = 0; j < 2; j++) {
                var divElement = document.createElement('div');
                divElement.className = 'row g-2 mt-1 justify-content-center';
                let content = "";
                for (var i = 0; i < 4; i++) {
                    content += `
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-1.jpg" alt="">
                            </div>

                            <div class="text-center p-2">
                                <h4 class="mb-0">Hotel Galadari</h4>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>5 Start Hotel for you comfortable accommodation</p>
                                <button class="rmv-btn " style=" margin-left: 40%;">
                                    <svg viewBox="0 0 448 512" class="svgIcon">
                                        <path
                                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

        `;

                }
                divElement.innerHTML = content;
                document.getElementById('accommodationList').appendChild(divElement);
            }
        }

        function getTranslators() {
            for (var j = 0; j < 1; j++) {
                var divElement = document.createElement('div');
                divElement.className = 'row g-2 mt-1 justify-content-center';
                let content = "";
                for (var i = 0; i < 4; i++) {
                    content += `
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-1.jpg" alt="">
                            </div>

                            <div class="text-center p-2">
                                <h4 class="mb-0">Mr. Kasun</h4>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>Guide And Language Translator</p>
                                <button class="rmv-btn " style=" margin-left: 40%;">
                                    <svg viewBox="0 0 448 512" class="svgIcon">
                                        <path
                                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

        `;

                }
                divElement.innerHTML = content;
                document.getElementById('translatorsList').appendChild(divElement);
            }
        }

        function getPackageData(pkgID) {
            getLocUrl = `http://localhost:8000/getPackageDetail/${pkgID}`;

            $.ajax({
                url: getLocUrl,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    var divElement = document.querySelector("#locationsList");
                    if (response.success) {

                        var divElement = document.createElement('div');
                        divElement.className = 'row g-2 mt-1 justify-content-center';
                        let content = "";

                        for (var i = 0; i < response.data.locations.length; i++) {

                            content += `
                                    <div class="col-lg-2 col-md-6 wow fadeInUp loc${i+1}" data-wow-delay="0.2s">
                                            <div class="package-item">
                                                <div class="overflow-hidden">
                                                    <img class="img-fluid" src="img/package-1.jpg" alt="">
                                                </div>

                                                <div class="text-center p-2">
                                                    <h4 class="mb-0">${ response.data.locations[i].name}</h4>
                                                    <div class="mb-3">
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                    </div>
                                                    <p>${ response.data.locations[i].discription}</p>
                                                    <button class="rmv-btn " style=" margin-left: 40%;" onclick='removeLocCard(event)'>
                                                            <svg viewBox="0 0 448 512" class="svgIcon">
                                                                <path
                                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                </div>
                                            </div>
                                        </div>

                            `;

                        }
                        divElement.innerHTML = content;
                        document.getElementById('packageList').appendChild(divElement);


                        // sets vehicles into package data
                        var divElementVehicle = document.createElement('div');
                        divElementVehicle.className = 'row g-2 mt-1 justify-content-center';
                        let contentVehi = "";
                        for (var i = 0; i < response.data.vehicles.length; i++) {
                            contentVehi += `
                                    <div class="col-lg-3 col-md-6 wow fadeInUp vehi${i+1}" data-wow-delay="0.2s">
                                            <div class="package-item">
                                                <div class="overflow-hidden">
                                                    <img class="img-fluid" src="img/package-1.jpg" alt="">
                                                </div>

                                                <div class="text-center p-2">
                                                    <h4 class="mb-0" style="display:none;">${response.data.vehicles[i].vehicle_no}</h4>
                                                    <h4 class="mb-0">${ response.data.vehicles[i].model}</h4>
                                                    <div class="mb-3">
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                    </div>
                                                    <p>${ response.data.vehicles[i].discription}</p>
                                                    <button class="rmv-btn " style=" margin-left: 40%;" onclick='removeVehicleCard(event)'>
                                                            <svg viewBox="0 0 448 512" class="svgIcon">
                                                                <path
                                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                </div>
                                            </div>
                                        </div>

                            `;

                        }
                        divElementVehicle.innerHTML = contentVehi;
                        document.getElementById('VehicleList').appendChild(divElementVehicle);


                        //hotel sets from api


                        var divElementhtl = document.createElement('div');
                        divElementhtl.className = 'row g-2 mt-1 justify-content-center';
                        let contenthtl = "";
                        for (var i = 0; i < response.data.hotels.length; i++) {
                            contenthtl += `
                                        <div class="col-lg-3 col-md-6 wow fadeInUp hotel${i+1}" data-wow-delay="0.2s">
                                                <div class="package-item">
                                                    <div class="overflow-hidden">
                                                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                                                    </div>

                                                    <div class="text-center p-2">
                                                        <h4 class="mb-0">${ response.data.hotels[i].hotel_name}</h4>
                                                        <div class="mb-3">
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                        </div>
                                                        <p style="display:none" id="hid${i+1}">${response.data.hotels[i].id}</p>
                                                        <p>${ response.data.hotels[i].discription}</p>
                                                        <button class="rmv-btn " style=" margin-left: 40%;"  onclick='removeHotelCard(event)'>
                                                            <svg viewBox="0 0 448 512" class="svgIcon">
                                                                <path
                                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                `;

                        }
                        divElementhtl.innerHTML = contenthtl;
                        document.getElementById('accommodationList').appendChild(divElementhtl);


                        // Guides set from api

                        var divElementGuide = document.createElement('div');
                        divElementGuide.className = 'row g-2 mt-1 justify-content-center';
                        let contentguide = "";
                        for (var i = 0; i < response.data.guides.length; i++) {
                            contentguide += `
                                        <div class="col-lg-3 col-md-6 wow fadeInUp guide${i+1}" data-wow-delay="0.2s">
                                                <div class="package-item">
                                                    <div class="overflow-hidden">
                                                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                                                    </div>

                                                    <div class="text-center p-2">
                                                        <h4 class="mb-0">${ response.data.guides[i].guide_name}</h4>
                                                        <div class="mb-3">
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                        </div>
                                                        <p style="display:none" id="gid${i+1}">${response.data.guides[i].id}</p>
                                                        <p>${ response.data.guides[i].discription}</p>
                                                        <button class="rmv-btn " style=" margin-left: 40%;" onclick='removeGuideCard(event)'>
                                                            <svg viewBox="0 0 448 512" class="svgIcon">
                                                                <path
                                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                `;

                        }
                        divElementGuide.innerHTML = contentguide;
                        document.getElementById('translatorsList').appendChild(divElementGuide);




                        var pkgPriceElement = document.getElementById("pkgPrice");

                        if (pkgPriceElement) {
                            pkgPriceElement.textContent = "$" + response.data.package.price;
                        }

                        // document.getElementById("chkAirportPick").checked = true,
                        if (response.data.package.airport_pickup === 1) {
                            document.getElementById("chkAirportPick").checked = true;
                        }
                        if (response.data.package.airport_drop === 1) {
                            document.getElementById("chkAirportDrop").checked = true;
                        }

                        var dtCountElement = document.getElementById("dtCount");

                        if (dtCountElement) {
                            dtCountElement.textContent = response.data.package.day_count + " days Package";
                            var dtCountElement2 = document.getElementById("dtCount2");
                            dtCountElement2.textContent = response.data.package.day_count;
                        }

                        var pkgDiscripElement = document.getElementById("pkgDiscrip");

                        if (pkgDiscripElement) {
                            pkgDiscripElement.textContent = response.data.package.discription;
                        }


                    } else {

                        alert('Error: ' + response.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    alert('Failed to fetch data: ' + textStatus);
                }
            });
        }

        function removeLocCard(event) {
            var target = event.target;
            var parentDiv = target.closest('.col-lg-2.col-md-6.wow.fadeInUp');

            if (parentDiv) {
                parentDiv.remove(); // Remove the element

                // After removing, adjust the class names to maintain sequential order
                var packageList = document.getElementById("packageList");

                if (packageList) {
                    // Find all the remaining elements with loc class
                    var locElements = packageList.querySelectorAll(".col-lg-2.col-md-6.wow.fadeInUp");

                    // Loop through all remaining elements to reset their loc class
                    for (let index = 0; index < locElements.length; index++) {
                        // Find the current loc class and remove it
                        var currentElement = locElements[index];
                        var currentLocClass = Array.from(currentElement.classList).find(cls => cls.startsWith('loc'));

                        if (currentLocClass) {
                            currentElement.classList.remove(currentLocClass); // Remove the existing loc class
                        }

                        // Assign the new loc class based on the current index
                        currentElement.classList.add(`loc${index + 1}`); // Reset the loc classes
                    }
                }

            } else {
                console.warn("Parent div not found for removal.");
            }
        }

        function removeGuideCard(event) {
            var target = event.target;
            var parentDiv = target.closest('.col-lg-3.col-md-6.wow.fadeInUp');

            if (parentDiv) {
                parentDiv.remove();


                var guideList = document.getElementById("translatorsList");

                if (guideList) {

                    var hotelElements = guideList.querySelectorAll(".col-lg-3.col-md-6.wow.fadeInUp");

                    for (let index = 0; index < hotelElements.length; index++) {
                        var currentElement = hotelElements[index];
                        var currentGUideClass = Array.from(currentElement.classList).find(cls => cls.startsWith('guide'));

                        if (currentGUideClass) {
                            currentElement.classList.remove(currentGUideClass);
                        }


                        currentElement.classList.add(`guide${index + 1}`);

                        //add for update p tag id
                        var pTag = currentElement.querySelector("p[id^='gid']");
                        if (pTag) {
                            pTag.id = `gid${index + 1}`;
                        }
                    }
                }

            } else {
                console.warn("Parent div not found for removal.");
            }
        }

        function removeHotelCard(event) {
            var target = event.target;
            var parentDiv = target.closest('.col-lg-3.col-md-6.wow.fadeInUp');

            if (parentDiv) {
                parentDiv.remove();


                var hotelList = document.getElementById("accommodationList");

                if (hotelList) {

                    var hotelElements = hotelList.querySelectorAll(".col-lg-3.col-md-6.wow.fadeInUp");

                    for (let index = 0; index < hotelElements.length; index++) {
                        var currentElement = hotelElements[index];
                        var currentVehiClass = Array.from(currentElement.classList).find(cls => cls.startsWith('hotel'));

                        if (currentVehiClass) {
                            currentElement.classList.remove(currentVehiClass);
                        }


                        currentElement.classList.add(`hotel${index + 1}`);

                        var pTag = currentElement.querySelector("p[id^='hid']");
                        if (pTag) {
                            pTag.id = `hid${index + 1}`;
                        }
                    }
                }

            } else {
                console.warn("Parent div not found for removal.");
            }
        }

        function removeVehicleCard(event) {
            var target = event.target;
            var parentDiv = target.closest('.col-lg-3.col-md-6.wow.fadeInUp');

            if (parentDiv) {
                parentDiv.remove();


                var VehicleList = document.getElementById("VehicleList");

                if (VehicleList) {

                    var vehiElements = VehicleList.querySelectorAll(".col-lg-3.col-md-6.wow.fadeInUp");

                    for (let index = 0; index < vehiElements.length; index++) {
                        var currentElement = vehiElements[index];
                        var currentVehiClass = Array.from(currentElement.classList).find(cls => cls.startsWith('vehi'));

                        if (currentVehiClass) {
                            currentElement.classList.remove(currentVehiClass);
                        }


                        currentElement.classList.add(`vehi${index + 1}`);
                    }
                }

            } else {
                console.warn("Parent div not found for removal.");
            }
        }

        var loc = '';
        var cnt = 0;

        function searchResults(event) {
            console.log(event.target.placeholder);

            const type = localStorage.getItem('type');
            var endpointUrl = `http://localhost:8000/getLocations/${event.target.value}`;
            if (event.target.placeholder === 'Location Name') {
                endpointUrl = `http://localhost:8000/getLocations/${event.target.value}`;
            } else if (event.target.placeholder === 'Vehicle Number') {
                endpointUrl = `http://localhost:8000/getVehicles/${event.target.value}`;
            } else if (event.target.placeholder === 'Hotel Name') {
                endpointUrl = `http://localhost:8000/getHotels/${event.target.value}`;
            } else if (event.target.placeholder === 'Guide Name') {
                endpointUrl = `http://localhost:8000/getGuides/${event.target.value}`;
            }


            if (event.target.value.length > 0) {
                $.ajax({
                    url: endpointUrl,
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {

                        if (response.success) {
                            var data = response.data;


                            for (ij = 0; ij < cnt; ij++) {
                                $(".r" + ij).empty();
                                $(".a" + ij).empty();
                                $(".b" + ij).empty();
                                $(".c" + ij).empty();
                            }
                            if (data.length > 0) {
                                for (i = 0; i < data.length; i++) {

                                    if (event.target.placeholder === 'Location Name') {
                                        $(".r" + i).html(
                                            "<div class='wow fadeInUp' onclick='addToList(event)' style='cursor: pointer;'><a><p>" +
                                            data[i].name + "</p></a></div>");
                                    } else if (event.target.placeholder === 'Vehicle Number') {

                                        $(".a" + i).html(
                                            "<div class='wow fadeInUp' onclick='addToVehicleList(event)' style='cursor: pointer;'><a><p>" +
                                            data[i].vehicle_no + "</p></a></div>");
                                    } else if (event.target.placeholder === 'Hotel Name') {
                                        $(".b" + i).html(
                                            "<div class='wow fadeInUp'  onclick='addHotels(event)' style='cursor: pointer;'><a><p>" +
                                            data[i].hotel_name + "</p></a></div>");
                                    } else if (event.target.placeholder === 'Guide Name') {
                                        $(".c" + i).html(
                                            "<div class='wow fadeInUp' onclick='addGuideCard(event)' style='cursor: pointer;'><a><p>" +
                                            data[i].guide_name + "</p></a></div>");

                                    }

                                }
                                cnt = i;
                                localStorage.setItem('cnt', cnt);
                            } else {

                                for (j = 0; j < cnt; j++) {
                                    $(".r" + j).empty();
                                    $(".a" + j).empty();
                                    $(".b" + j).empty();
                                    $(".c" + j).empty();
                                }
                                cnt = 1;
                                if (event.target.placeholder === 'Location Name') {
                                    $(".r" + 0).html("<div class='wow fadeInUp'><a><p>" +
                                        "no data found" + "</p></a></div>");
                                } else if (event.target.placeholder === 'Vehicle Number') {
                                    $(".a" + 0).html("<div class='wow fadeInUp'><a><p>" +
                                        "no data found" + "</p></a></div>");
                                } else if (event.target.placeholder === 'Hotel Name') {
                                    $(".b" + 0).html("<div class='wow fadeInUp'><a><p>" +
                                        "no data found" + "</p></a></div>");

                                } else if (event.target.placeholder === 'Guide Name') {
                                    $(".c" + 0).html("<div class='wow fadeInUp'><a><p>" +
                                        "no data found" + "</p></a></div>");
                                }

                            }


                        } else {

                            console.log('Error: ' + response.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {

                        alert('Failed to fetch data: ' + textStatus);
                    }
                });
            } else {
                for (j = 0; j < cnt; j++) {
                    $(".r" + j).empty();
                    $(".a" + j).empty();
                    $(".b" + j).empty();
                    $(".c" + j).empty();
                }
            }

        }

        //serch click result set
        function addToList(event) {

            const cnt = localStorage.getItem('cnt');
            for (let w = 0; w < cnt; w++) {
                $(".r" + w).empty();

            }
            var inputField = document.getElementById("locationSearch");

            if (inputField) {
                inputField.value = "";
                inputField.focus();
            }

            const clickedElement = event.target;
            const parentElement = $(clickedElement).closest('.wow');
            const name = parentElement.find('p').text();
            let content = "";

            const type = localStorage.getItem('type');
            var endpointUrl = `http://localhost:8000/getLocations/${name}`;
            if (event.target.placeholder === 'Location Name') {
                endpointUrl = `http://localhost:8000/getLocations/${name}`;
            } else if (event.target.placeholder === 'Vehicle Number') {
                endpointUrl = `http://localhost:8000/getVehicles/${name}`;
            } else if (event.target.placeholder === 'Hotel Name') {
                endpointUrl = `http://localhost:8000/getHotels/${name}`;
            } else if (event.target.placeholder === 'Guide Name') {
                endpointUrl = `http://localhost:8000/getGuides/${name}`;
            }

            $.ajax({
                url: endpointUrl,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {

                    if (response.success) {
                        var data = response.data;

                        if (data.length > 0) {
                            for (i = 0; i < data.length; i++) {

                                var columnElements = packageList.querySelectorAll(
                                    '.col-lg-2.col-md-6.wow.fadeInUp');
                                var columnCount = columnElements.length;


                                // if (columnElementsff === null) {} else {

                                // }

                                var packageListuda = document.getElementById('packageList');
                                var divElement = '';
                                if (packageListuda === null) {
                                    divElement = document.createElement('div');
                                    divElement.className = 'row g-2 mt-1 justify-content-center';
                                } else {
                                    var divCount = packageListuda.children.length;
                                    // if (columnCount % 6 === 0) {
                                    if (columnCount == 0) {
                                        content = "";
                                        divElement = document.createElement('div');
                                        divElement.className = 'row g-2 mt-1 justify-content-center';
                                    } else {
                                        divElement = packageList.querySelector(
                                            '.row.g-2.mt-1.justify-content-center');
                                    }

                                    // var divElement = document.createElement('div');
                                    // divElement.className = 'row g-2 mt-1 justify-content-center';

                                }


                                content += `
                                        <div class="col-lg-2 col-md-6 wow fadeInUp loc${columnCount+1}" data-wow-delay="0.2s">
                                                <div class="package-item">
                                                    <div class="overflow-hidden">
                                                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                                                    </div>

                                                    <div class="text-center p-2">
                                                        <h5 class="mb-0">${data[0].name}</h5>
                                                        <div class="mb-3">
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                        </div>
                                                        <p>${data[0].discription}</p>
                                                        <button class="rmv-btn " style=" margin-left: 30%;" onclick='removeLocCard(event)'>
                                                            <svg viewBox="0 0 448 512" class="svgIcon">
                                                                <path
                                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>


                                    `;


                                for (let index = 0; index < columnCount; index++) {
                                    // if (columnCount < 6) {
                                    var idx = index + 1;
                                    var columnElementsff = packageList.querySelector(
                                        `.col-lg-2.col-md-6.wow.fadeInUp.loc${idx}`);
                                    content += columnElementsff.outerHTML;
                                    // }
                                }
                                divElement.innerHTML = content;
                                document.getElementById('packageList').appendChild(divElement);

                            }


                        }


                    } else {

                        alert('Error: ' + response.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    alert('Failed to fetch data: ' + textStatus);
                }
            });



        }

        function addHotels(event) {

            const cnt = localStorage.getItem('cnt');
            for (let w = 0; w < cnt; w++) {
                $(".b" + w).empty();

            }
            var inputField = document.getElementById("accSearch");

            if (inputField) {
                inputField.value = "";
                inputField.focus();
            }

            const clickedElement = event.target;
            const parentElement = $(clickedElement).closest('.wow');
            const name = parentElement.find('p').text();
            let content = "";

            const type = localStorage.getItem('type');
            var endpointUrl = `http://localhost:8000/getHotels/${name}`;


            $.ajax({
                url: endpointUrl,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {

                    if (response.success) {
                        var data = response.data;

                        if (data.length > 0) {
                            for (i = 0; i < data.length; i++) {

                                var columnElements = accommodationList.querySelectorAll(
                                    '.col-lg-3.col-md-6.wow.fadeInUp');
                                var columnCount = columnElements.length;


                                // if (columnElementsff === null) {} else {

                                // }

                                var packageListuda = document.getElementById('accommodationList');
                                console.log(packageListuda);
                                var divElement = '';

                                if (packageListuda === null) {
                                    divElement = document.createElement('div');
                                    divElement.className = 'row g-2 mt-1 justify-content-center';
                                } else {
                                    var divCount = packageListuda.children.length;
                                    // if (columnCount % 6 === 0) {
                                    if (columnCount == 0) {
                                        content = "";
                                        divElement = document.createElement('div');
                                        divElement.className = 'row g-2 mt-1 justify-content-center';
                                    } else {
                                        divElement = accommodationList.querySelector(
                                            '.row.g-2.mt-1.justify-content-center');
                                    }

                                    // var divElement = document.createElement('div');
                                    // divElement.className = 'row g-2 mt-1 justify-content-center';

                                }


                                content += `
                                        <div class="col-lg-3 col-md-6 wow fadeInUp hotel${columnCount+1}" data-wow-delay="0.2s">
                                                <div class="package-item">
                                                    <div class="overflow-hidden">
                                                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                                                    </div>

                                                    <div class="text-center p-2">
                                                        <h4 class="mb-0">${data[0].hotel_name}</h4>
                                                        <div class="mb-3">
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                            <small class="fa fa-star text-primary"></small>
                                                        </div>
                                                        <p style="display:none" id="hid${columnCount+1}">${data[0].id}</p>
                                                        <p>${data[0].discription}</p>
                                                        <button class="rmv-btn " style=" margin-left: 40%;" onclick='removeHotelCard(event)'>
                                                            <svg viewBox="0 0 448 512" class="svgIcon">
                                                                <path
                                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                    `;


                                for (let index = 0; index < columnCount; index++) {
                                    // if (columnCount < 6) {
                                    var idx = index + 1;
                                    var columnElementsff = accommodationList.querySelector(
                                        `.col-lg-3.col-md-6.wow.fadeInUp.hotel${idx}`);

                                    content += columnElementsff.outerHTML;
                                    // }
                                }
                                divElement.innerHTML = content;
                                document.getElementById('accommodationList').appendChild(divElement);

                            }


                        }


                    } else {

                        alert('Error: ' + response.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    alert('Failed to fetch data: ' + textStatus);
                }
            });



        }

        function addGuideCard(event) {

            const cnt = localStorage.getItem('cnt');
            for (let w = 0; w < cnt; w++) {
                $(".c" + w).empty();

            }
            var inputField = document.getElementById("guideSrch");

            if (inputField) {
                inputField.value = "";
                inputField.focus();
            }

            const clickedElement = event.target;
            const parentElement = $(clickedElement).closest('.wow');
            const name = parentElement.find('p').text();
            let content = "";

            const type = localStorage.getItem('type');
            endpointUrl = `http://localhost:8000/getGuides/${name}`;


            $.ajax({
                url: endpointUrl,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {

                    if (response.success) {
                        var data = response.data;

                        if (data.length > 0) {
                            for (i = 0; i < data.length; i++) {

                                var columnElements = translatorsList.querySelectorAll(
                                    '.col-lg-3.col-md-6.wow.fadeInUp');
                                var columnCount = columnElements.length;


                                // if (columnElementsff === null) {} else {

                                // }

                                var packageListuda = document.getElementById('translatorsList');
                                console.log(packageListuda);
                                var divElement = '';

                                if (packageListuda === null) {
                                    divElement = document.createElement('div');
                                    divElement.className = 'row g-2 mt-1 justify-content-center';
                                } else {
                                    var divCount = packageListuda.children.length;
                                    // if (columnCount % 6 === 0) {
                                    if (columnCount == 0) {
                                        content = "";
                                        divElement = document.createElement('div');
                                        divElement.className = 'row g-2 mt-1 justify-content-center';
                                    } else {
                                        divElement = translatorsList.querySelector(
                                            '.row.g-2.mt-1.justify-content-center');
                                    }

                                    // var divElement = document.createElement('div');
                                    // divElement.className = 'row g-2 mt-1 justify-content-center';

                                }
                                console.log(columnCount);

                                content += `
                                    <div class="col-lg-3 col-md-6 wow fadeInUp guide${columnCount+1}" data-wow-delay="0.2s">
                                    <div class="package-item">
                                        <div class="overflow-hidden">
                                            <img class="img-fluid" src="img/package-1.jpg" alt="">
                                        </div>

                                        <div class="text-center p-2">
                                            <h4 class="mb-0">${data[0].guide_name}</h4>
                                            <div class="mb-3">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                            <p style="display:none" id="gid${columnCount+1}">${data[0].id}</p>
                                            <p>${data[0].discription}</p>
                                            <button class="rmv-btn " style=" margin-left: 40%;" onclick='removeGuideCard(event)'>
                                                <svg viewBox="0 0 448 512" class="svgIcon">
                                                    <path
                                                        d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    </div>

                                    `;


                                for (let index = 0; index < columnCount; index++) {
                                    // if (columnCount < 6) {
                                    var idx = index + 1;
                                    var columnElementsff = translatorsList.querySelector(
                                        `.col-lg-3.col-md-6.wow.fadeInUp.guide${idx}`);
                                    content += columnElementsff.outerHTML;
                                    // }
                                }
                                divElement.innerHTML = content;
                                document.getElementById('translatorsList').appendChild(divElement);

                            }


                        }


                    } else {

                        alert('Error: ' + response.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    alert('Failed to fetch data: ' + textStatus);
                }
            });



        }


        //vehicle search click result set
        function addToVehicleList(event) {
            const cnt = localStorage.getItem('cnt');
            for (let w = 0; w < cnt; w++) {
                $(".a" + w).empty();

            }
            var inputField = document.getElementById("vehicSrh");

            if (inputField) {
                inputField.value = "";
                inputField.focus();
            }

            const clickedElement = event.target;
            const parentElement = $(clickedElement).closest('.wow');
            const name = parentElement.find('p').text();
            let content = "";

            const type = localStorage.getItem('type');
            var endpointUrl = `http://localhost:8000/getVehicles/${name}`;


            $.ajax({
                url: endpointUrl,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {

                    if (response.success) {
                        var data = response.data;

                        if (data.length > 0) {
                            for (i = 0; i < data.length; i++) {

                                var columnElements = VehicleList.querySelectorAll(
                                    '.col-lg-3.col-md-6.wow.fadeInUp');
                                var columnCount = columnElements.length;



                                // if (columnElementsff === null) {} else {
                                // for (let index = 0; index < columnCount; index++) {
                                //     // if (columnCount < 6) {
                                //     var idx = index + 1;
                                //     var columnElementsff = VehicleList.querySelector(
                                //         `.col-lg-3.col-md-6.wow.fadeInUp.vehi${idx}`);
                                //     content += columnElementsff.outerHTML;
                                //     // }
                                // }

                                // }

                                var packageListuda = document.getElementById('VehicleList');
                                var divElement = '';
                                if (packageListuda === null) {
                                    divElement = document.createElement('div');
                                    divElement.className = 'row g-2 mt-1 justify-content-center';
                                } else {
                                    var divCount = packageListuda.children.length;
                                    // if (columnCount % 6 === 0) {
                                    if (columnCount == 0) {
                                        content = "";
                                        divElement = document.createElement('div');
                                        divElement.className = 'row g-2 mt-1 justify-content-center';
                                    } else {
                                        divElement = VehicleList.querySelector(
                                            '.row.g-2.mt-1.justify-content-center');
                                    }

                                    // var divElement = document.createElement('div');
                                    // divElement.className = 'row g-2 mt-1 justify-content-center';

                                }
                                console.log("--- " + columnCount);

                                content += `
                <div class="col-lg-3 col-md-6 wow fadeInUp vehi${columnCount+1}" data-wow-delay="0.2s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-1.jpg" alt="">
                            </div>

                            <div class="text-center p-2">
                                <h4 class="mb-0" style="display:none;">${data[0].vehicle_no}</h4>
                                <h4 class="mb-0">${data[0].model}</h4>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p>${data[0].discription}</p>
                                <button class="rmv-btn " style=" margin-left: 40%;" onclick='removeVehicleCard(event)'>
                                    <svg viewBox="0 0 448 512" class="svgIcon">
                                        <path
                                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>

        `;

                                for (let index = 0; index < columnCount; index++) {
                                    // if (columnCount < 6) {
                                    var idx = index + 1;
                                    var columnElementsff = VehicleList.querySelector(
                                        `.col-lg-3.col-md-6.wow.fadeInUp.vehi${idx}`);
                                    content += columnElementsff.outerHTML;
                                    // }
                                }

                                divElement.innerHTML = content;
                                document.getElementById('VehicleList').appendChild(divElement);

                            }


                        }


                    } else {

                        alert('Error: ' + response.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    alert('Failed to fetch data: ' + textStatus);
                }
            });



        }

        function submitPackage() {

            // create final package
            var locIds = [];
            var hotelsIds = [];
            var vehicleNo = [];
            var guidsIds = [];

            var columnElementsLoc = packageList.querySelectorAll(
                '.col-lg-2.col-md-6.wow.fadeInUp');
            var locColumnCount = columnElementsLoc.length;


            var columnElementsVehi = VehicleList.querySelectorAll(
                '.col-lg-3.col-md-6.wow.fadeInUp');
            var vehiColumnCount = columnElementsVehi.length;


            var columnElementsAcc = accommodationList.querySelectorAll(
                '.col-lg-3.col-md-6.wow.fadeInUp');
            var accColumnCount = columnElementsAcc.length;


            var columnElementsTrans = translatorsList.querySelectorAll(
                '.col-lg-3.col-md-6.wow.fadeInUp');
            var TransColumnCount = columnElementsTrans.length;


            //for get location ids
            for (let i = 1; i <= locColumnCount; i++) {
                var columnElementsLoc = packageList.querySelector(
                    `.col-lg-2.col-md-6.wow.fadeInUp.loc${i}`);

                var h4Element = columnElementsLoc.querySelector("h4.mb-0");

                if (h4Element) {
                    var name = h4Element.textContent;
                    locIds.push(name);
                }


            }

            //for get Hotel name
            for (let i = 1; i <= accColumnCount; i++) {
                var columnElementsHtl = accommodationList.querySelector(
                    `.col-lg-3.col-md-6.wow.fadeInUp.hotel${i}`);

                var htlElement = columnElementsHtl.querySelector(`p#hid${i}`);
                if (htlElement) {
                    hotelsIds.push(htlElement.textContent);
                }
            }

            //for get vehicle no
            for (let i = 1; i <= vehiColumnCount; i++) {
                var columnElementsLoc = VehicleList.querySelector(
                    `.col-lg-3.col-md-6.wow.fadeInUp.vehi${i}`);

                var h4Element = columnElementsLoc.querySelector("h4.mb-0");

                if (h4Element) {
                    var no = h4Element.textContent;
                    vehicleNo.push(no);
                }
            }

            //for get guide ids
            for (let i = 1; i <= TransColumnCount; i++) {
                var columnElementsff = translatorsList.querySelector(
                    `.col-lg-3.col-md-6.wow.fadeInUp.guide${i}`);

                var gidElement = columnElementsff.querySelector(`p#gid${i}`);

                if (gidElement) {
                    console.log(gidElement.textContent);
                    guidsIds.push(gidElement.textContent);
                }


            }
            console.log(TransColumnCount);

            var packageData = {
                packageId: {{ $packageId }},
                packageName: "Test",
                agancy: localStorage.getItem('user'),
                discription: "--",
                chkAirportPick: document.getElementById("chkAirportPick").checked ? 1 : 0,
                chkAirportDrop: document.getElementById("chkAirportDrop").checked ? 1 : 0,
                chkTourGuide: document.getElementById("chkTourGuide").checked ? 1 : 0,
                ultimateService: document.getElementById("ultimateService").checked ? 1 : 0,
                personCount: 6,
                dateCount: 6,
                gidSet: guidsIds,
                vehicleNo: vehicleNo,
                hotelsIds: hotelsIds,
                locIds: locIds,
                price: 0,
                reviews: ''
            };

            $.ajax({
                url: '{{ route('package.book') }}',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: packageData,
                success: function(response) {
                    alert(response.message);

                    var bookingUrl = `/package`;

                    window.location.href = bookingUrl;

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Failed to create Package: ' + textStatus);
                }
            });



        }
    </script>
</body>

</html>
