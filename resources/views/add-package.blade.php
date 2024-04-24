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
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/filters.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datePicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/delete.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/imageUploader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/location-uploade.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add-vehicle.css') }}">

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
                    <a href="index.html" class="nav-item nav-link">Home</a>
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
                                <input type="checkbox" id="cbx-46" class="inp-cbx" />
                                <label for="cbx-46" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Airport Pickup</span>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="cbx-48" class="inp-cbx" />
                                <label for="cbx-48" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Airport Drop</span>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="cbx-49" class="inp-cbx" />
                                <label for="cbx-49" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Up to 6 Persons</span>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-46 mb-2">
                                <input type="checkbox" id="cbx-50" class="inp-cbx" />
                                <label for="cbx-50" class="cbx"><span>
                                        <svg viewBox="0 0 12 10" height="10px" width="12px">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span class="checkboxTxt">Airport Pickup</span>
                                </label>
                            </div>
                            <div id="date-picker-title">
                                <h4> Select your dates </h4>
                            </div>

                            <p> Click on a date to open the date picker. </p>

                            <div id="date-picker-dates">
                                <div id="date-picker-date-first" class="date-picker-date">
                                    24/12/2017
                                </div>
                                <div class="date-picker-date">
                                    28/12/2017
                                </div>
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
                        <h3 class="m-0 mt-2">D & W Touers</h3>
                        <h4 class="mt-3">Create New Package</h4>
                        <h5 class="mt-4">Add some breif discription about your package</h5>
                        <div class="form-group">
                            <textarea class="form-control" id="packageBreifDiscription" rows="3" style=" border-color: rgb(157, 156, 156)"
                                placeholder="Enter a brief description..."></textarea>
                        </div>
                        <h4 class="mt-5">Add Main Images Here</h4>

                        <div class="row g-3">
                            <div class="col-lg-7 col-md-6">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                        <div id="file-upload-form" class="uploader">
                                            <input id="file-upload" type="file" name="fileUpload"
                                                accept="image/*" />

                                            <label for="file-upload" id="file-drag">
                                                <img id="file-image" src="#" alt="Preview"
                                                    class="hidden file-image">
                                                <div id="start">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                    <div>Select a file or drag here</div>
                                                    <div id="notimage" class="hidden">Please select an image</div>
                                                    <span id="file-upload-btn" class="btn btn-primary">Select a
                                                        file</span>
                                                </div>
                                                <div id="response" class="hidden">
                                                    <div id="messages"></div>
                                                    <progress class="progress" id="file-progress" value="0">
                                                        <span>0</span>%
                                                    </progress>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                        <div id="file-upload-form-2" class="uploader">
                                            <input id="file-upload-2" type="file" name="fileUpload"
                                                accept="image/*" />

                                            <label for="file-upload-2" id="file-drag-2">
                                                <img id="file-image-2" src="#" alt="Preview"
                                                    class="hidden file-image">
                                                <div id="start-2">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                    <div>Select a file or drag here</div>
                                                    <div id="notimage-2" class="hidden">Please select an image</div>
                                                    <span id="file-upload-btn-2" class="btn btn-primary">Select a
                                                        file</span>
                                                </div>
                                                <div id="response-2" class="hidden">
                                                    <div id="messages-2"></div>
                                                    <progress class="progress" id="file-progress-2" value="0">
                                                        <span>0</span>%
                                                    </progress>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                        <div id="file-upload-form-3" class="uploader">
                                            <input id="file-upload-3" type="file" name="fileUpload"
                                                accept="image/*" />

                                            <label for="file-upload-3" id="file-drag-3">
                                                <img id="file-image-3" src="#" alt="Preview"
                                                    class="hidden file-image">
                                                <div id="start-3">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                    <div>Select a file or drag here</div>
                                                    <div id="notimage-3" class="hidden">Please select an image</div>
                                                    <span id="file-upload-btn-3" class="btn btn-primary">Select a
                                                        file</span>
                                                </div>
                                                <div id="response-3" class="hidden">
                                                    <div id="messages-3"></div>
                                                    <progress class="progress" id="file-progress-3" value="0">
                                                        <span>0</span>%
                                                    </progress>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s"
                                style="min-height: 350px;">
                                <div id="file-upload-form-4" class="uploader">
                                    <input id="file-upload-4" type="file" name="fileUpload" accept="image/*" />

                                    <label for="file-upload-4" id="file-drag-4" style=" height: 68vh">
                                        <img id="file-image-4" src="#" alt="Preview"
                                            class="hidden file-image">
                                        <div id="start-4">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            <div>Select a file or drag here</div>
                                            <div id="notimage-4" class="hidden">Please select an image</div>
                                            <span id="file-upload-btn-4" class="btn btn-primary">Select a
                                                file</span>
                                        </div>
                                        <div id="response-4" class="hidden">
                                            <div id="messages-4"></div>
                                            <progress class="progress" id="file-progress-4" value="0">
                                                <span>0</span>%
                                            </progress>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: flex-end;">
                            <button class="cssbuttons-io-button mt-2">
                                Upload More
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

    <div id="overlay" style="display: none;">
        <div id="overlay-content">
            <div id="clsbtn">
                <button type="button" class="btn-close" onclick="closeBtn()">
                    <span class="icon-cross"></span>
                    <span class="visually-hidden">Close</span>
                </button>
            </div>

            {{-- <H3 class="text-center ">Jungle Beach Unawatuna</H3> --}}

            <div style="height: 25px; width : 100%; color:black">
                <div class="row " style="position: fixed;">
                    <div class="col-lg-3 ">

                        <div class="wrapper">
                            <div class="box">
                                <div class="js--image-preview"></div>
                                <div class="upload-options">
                                    <label>
                                        <input type="file" class="image-upload" accept="image/*" />
                                    </label>
                                </div>
                            </div>



                        </div>
                    </div>
                    {{-- Content for create location  --}}
                    <div id="locationContent" class="col-lg-3 col-md-6" style=" width : 70% ; display: none;">
                        <div class="row ">
                            <div class="col-lg-4 ">
                                <h5>Enter Location Name: </h5>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" id="locationName" name="search"
                                    placeholder="Enter Location Name" class="input text-center">
                            </div>
                        </div>

                        <h5 class="mt-4">Add some breif discription about this location</h5>
                        <div class="form-group">
                            <textarea class="form-control" id="locationDiscription" rows="3" style=" border-color: rgb(157, 156, 156)"
                                placeholder="Enter a brief description..."></textarea>
                        </div>
                        <div style="margin-right:60px" class="mt-2 mb-5">
                            <div class="row " style="position: fixed;">
                                <div class="col-lg-6 ">
                                    <h5>Enter City : </h5>
                                </div>
                                <div class="col-lg-6">
                                    <input placeholder="Location" id="city" type="text" name="text"
                                        class="input">
                                </div>
                            </div>

                        </div>


                    </div>
                    {{-- Content for create location  --}}

                    {{-- Content for add vehicle  --}}
                    <div id="vehcleContent" class="col-lg-3 col-md-6" style=" width : 70% ; display: none;">
                        <div class="row ">
                            <div class="col-lg-4 ">
                                <h5>Enter Vehicle Model: </h5>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" id="vehicleModel" name="search" placeholder="Enter Here..."
                                    class="input text-center">
                            </div>
                        </div>

                        <h5 class="mt-4">Add some breif discription about this Vehicle</h5>
                        <div class="form-group">
                            <textarea class="form-control" id="vehicleDiscription" rows="3" style=" border-color: rgb(157, 156, 156)"
                                placeholder="Enter a brief description..."></textarea>
                        </div>
                        <div style="margin-right:60px" class="mt-2">
                            <div class="row " style="position: fixed;">
                                <div class="col-lg-6 ">
                                    <h5>Vehicle Number : </h5>
                                </div>
                                <div class="col-lg-6">
                                    <input placeholder="Enter Here..." id="vehicleNo" type="text" name="text"
                                        class="input">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="vehcleOption" style=" margin: 25px; width:96% ; display:none;">
                        <div class="row ">

                            <div class="col-lg-4 pl-5 pr-0">

                                <div class="radio-button-container">
                                    <h5>Type</h5>
                                    <div class="radio-button">
                                        <input type="radio" class="radio-button__input" id="car"
                                            name="radio-group">
                                        <label class="radio-button__label" for="car">
                                            <span class="radio-button__custom"></span>
                                            Car
                                        </label>
                                    </div>
                                    <div class="radio-button">
                                        <input type="radio" class="radio-button__input" id="van"
                                            name="radio-group">
                                        <label class="radio-button__label" for="van">
                                            <span class="radio-button__custom"></span>
                                            Van
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-8 ">
                                <div class="row " style=" width:98%">
                                    <div class="col-lg-2 ">
                                        <h5 class="ml-5">Options: </h5>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <label class="cyberpunk-checkbox-label">
                                            <input id="ac" type="checkbox" class="cyberpunk-checkbox">
                                            Fully AC</label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label class="cyberpunk-checkbox-label">
                                            <input id="adjSeat" type="checkbox" class="cyberpunk-checkbox">
                                            Adjustable Seat</label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label class="cyberpunk-checkbox-label">
                                            <input id="ps" type="checkbox" class="cyberpunk-checkbox">
                                            Power Shutter</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- Content for add vehicle  --}}
                    <h3 class="text-center ">Add More Images</h3>
                    {{-- image uploader --}}


                    <section>
                        <div id="dropzone">
                            <form class="dropzone needsclick" id="demo-upload" action="/upload">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload.<br>
                                    <span class="note needsclick">(This is just a demo dropzone. Selected
                                        files are <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </form>
                        </div>
                    </section>
                    {{-- Image uploader end --}}
                    <div class="mt-3" style="width: 92%; display: flex; justify-content: flex-end;">
                        <button class="animated-button" style="width: 15vw ; height:50px"
                            onclick="createNewLocation()">
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
    </div>

    <div class="container-xxl py-5" style="background-color: #fff; width:88%">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center">Add Locations For Package</h3>
                    <div class="row g-4">

                        <div class="col-lg-8 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="position-relative animated slideInDown mt-2 mb-5 ml-5"
                                style="width:50vw; margin-left:10%">
                                <input class="form-control border-2 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Search Locations ">
                                <button type="button"
                                    class="btn btn-primary rounded-pill py-2 px-5 position-absolute top-0 end-0 me-2"
                                    style="margin-top: 8px;">Search</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div style="width: 100%; display: flex; justify-content: flex-start;">
                                <button class="cssbuttons-io-button mt-2 ml-3" onclick="addLocation()">
                                    Add New Location
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


                    <div id="packageList">
                    </div>
                </div>

            </div>
            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="text-center mt-5">Vehicles That Brings You In Entire Vacation </h3>
                    <div class="row g-4">

                        <div class="col-lg-8 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="position-relative animated slideInDown mt-2 mb-5 ml-5"
                                style="width:50vw; margin-left:10%">
                                <input class="form-control border-2 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Search Locations ">
                                <button type="button"
                                    class="btn btn-primary rounded-pill py-2 px-5 position-absolute top-0 end-0 me-2"
                                    style="margin-top: 8px;">Search</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div style="width: 100%; display: flex; justify-content: flex-start;">
                                <button class="cssbuttons-io-button mt-2 ml-3" onclick="addVehicle()">
                                    Add New Vehicle
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
                    <div id="Vehicle-list">
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="text-center mt-5">Add Accommodation That Provide For Package </h3>
                    <div class="row g-4">

                        <div class="col-lg-8 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="position-relative animated slideInDown mt-2 mb-5 ml-5"
                                style="width:50vw; margin-left:10%">
                                <input class="form-control border-2 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Search Locations ">
                                <button type="button"
                                    class="btn btn-primary rounded-pill py-2 px-5 position-absolute top-0 end-0 me-2"
                                    style="margin-top: 8px;">Search</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div style="width: 100%; display: flex; justify-content: flex-start;">
                                <button class="cssbuttons-io-button mt-2 ml-3" onclick="openCreateTab()">
                                    Add New Hotels
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
                    <div id="accommodation-list">
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="text-center mt-5">Guides And Language Translators</h3>
                    <div class="row g-4">

                        <div class="col-lg-8 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="position-relative animated slideInDown mt-2 mb-5 ml-5"
                                style="width:50vw; margin-left:10%">
                                <input class="form-control border-2 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Search Locations ">
                                <button type="button"
                                    class="btn btn-primary rounded-pill py-2 px-5 position-absolute top-0 end-0 me-2"
                                    style="margin-top: 8px;">Search</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div style="width: 100%; display: flex; justify-content: flex-start;">
                                <button class="cssbuttons-io-button mt-2 ml-3" onclick="openCreateTab()">
                                    Add Guides/Translators
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
                    <div id="translators-list">
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                    <p class="mt-5" style=" font-size: 17px; color:black">If this package feels
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem est quidem unde voluptatem, et facere tenetur beatae neque debitis commodi illum eos fuga, assumenda aliquam asperiores accusantium. Cumque, vel reprehenderit?</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-12 col-sm-4 wow fadeInUp " style=" display: flex; justify-content: center;"
                    data-wow-delay="0.4s">
                    <button class="animated-button" style="width: 15vw">
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
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function createNewLocation() {
            const type = localStorage.getItem('type');

            if (type === 'vehicle') {
                const checkCar = document.getElementById('car').checked;
                const checkVan = document.getElementById('van').checked;
                var vehiceType = '';

                if (checkCar) {
                    vehiceType = 'car';
                } else if (checkVan) {
                    vehiceType = 'van';
                }
                var locationData = {
                    vehicleNo: document.getElementById('vehicleNo').value,
                    model: document.getElementById('vehicleModel').value,
                    discription: document.getElementById('vehicleDiscription').value,
                    type: vehiceType,
                    is_ac: document.getElementById('ac').checked ? 1 : 0,
                    isAdjustableSeat: document.getElementById('adjSeat').checked ? 1 : 0,
                    isPowerShutter: document.getElementById('ps').checked ? 1 : 0,
                    reviews: ''
                };
                console.log(document.getElementById('vehicleNo').value);

                $.ajax({
                    url: '{{ route('vehicle.create') }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: locationData,
                    success: function(response) {
                        alert(response.message);
                        document.getElementById('vehicleNo').value = '';
                        document.getElementById('vehicleDiscription').value = '';
                        document.getElementById('vehicleModel').value = '';
                        document.getElementById('ac').checked = false;;
                        document.getElementById('adjSeat').checked = false;
                        document.getElementById('ps').checked = false;
                        // var overlay = document.getElementById('overlay');
                        // overlay.style.display = overlay.style.display === 'none' ? 'block' : 'none';
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Failed to create location: ' + textStatus);
                    }
                });
            } else if (type === 'location') {
                var locationData = {
                    name: document.getElementById('locationName').value,
                    created: 'UserTS2',
                    discription: document.getElementById('locationDiscription').value,
                    city: document.getElementById('city').value,
                    reviews: '',
                };

                $.ajax({
                    url: '{{ route('product.create') }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: locationData,
                    success: function(response) {
                        alert(response.message);
                        document.getElementById('locationName').value = '';
                        document.getElementById('locationDiscription').value = '';
                        document.getElementById('city').value = '';
                        var overlay = document.getElementById('overlay');
                        overlay.style.display = overlay.style.display === 'none' ? 'block' : 'none';
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Failed to create location: ' + textStatus);
                    }
                });
            }

        }
        document.addEventListener('DOMContentLoaded', function() {
            getLocations();
            getVehicles();
            getAccommodation();
            getTranslators();
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
            $(datesBoxes[0]).text(getDateString(dates[0]));
            $(datesBoxes[1]).text(getDateString(dates[1]));

            $(displayBoxes[0]).text(dates[0].getDate() + " " + monthFormatter.format(dates[0]).slice(0, 3));
            $(displayBoxes[1]).text(dates[1].getDate() + " " + monthFormatter.format(dates[1]).slice(0, 3));
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
                document.getElementById('Vehicle-list').appendChild(divElement);
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
                document.getElementById('accommodation-list').appendChild(divElement);
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
                document.getElementById('translators-list').appendChild(divElement);
            }
        }

        //main image upload
        function ekUpload() {
            function Init() {

                console.log("Upload Initialised");

                var fileSelect = document.getElementById('file-upload'),
                    fileDrag = document.getElementById('file-drag'),
                    submitButton = document.getElementById('submit-button');

                fileSelect.addEventListener('change', fileSelectHandler, false);

                // Is XHR2 available?
                var xhr = new XMLHttpRequest();
                if (xhr.upload) {
                    // File Drop
                    fileDrag.addEventListener('dragover', fileDragHover, false);
                    fileDrag.addEventListener('dragleave', fileDragHover, false);
                    fileDrag.addEventListener('drop', fileSelectHandler, false);
                }
            }

            function fileDragHover(e) {
                var fileDrag = document.getElementById('file-drag');

                e.stopPropagation();
                e.preventDefault();

                fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
            }

            function fileSelectHandler(e) {
                // Fetch FileList object
                var files = e.target.files || e.dataTransfer.files;

                // Cancel event and hover styling
                fileDragHover(e);

                // Process all File objects
                for (var i = 0, f; f = files[i]; i++) {
                    parseFile(f);
                    uploadFile(f);
                }
            }

            // Output
            function output(msg) {
                // Response
                var m = document.getElementById('messages');
                m.innerHTML = msg;
            }

            function parseFile(file) {

                console.log(file.name);
                output(
                    '<strong>' + encodeURI(file.name) + '</strong>'
                );

                // var fileType = file.type;
                // console.log(fileType);
                var imageName = file.name;

                var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
                if (isGood) {
                    document.getElementById('start').classList.add("hidden");
                    document.getElementById('response').classList.remove("hidden");
                    document.getElementById('notimage').classList.add("hidden");
                    // Thumbnail Preview
                    document.getElementById('file-image').classList.remove("hidden");
                    document.getElementById('file-image').src = URL.createObjectURL(file);
                } else {
                    document.getElementById('file-image').classList.add("hidden");
                    document.getElementById('notimage').classList.remove("hidden");
                    document.getElementById('start').classList.remove("hidden");
                    document.getElementById('response').classList.add("hidden");
                    document.getElementById("file-upload-form").reset();
                }
            }

            function setProgressMaxValue(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                    pBar.max = e.total;
                }
            }

            function updateFileProgress(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                    pBar.value = e.loaded;
                }
            }

            function uploadFile(file) {

                var xhr = new XMLHttpRequest(),
                    fileInput = document.getElementById('class-roster-file'),
                    pBar = document.getElementById('file-progress'),
                    fileSizeLimit = 1024; // In MB
                if (xhr.upload) {
                    // Check if file is less than x MB
                    if (file.size <= fileSizeLimit * 1024 * 1024) {
                        // Progress bar
                        pBar.style.display = 'inline';
                        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                        xhr.upload.addEventListener('progress', updateFileProgress, false);

                        // File received / failed
                        xhr.onreadystatechange = function(e) {
                            if (xhr.readyState == 4) {
                                // Everything is good!

                                // progress.className = (xhr.status == 200 ? "success" : "failure");
                                // document.location.reload(true);
                            }
                        };

                        // Start upload
                        xhr.open('POST', document.getElementById('file-upload-form').action, true);
                        xhr.setRequestHeader('X-File-Name', file.name);
                        xhr.setRequestHeader('X-File-Size', file.size);
                        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                        xhr.send(file);
                    } else {
                        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
                    }
                }
            }

            // Check for the various File API support.
            if (window.File && window.FileList && window.FileReader) {
                Init();
            } else {
                document.getElementById('file-drag').style.display = 'none';
            }
        }
        ekUpload();
        var dropzone = new Dropzone('#demo-upload', {
            previewTemplate: document.querySelector('#preview-template').innerHTML,
            parallelUploads: 2,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 3,
            filesizeBase: 1000,
            thumbnail: function(file, dataUrl) {
                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }

        });


        // Now fake the file upload, since GitHub does not handle file uploads
        // and returns a 404

        var minSteps = 6,
            maxSteps = 60,
            timeBetweenSteps = 100,
            bytesPerStep = 100000;

        dropzone.uploadFiles = function(files) {
            var self = this;

            for (var i = 0; i < files.length; i++) {

                var file = files[i];
                totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                for (var step = 0; step < totalSteps; step++) {
                    var duration = timeBetweenSteps * (step + 1);
                    setTimeout(function(file, totalSteps, step) {
                        return function() {
                            file.upload = {
                                progress: 100 * (step + 1) / totalSteps,
                                total: file.size,
                                bytesSent: (step + 1) * file.size / totalSteps
                            };

                            self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                            if (file.upload.progress == 100) {
                                file.status = Dropzone.SUCCESS;
                                self.emit("success", file, 'success', null);
                                self.emit("complete", file);
                                self.processQueue();
                                //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
                            }
                        };
                    }(file, totalSteps, step), duration);
                }
            }
        }

        function openCreateTab() {
            var overlay = document.getElementById('overlay');
            overlay.style.display = overlay.style.display === 'none' ? 'block' : 'none';
        }

        function addVehicle() {
            openCreateTab();
            document.getElementById('vehcleContent').style.display = 'block';
            document.getElementById('vehcleOption').style.display = 'block';
            document.getElementById('locationContent').style.display = 'none';
            localStorage.setItem('type', 'vehicle');

        }


        function addLocation() {
            openCreateTab();
            document.getElementById('vehcleContent').style.display = 'none';
            document.getElementById('vehcleOption').style.display = 'none';
            document.getElementById('locationContent').style.display = 'block';
            localStorage.setItem('type', 'location');

        }

        function closeBtn() {
            localStorage.removeItem('type');
            openCreateTab();
        }
    </script>
</body>

</html>
