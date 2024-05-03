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

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/filters.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datePicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/delete.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/imageUploader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/location-uploade.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add-vehicle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search-btn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add-package.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin-panel.css') }}">

    <style>
        /*-=-=-=-=-=-=-=-=-=-=-=- */
        /* Column Grids */
        /*-=-=-=-=-=-=-=-=-=-=-=- */

        .col_half {
            width: 49%;
        }

        .col_third {
            width: 32%;
        }

        .col_fourth {
            width: 23.5%;
        }

        .col_fifth {
            width: 18.4%;
        }

        .col_sixth {
            width: 15%;
        }

        .col_three_fourth {
            width: 74.5%;
        }

        .col_twothird {
            width: 66%;
        }

        .col_half,
        .col_third,
        .col_twothird,
        .col_fourth,
        .col_three_fourth,
        .col_fifth {
            position: relative;
            display: inline;
            display: inline-block;
            float: left;
            margin-right: 2%;
            margin-bottom: 20px;
        }

        .end {
            margin-right: 0 !important;
        }

        /* Column Grids End */

        .wrapper {
            width: 980px;
            margin: 30px auto;
            position: relative;
        }

        .counterDiv {
            background-color: #ffffff;
            padding: 20px 0;
            border-radius: 5px;
            height: 25vh;
        }

        .count-title {
            font-size: 40px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .count-text {
            font-size: 13px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .fa-2x {
            margin: 0 auto;
            float: none;
            display: table;
            color: #4ad1e5;
        }

        .spinnerPerson {
            width: 60px;
            margin-left: 5vw;
        }

        .spinnerPerson input {
            text-align: right;
        }

        .spinner {
            width: 60px;
            margin-left: 5vw;
        }

        .spinner input {
            text-align: right;
        }

        .input-group-btn-vertical {
            position: relative;
            white-space: nowrap;
            width: 1%;
            vertical-align: middle;
            display: table-cell;
        }

        .input-group-btn-vertical>.btn {
            display: block;
            float: none;
            width: 100%;
            max-width: 100%;
            padding: 8px;
            margin-left: -1px;
            position: relative;
            border-radius: 0;
        }

        .input-group-btn-vertical>.btn:first-child {
            border-top-right-radius: 4px;
        }

        .input-group-btn-vertical>.btn:last-child {
            margin-top: -2px;
            border-bottom-right-radius: 4px;
        }

        .input-group-btn-vertical i {
            position: absolute;
            top: 0;
            left: 4px;
        }
    </style>
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
    <div class="container-fluid position-relative p-0">
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
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="./view/about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="/createdPackage" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Create
                            Package</a>
                        <div class="dropdown-menu m-0 text-center">
                            <a href="/create-package" class="dropdown-item">Complete Package</a>
                            <a href="/vehicle-package" class="dropdown-item">Vehicle</a>
                            <a href="/guide-package" class="dropdown-item">Guides</a>
                            <a href="/hotel-package" class="dropdown-item">hotel</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>

                {{-- notifications --}}
                <div class="notification">
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
                <a href="" class="btn btn-primary rounded-pill py-2 px-4">User Portal</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">


                        <div class="wrapper">
                            <div class="counterDiv col_fourth">
                                <i class="fa fa-code fa-2x"></i>
                                <h2 class="timer count-title count-number" data-to="300" data-speed="1500"></h2>
                                <p class="count-text ">Total Published Packages</p>
                            </div>

                            <div class="counterDiv col_fourth">
                                <i class="fa fa-coffee fa-2x"></i>
                                <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                                <p class="count-text ">Totol Package Buy</p>
                            </div>

                            <div class="counterDiv col_fourth">
                                <i class="fa fa-lightbulb-o fa-2x"></i>
                                <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                                <p class="count-text ">Pending Requestes</p>
                            </div>

                            <div class="counterDiv col_fourth end">
                                <i class="fa fa-bug fa-2x"></i>
                                <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
                                <p class="count-text ">SomeText GoesHere</p>
                            </div>
                        </div>
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
                                <input type="checkbox" id="chkTourGuide" class="inp-cbx" />
                                <label for="chkTourGuide" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Free Tour Guide</span>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="ultimateService" class="inp-cbx" />
                                <label for="ultimateService" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">24/7 Service</span>
                                </label>
                            </div>
                            <h5>Persons Count : </h5>
                            <div class="container">

                                <div class="input-group spinnerPerson">
                                    <input id="personCount" type="text" class="form-control" value="1">
                                    <div class="input-group-btn-vertical">
                                        <button class="btn btn-default" type="button"
                                            onclick="incrementPersons()"><i class="fa fa-caret-up"></i></button>
                                        <button class="btn btn-default" type="button"
                                            onclick="decrementPersons()"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                </div>
                            </div>

                            <h5>Date Count : </h5>
                            <div class="container">

                                <div class="input-group spinner">
                                    <input id="dateCount" type="text" class="form-control" value="1">
                                    <div class="input-group-btn-vertical">
                                        <button class="btn btn-default" type="button" onclick="incrementDt()"><i
                                                class="fa fa-caret-up"></i></button>
                                        <button class="btn btn-default" type="button" onclick="decrementDt()"><i
                                                class="fa fa-caret-down"></i></button>
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
                    <div class="row justify-content-center py-5" id="cont-row">
                        <div class="col-lg-12  text-center" id="cont-col">
                            <h3>D & W Tours</h3>
                        </div>
                    </div>
                    <button onclick="getGuides()">click</button>
                    <h3 class="text-center m-1">- Pending Packages -</h3>
                    <div class="row justify-content-center mt-3" id="tblPending">
                        <div class="col-lg-3  text-center cont-col">
                            <h5>Package Name</h5>
                        </div>
                        <div class="col-lg-2  text-center cont-col">
                            <h5>Date Range</h5>
                        </div>
                        <div class="col-lg-3  text-center cont-col">
                            <h5>Customer name</h5>
                        </div>
                        <div class="col-lg-1  text-center cont-col">
                            <h5>count</h5>
                        </div>
                        <div class="col-lg-1  text-center cont-col">
                            <h5>cust</h5>
                        </div>
                        <div class="col-lg-2  text-center cont-col">
                            <h5>Action</h5>
                        </div>
                    </div>
                    <div id="tblPendingdata">
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
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
                        <h1 class="text-white mb-4">Book A Tour</h1>
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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
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

            var logged = localStorage.getItem('user');
            if (!logged) {
                window.location.href = `/signup`;
            }
        });

        function isNullOrEmpty(value) {
            return value === null || value === undefined || value.trim() === '';
        }

        function getGuides() {



            for (var i = 0; i < 6; i++) {
                var divElement = document.createElement('div');
                divElement.className = 'row justify-content-center text-center mt-3';
                divElement.setAttribute('data-wow-delay', '0.1s');

                divElement.innerHTML = `
                         <div class="row justify-content-center text-center mt-3">
                            <div class="col-lg-3  text-center cont-col">
                                <h6>New Car Package</h6>
                            </div>
                            <div class="col-lg-2  text-center cont-coldt">
                                <h6>2024-03-31</h6>
                                <h6>2024-04-20</h6>
                            </div>
                            <div class="col-lg-3  text-center cont-col">
                                <h6>Janidu Ayeshan</h6>
                            </div>
                            <div class="col-lg-1  text-center cont-col">
                                <h6>6</h6>
                            </div>
                            <div class="col-lg-1  text-center cont-col">
                                <h6>True</h6>
                            </div>
                            <div class="col-lg-2  text-center cont-col">
                                <div class="row justify-content-center ">
                                    <div class="col-lg-12  text-center cont-col">

                                        <button onclick="seeMore(event)">See More</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12  text-center cont-col">
                                        <button onclick="startChat(event)">chat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            `;

                document.getElementById('tblPendingdata').appendChild(divElement);
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
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
</body>

</html>
