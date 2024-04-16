<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/locations.css') }}">

    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" id="sysName" href="#">VacyMate</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Restaurants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Rent Vehicles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Agancies</a>
                </li>
            </ul>
            <a href="#" class="btn">Sign in</a>

        </div>
    </nav>
    <h1 class="welcomeText">Welcome to VacayMate!</h1>
    <h2 class="headingText2">Ready to Explore the beauty of paradise of the Indian Ocean?</h2>
    <div class="container">
        <div class="carousel">
            <input type="radio" id="carousel-1" name="carousel[]" checked>
            <input type="radio" id="carousel-2" name="carousel[]">
            <input type="radio" id="carousel-3" name="carousel[]">
            <input type="radio" id="carousel-4" name="carousel[]">
            <input type="radio" id="carousel-5" name="carousel[]">
            <ul class="carousel__items">
                <li class="carousel__item"><img
                        src="//lh5.googleusercontent.com/-cTEgPOnd3l8/U8-EmaZ4KNI/AAAAAAAABc8/6eacbALkQ6A/w1358-h905-no/carousel-1.JPG"
                        alt=""></li>
                <li class="carousel__item"><img
                        src="//lh4.googleusercontent.com/-ntVHbbWX5eo/U8-EmV8P4cI/AAAAAAAABc4/ICYBGkcztTc/w1358-h905-no/carousel-2.jpg"
                        alt=""></li>
                <li class="carousel__item"><img
                        src="//lh5.googleusercontent.com/-batEXUZE_e4/U8-EmLF9-hI/AAAAAAAABc0/J3tJVUa6Buk/w1358-h905-no/carousel-3.jpg"
                        alt=""></li>
                <li class="carousel__item"><img
                        src="//lh5.googleusercontent.com/-gywqIeMvel0/U8-EolKdtkI/AAAAAAAABdM/G0-NHuvvJUU/w1358-h905-no/carousel-4.jpg"
                        alt=""></li>
                <li class="carousel__item"><img
                        src="//lh5.googleusercontent.com/--2iANjL3ikc/U8-EoGJ18mI/AAAAAAAABdI/fBe-q3Gos6Y/w1358-h905-no/carousel-5.jpg"
                        alt=""></li>
            </ul>
            <div class="carousel__prev">
                <label for="carousel-1"></label>
                <label for="carousel-2"></label>
                <label for="carousel-3"></label>
                <label for="carousel-4"></label>
                <label for="carousel-5"></label>
            </div>
            <div class="carousel__next">
                <label for="carousel-1"></label>
                <label for="carousel-2"></label>
                <label for="carousel-3"></label>
                <label for="carousel-4"></label>
                <label for="carousel-5"></label>
            </div>
            <div class="carousel__nav">
                <label for="carousel-1"></label>
                <label for="carousel-2"></label>
                <label for="carousel-3"></label>
                <label for="carousel-4"></label>
                <label for="carousel-5"></label>
            </div>
        </div>
    </div>
    <div class="pdiv">
        <p class="mainP">VacayMate is a comprehensive travel planning platform designed to simplify the process of
            booking
            flights,
            accommodations, and activities, providing users with a hassle-free and personalized vacation experience.</p>
    </div>
    <h1 class="welcomeText">Find Everything</h1>
    <div class="searchContainer">
        <div class="searchBox">

            <input class="searchInput" type="text" name="" placeholder="Search something">
            <button class="searchButton" href="#">



                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"
                    fill="none">
                    <g clip-path="url(#clip0_2_17)">
                        <g filter="url(#filter0_d_2_17)">
                            <path
                                d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z"
                                stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                shape-rendering="crispEdges"></path>
                        </g>
                    </g>
                    <defs>
                        <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                            </feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17">
                            </feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape">
                            </feBlend>
                        </filter>
                        <clipPath id="clip0_2_17">
                            <rect width="28.0702" height="28.0702" fill="white"
                                transform="translate(0.403503 0.526367)">
                            </rect>
                        </clipPath>
                    </defs>
                </svg>


            </button>
        </div>
    </div>
    <main>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-img">
                        <img src="https://images.unsplash.com/photo-1543335785-8aadf6d8183c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80"
                            alt="">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                            preserveAspectRatio="none">
                            <path
                                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                opacity=".25" class="shape-fill"></path>
                            <path
                                d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                opacity=".5" class="shape-fill"></path>
                            <path
                                d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                class="shape-fill"></path>
                        </svg>
                    </div>
                    <div class="swiper-slide-content">
                        <div>
                            <h2>louvre</h2>
                            <p>National art museum in Paris, France. It is located on the Right Bank of the Seine in the
                                city's 1st arrondissement (district or ward) and home to some of the most canonical
                                works of Western art, including the Mona Lisa and the Venus de Milo.</p>
                            <a class="show-more" href="https://en.wikipedia.org/wiki/Louvre" target="_blank"><svg
                                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-img">
                        <img src="https://images.unsplash.com/photo-1618822461310-da1be362e30c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt="">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                            preserveAspectRatio="none">
                            <path
                                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                opacity=".25" class="shape-fill"></path>
                            <path
                                d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                opacity=".5" class="shape-fill"></path>
                            <path
                                d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                class="shape-fill"></path>
                        </svg>
                    </div>
                    <div class="swiper-slide-content">
                        <div>
                            <h2>seychelles</h2>
                            <p>Officially the Republic of Seychelles is an island country and archipelagic state
                                consisting of 155 islands in the Indian Ocean.</p>
                            <a class="show-more" href="https://en.wikipedia.org/wiki/Seychelles" target="_blank"><svg
                                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-img">
                        <img src="https://images.unsplash.com/photo-1529655683826-aba9b3e77383?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1965&q=80"
                            alt="">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                            preserveAspectRatio="none">
                            <path
                                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                opacity=".25" class="shape-fill"></path>
                            <path
                                d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                opacity=".5" class="shape-fill"></path>
                            <path
                                d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                class="shape-fill"></path>
                        </svg>
                    </div>
                    <div class="swiper-slide-content">
                        <div>
                            <h2>london</h2>
                            <p>The capital and largest city of England and the United Kingdom, with a population of
                                around 8.8 million. It stands on the River Thames in south-east England at the head of a
                                50-mile (80 km) estuary down to the North Sea and has been a major settlement for nearly
                                two millennia.</p>
                            <a class="show-more" href="https://en.wikipedia.org/wiki/London" target="_blank"><svg
                                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-img">
                        <img src="https://images.unsplash.com/photo-1512100356356-de1b84283e18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1975&q=80"
                            alt="">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                            preserveAspectRatio="none">
                            <path
                                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                opacity=".25" class="shape-fill"></path>
                            <path
                                d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                opacity=".5" class="shape-fill"></path>
                            <path
                                d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                class="shape-fill"></path>
                        </svg>
                    </div>
                    <div class="swiper-slide-content">
                        <div>
                            <h2>maldives</h2>
                            <p>Officially the Republic of Maldives is an archipelagic state and country in South Asia,
                                situated in the Indian Ocean.</p>
                            <a class="show-more" href="https://en.wikipedia.org/wiki/Maldives" target="_blank"><svg
                                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-img">
                        <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1886&q=80"
                            alt="">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                            preserveAspectRatio="none">
                            <path
                                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                opacity=".25" class="shape-fill"></path>
                            <path
                                d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                opacity=".5" class="shape-fill"></path>
                            <path
                                d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                class="shape-fill"></path>
                        </svg>
                    </div>
                    <div class="swiper-slide-content">
                        <div>
                            <h2>Italy</h2>
                            <p>Located in the middle of the Mediterranean Sea, it consists of a peninsula delimited by
                                the Alps and surrounded by several islands. Italy shares land borders with France,
                                Switzerland, Austria, Slovenia and the enclaved microstates of Vatican City and San
                                Marino.</p>
                            <a class="show-more" href="https://en.wikipedia.org/wiki/Italy" target="_blank"><svg
                                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Include the Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    function test() {
        var tabsNewAnim = $('#navbarSupportedContent');
        var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
        var activeItemNewAnim = tabsNewAnim.find('.active');
        var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
        var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
        var itemPosNewAnimTop = activeItemNewAnim.position();
        var itemPosNewAnimLeft = activeItemNewAnim.position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
        $("#navbarSupportedContent").on("click", "li", function(e) {
            $('#navbarSupportedContent ul li').removeClass("active");
            $(this).addClass('active');
            var activeWidthNewAnimHeight = $(this).innerHeight();
            var activeWidthNewAnimWidth = $(this).innerWidth();
            var itemPosNewAnimTop = $(this).position();
            var itemPosNewAnimLeft = $(this).position();
            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });
        });
    }
    $(document).ready(function() {
        setTimeout(function() {
            test();
        });
    });
    $(window).on('resize', function() {
        setTimeout(function() {
            test();
        }, 500);
    });
    $(".navbar-toggler").click(function() {
        $(".navbar-collapse").slideToggle(300);
        setTimeout(function() {
            test();
        });
    });


    /*
    inspiration
    https://cz.pinterest.com/pin/830703093792161391/
    */
    var swiper = new Swiper(".swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2.5
        },
        keyboard: {
            enabled: true
        },
        mousewheel: {
            thresholdDelta: 70
        },
        spaceBetween: 30,
        loop: false,
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            }
        }
    });

    swiper.slideTo(1, false, false);
</script>

</html>
