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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/logout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/notification.css') }}">


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
                    <a class="nav-item nav-link active" onclick="homeClick()" id="homeTab">Home</a>
                    <a class="nav-item nav-link" onclick="aboutClick()" id="aboutTab">About</a>
                    <a class="nav-item nav-link" onclick="servicesClick()" id="servicesTab">Services</a>
                    <a class="nav-item nav-link" onclick="locationsClick()" id="locationTab">Locations</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Packages</a>
                        <div class="dropdown-menu m-0 text-center">
                            <a href="/package?type=complete" class="dropdown-item">Complete Packages</a>
                            <a href="/package?type=vehicle" class="dropdown-item">Vehicle Packages</a>
                            <a href="/package?type=guide" class="dropdown-item">Guides Packages</a>
                            <a href="/package?type=hotel" class="dropdown-item">hotel Packages</a>
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
                                <li class="unread"><img src="https://i.pravatar.cc/40?img=8"><strong>Tene</strong>
                                    added your Pen <a href="#">404 Error Room</a> to their Collection</li>
                            </ul>
                        </div>
                    </div>
                    {{-- notifications end --}}
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="/provider-home" style="margin-right: 15px"
                    class="btn btn-primary rounded-pill py-2 px-4">User
                    Portal</a>
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
                        <h1 class="display-3 text-white animated slideInDown">Packages</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <div class="position-relative w-75 mx-auto animated slideInDown">
        <input class="form-control border-2 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
            placeholder="Place to go, things to do, hotels... ">
        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
            style="margin-top: 7px;">Search</button>
    </div>


    <section class="grid-demo">

        <div class="controls cf">

            <div class="control filter">
                <div class="control-icon">
                    <i class="material-icons">&#xE152;</i>
                </div>
                <div class="select-arrow">
                    <i class="material-icons">&#xE313;</i>
                </div>
                <select class="control-field filter-field form-control" id="pkgFilter" onchange="filterAdd()">
                    <option value="ALL" selected>ALL</option>
                    <option value="COMPLETE">Packages</option>
                    <option value="VEHICLE">Hire a vehicle</option>
                    <option value="HOTEL">Hotels</option>
                    <option value="GUIDE">Guides</option>
                </select>
            </div>
            <div class="control sort">
                <div class="control-icon">
                    <i class="material-icons">&#xE164;</i>
                </div>
                <div class="select-arrow">
                    <i class="material-icons">&#xE313;</i>
                </div>
                <select class="control-field sort-field form-control">
                    <option value="order" selected>Drag</option>
                    <option value="title">Title (drag disabled)</option>
                    <option value="color">Color (drag disabled)</option>
                </select>
            </div>
            <div class="control layout">
                <div class="control-icon">
                    <i class="material-icons">&#xE871;</i>
                </div>
                <div class="select-arrow">
                    <i class="material-icons">&#xE313;</i>
                </div>
                <select class="control-field layout-field form-control">
                    <option value="left-top" selected>Left Top</option>
                    <option value="left-top-fillgaps">Left Top (fill gaps)</option>
                    <option value="right-top">Right Top</option>
                    <option value="right-top-fillgaps">Right Top (fill gaps)</option>
                    <option value="left-bottom">Left Bottom</option>
                    <option value="left-bottom-fillgaps">Left Bottom (fill gaps)</option>
                    <option value="right-bottom">Right Bottom</option>
                    <option value="right-bottom-fillgaps">Right Bottom (fill gaps)</option>
                </select>
            </div>
            <div class="control layout">
                <div class="control-icon">
                    <i class="material-icons">&#xE871;</i>
                </div>
                <div class="select-arrow">
                    <i class="material-icons">&#xE313;</i>
                </div>
                <select class="control-field layout-field form-control">
                    <option value="left-top" selected>Left Top</option>
                    <option value="left-top-fillgaps">Left Top (fill gaps)</option>
                    <option value="right-top">Right Top</option>
                    <option value="right-top-fillgaps">Right Top (fill gaps)</option>
                    <option value="left-bottom">Left Bottom</option>
                    <option value="left-bottom-fillgaps">Left Bottom (fill gaps)</option>
                    <option value="right-bottom">Right Bottom</option>
                    <option value="right-bottom-fillgaps">Right Bottom (fill gaps)</option>
                </select>
            </div>
        </div>

    </section>

    {{-- <div style="background-color: red; height-20px; width:10px">
        <h1 style="display:none">.</h1>
    </div> --}}

    <div id="overlay" style="display: none;">
        <div id="overlay-content">
            <div id="clsbtn">
                <button type="button" class="btn-close" onclick="closeDetail()">
                    <span class="icon-cross"></span>
                    <span class="visually-hidden">Close</span>
                </button>
            </div>

            <H3 class="text-center ">D & W Touers</H3>
            <div style="height: 25px; width : 100%; color:black">
                <div class="row " style="position: fixed;">
                    <div class="col-lg-3 ">
                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6" style=" width : 70%">
                        <p id="packageDisc"></p>
                        <div style="margin-left: 60px;margin-right:60px">
                            <div class="row ">
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Airport
                                        pickup
                                        and drop
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked
                                        Hotels
                                    </p>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>16-30 days
                                        complete package
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Free Language
                                        Translators
                                    </p>
                                </div>
                            </div>


                            <div class="row ">
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>
                                        Fully Luxary Vehicles</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7
                                        Service</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- locations --}}
                    <h3 class="text-center mt-3 ">Locations To See</h3>
                    <div style="margin-left: 8% ;margin-right:3%">
                        <div class="row " id="locationsList" style="width:72vw">


                        </div>

                        {{-- <div class="row ">
                            <div class="col-sm-4">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>16-30 days
                                    complete package
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Free Language
                                    Translators
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Free Language
                                    Translators
                                </p>
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-sm-4">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>
                                    Fully Luxary Vehicles</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7
                                    Service</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7
                                    Service</p>
                            </div>

                        </div> --}}

                    </div>
                    <div class="mt-3 ml-2 mr-3 mb-0" style="height: 50px; width :95%;">
                        <p class="mb-0" id="innerPdescrip"> he he We are thrilled to present our carefully curated
                            travel packages, taking
                            you to
                            some of the most
                            enchanting locations in Sri Lanka. Whether you're seeking a peaceful escape, a vibrant city
                            adventure, or a serene beach retreat, we have a package that's perfect for you.

                            If you're interested, simply press the "Book Now" button to reserve your spot and start
                            planning
                            your trip to explore the beauty of Sri Lanka. With just a few clicks, you can be on your way
                            to
                            discovering the unique charm this island has to offer.</p>


                        <h2 class="text-center mt-3" id="insidePriceH2">only for : $189.00</h2>
                        {{-- <button href="#" class="btn btn-sm btn-primary px-5 py-3"
                            style="border-radius: 0 30px 30px 0;">Book Now</button> --}}
                        <div style=" width:100%; display: flex; justify-content: flex-end;">
                            <a style="--clr: #7808d0" class="button mt-3" href="#">
                                <span class="button__icon-wrapper">
                                    <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 15">
                                        <path fill="currentColor"
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z">
                                        </path>
                                    </svg>

                                    <svg class="button__icon-svg  button__icon-svg--copy"
                                        xmlns="http://www.w3.org/2000/svg" width="10" fill="none"
                                        viewBox="0 0 14 15">
                                        <path fill="currentColor"
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z">
                                        </path>
                                    </svg>
                                </span>
                                Book Now
                            </a>
                        </div>



                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- Package start -->
    <div class="container-xxl py-5 " style="margin-top: 16vh">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div id="packageList">

            </div>
        </div>
    </div>
    <!-- Package End -->

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const currentUrl = window.location.href;
            const url = new URL(currentUrl);
            const type = url.searchParams.get('type');
            if (type === null) {
                document.getElementById("pkgFilter").value = 'ALL';
                getPackages('ALL');
            } else {
                document.getElementById("pkgFilter").value = type.toUpperCase();
                getPackages(type);
            }

        });

        function getPackageImgs(pkgId) {
            return new Promise((resolve, reject) => {

                endpointUrl = `/getImages/${pkgId}`;
                $.ajax({
                    url: endpointUrl,
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {

                        if (response.success) {
                            if (response.data[0] == undefined) {
                                reject('');
                            } else {
                                resolve(response.data[0].image_path);
                            }
                        } else {

                            console.log('Error: ' + response.message);
                            reject('');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {

                        alert('Failed to fetch data: ' + textStatus);
                        reject('');
                    }
                });
            });
        }

        // async function getPackageImgs(pkgId) {

        //     endpointUrl = `/getImages/${pkgId}`;
        //     $.ajax({
        //         url: endpointUrl,
        //         method: 'GET',
        //         headers: {
        //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //         },
        //         success: function(response) {

        //             if (response.success) {
        //                 return response.data[0].image_path;
        //             } else {

        //                 console.log('Error: ' + response.message);
        //                 return '';
        //             }
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {

        //             alert('Failed to fetch data: ' + textStatus);
        //             return '';
        //         }
        //     });

        // }


        function getPackages(filter) {

            if (filter === 'ALL') {

                $.ajax({
                    url: '{{ route('package.all') }}',
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: async function(response) {

                        if (response.success) {
                            var divElement = document.createElement('div');
                            divElement.className = 'row g-2 mt-1 justify-content-center';
                            let content = "";

                            for (let i = 0; i < response.data.length; i++) {

                                var url;
                                try {
                                    url = await getPackageImgs(response.data[i].id);
                                } catch (error) {
                                    url = 'img/package-1.jpg';
                                    // console.error(error);
                                }

                                content += `
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="package-item">
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="${url}" alt="">
                                            </div>
                                            <div class="d-flex border-bottom">
                                                <small class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-map-marker-alt text-primary me-2"></i>Airport Pickup</small>
                                                <small class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>${response.data[i].day_count} days</small>
                                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>${response.data[i].person_count}
                                                    Person</small>
                                            </div>
                                            <div class="text-center p-4">
                                                <h3 class="mb-0">$${response.data[i].price}</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                </div>
                                                <h4 class="travelAgancyName">${response.data[i].package_name}</h4>
                                                    <p class="coverAreas">D&W Travels</p>
                                                    <div class="d-flex justify-content-center mb-2">
                                                        <button id="seeMoreBtn${i}" class="btn btn-sm btn-primary px-3 border-end"
                                                            style="border-radius: 30px 0 0 30px;" onclick="seeMore(${response.data[i].id})">Read More</button>
                                                        <a href="/booking?id=${response.data[i].id}" class="btn btn-sm btn-primary px-3"
                                                            style="border-radius: 0 30px 30px 0;">Book Now</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                        `;

                            }

                            divElement.innerHTML = content;
                            document.getElementById('packageList').appendChild(divElement);


                        } else {

                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {

                        alert('Failed to fetch data: ' + textStatus);
                    }
                });
            } else {

                var filter = {
                    type: filter
                };

                $.ajax({
                    url: '{{ route('package.filter') }}',
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: filter,
                    success: async function(response) {

                        if (response.success) {
                            var divElement = document.createElement('div');
                            divElement.className = 'row g-2 mt-1 justify-content-center';
                            let content = "";

                            for (let i = 0; i < response.data.length; i++) {

                                var url;
                                try {
                                    url = await getPackageImgs(response.data[i].id);
                                } catch (error) {
                                    url = 'img/package-1.jpg';
                                    // console.error(error);
                                }
                                content += `
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="package-item">
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="${url}" alt="">
                                            </div>
                                            <div class="d-flex border-bottom">
                                                <small class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-map-marker-alt text-primary me-2"></i>Airport Pickup</small>
                                                <small class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>${response.data[i].day_count} days</small>
                                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>${response.data[i].person_count}
                                                    Person</small>
                                            </div>
                                            <div class="text-center p-4">
                                                <h3 class="mb-0">$${response.data[i].price}</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                </div>
                                                <h4 class="travelAgancyName">${response.data[i].package_name}</h4>
                                                    <p class="coverAreas">D&W Travels</p>
                                                    <div class="d-flex justify-content-center mb-2">
                                                        <button id="seeMoreBtn${i}" class="btn btn-sm btn-primary px-3 border-end"
                                                            style="border-radius: 30px 0 0 30px;" onclick="seeMore(${response.data[i].id})">Read More</button>
                                                        <a href="/booking?id=${response.data[i].id}" class="btn btn-sm btn-primary px-3"
                                                            style="border-radius: 0 30px 30px 0;">Book Now</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                        `;

                            }

                            divElement.innerHTML = content;
                            document.getElementById('packageList').appendChild(divElement);


                        } else {

                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {

                        alert('Failed to fetch data: ' + textStatus);
                    }
                });
            }


        }


        var overlay = document.getElementById('overlay');
        var isOverlayVisible = 0;
        var seeMoreClicked = false;


        function closeDetail() {

            if (overlay.style.display !== 'none') {
                overlay.style.display = 'none';
            }

        }

        function seeMore(clickedData) {
            endpointUrl = `http://localhost:8000/getPackage/${clickedData}`;

            $.ajax({
                url: endpointUrl,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    let content = "";
                    if (response.success) {
                        console.log(response.data.discription);
                        document.getElementById("packageDisc").textContent = response.data.discription;
                        document.getElementById("insidePriceH2").textContent = "only for : $" + response.data
                            .price;

                        getLocUrl = `http://localhost:8000/getLocationsByPackage/${clickedData}`;

                        $.ajax({
                            url: getLocUrl,
                            method: 'GET',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                var divElement = document.querySelector("#locationsList");
                                if (response.success) {
                                    for (let i = 0; i < response.data.length; i++) {
                                        content += `
                                            <div class="col-sm-4">
                                                <i class="fa-solid fa-location-dot"></i>
                                                <h5 class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>${response.data[i]}
                                                </h5>
                                            </div>

                                    `;

                                    }


                                    divElement.innerHTML = content;
                                    document.getElementById('locationsList').appendChild(
                                        divElement);
                                } else {

                                    alert('Error: ' + response.message);
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {

                                alert('Failed to fetch data: ' + textStatus);
                            }
                        });


                        getLocUrl = `http://localhost:8000/getAgancyDetails/${response.data.agancy_id}`;

                        $.ajax({
                            url: getLocUrl,
                            method: 'GET',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                var divElement = document.querySelector("#locationsList");
                                if (response.success) {
                                    document.getElementById("innerPdescrip").textContent = response
                                        .data.discription;

                                } else {

                                    alert('Error: ' + response.message);
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {

                                alert('Failed to fetch data: ' + textStatus);
                            }
                        });

                    } else {

                        alert('Error: ' + response.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    alert('Failed to fetch data: ' + textStatus);
                }
            });


            var overlay = document.getElementById('overlay');
            overlay.style.display = overlay.style.display === 'none' ? 'block' : 'none';
            seeMoreClicked = true;

        }

        function filterAdd() {
            document.getElementById('packageList').innerHTML = '';
            var selected = document.getElementById("pkgFilter").value;

            getPackages(selected);
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
            window.location.href = `/#aboutUs`;
            setActive('aboutTab');
        }

        function homeClick() {
            window.location.href = `/#home`;
            setActive('homeTab');
        }

        function servicesClick() {
            window.location.href = `/#serviceDv`;
            setActive('servicesTab');
        }

        function locationsClick() {
            window.location.href = `/#aboutUs`;
            setActive('locationTab');
        }

        function contactClick() {
            window.location.href = `/#contactUs`;
            setActive('contactTab');
        }

        function setActive(tabId) {
            const tabs = document.querySelectorAll('.nav-item');

            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            document.getElementById(tabId).classList.add('active');
        }
    </script>
</body>

</html>
