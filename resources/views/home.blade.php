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



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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



    jQuery(document).ready(function($) {
        var path = window.location.pathname.split("/").pop();

        // Account for home page with empty path
        if (path == '') {
            path = 'index.html';
        }

        var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
        // Add active class to target link
        target.parent().addClass('active');
    });
    var swiper = new Swiper(".swiper", {
        grabCursor: true,
        speed: 500,
        effect: "slide",
        loop: true,
        mousewheel: {
            invert: false,
            sensitivity: 1,
        },
    });

    swiper.enable();
</script>

</html>
