<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <div class="navbar-fixed">
        <nav class="teal">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">VacyMate</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i
                            class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="#home">Dashboard</a>
                        </li>
                        <li>
                            <a href="#search">Hotels</a>
                        </li>
                        <li>
                            <a href="#popular">Agancies</a>
                        </li>
                        <li>
                            <a href="#gallery">Rent Vehicles</a>
                        </li>
                        <li>
                            <a href="#contact">Packages</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="#home">Home</a>
        </li>
        <li>
            <a href="#search">Search</a>
        </li>
        <li>
            <a href="#popular">Popular Places</a>
        </li>
        <li>
            <a href="#gallery">Gallery</a>
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>
    </ul>

    <!-- Section: Slider -->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                <div class="caption center-align">
                    <h2>Take Your Dream Vacation</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Veniam non illo earum cumque id est!</h5>
                    <a href="#" class="btn btn-large">Learn More</a>
                </div>
            </li>
            <li>
                <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                <div class="caption left-align">
                    <h2>We Work With All Budgets</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Veniam non illo earum cumque id est!</h5>
                    <a href="#" class="btn btn-large">Learn More</a>
                </div>
            </li>
            <li>
                <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                <div class="caption right-align">
                    <h2>Group & Individual Getaways</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Veniam non illo earum cumque id est!</h5>
                    <a href="#" class="btn btn-large">Learn More</a>
                </div>
            </li>
        </ul>
    </section>

    <!-- Section: Search -->
    <section id="search" class="section section-search teal darken-1 white-text center scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3>Search Destinations</h3>
                    {{-- <div class="input-field">
                        <input class="white grey-text autocomplete" placeholder="Aruba, Cancun, etc..." type="text"
                            id="autocomplete-input">
                    </div> --}}
                    <div class="searchContainer">
                        <div class="searchBox">

                            <input class="searchInput" type="text" name="" placeholder="Search something">
                            <button class="searchButton" href="#">



                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                    viewBox="0 0 29 29" fill="none">
                                    <g clip-path="url(#clip0_2_17)">
                                        <g filter="url(#filter0_d_2_17)">
                                            <path
                                                d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z"
                                                stroke="white" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round" shape-rendering="crispEdges"></path>
                                        </g>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139"
                                            height="29.7139" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                            </feColorMatrix>
                                            <feOffset dy="4"></feOffset>
                                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                                            </feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_2_17">
                                            </feBlend>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17"
                                                result="shape">
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
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Icon Boxes -->
    <section class="section section-icons grey lighten-4 center">
        <div class="container">
            <div class="row">
                <div class="col s12 m4">
                    <div class="card-panel">
                        <i class="material-icons large teal-text">room</i>
                        <h4>Pick Where</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel">
                        <i class="material-icons large teal-text">store</i>
                        <h4>Travel Shop</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel">
                        <i class="material-icons large teal-text">airplanemode_active</i>
                        <h4>Fly Cheap</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Popular -->
    <section id="popular" class="section section-popular scrollspy">
        <div class="container">
            <div class="row">
                <h4 class="center">
                    <span class="teal-text">Popular</span> Places
                </h4>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                            <span class="card-title">Hill Country</span>
                        </div>
                        <div class="card-content">
                            <p>The Hill Country is a cool and scenic region in central Sri Lanka. It is famous for its
                                rolling hills, tea plantations, and colonial-era towns like Nuwara Eliya. Visitors can
                                enjoy hiking, trekking, and scenic train journeys in this beautiful part of the country.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                            <span class="card-title">Southern Beaches</span>
                        </div>
                        <div class="card-content">
                            <p>The southern coast of Sri Lanka is home to some of the country's most beautiful beaches.
                                Popular beach destinations include Bentota, Hikkaduwa, and Unawatuna. These beaches
                                offer a variety of water sports activities, such as swimming, surfing, and diving.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                            <span class="card-title">Northern Sri Lanka</span>
                        </div>
                        <div class="card-content">
                            <p>The north of Sri Lanka is home to Jaffna, a culturally distinct region with a strong
                                Tamil influence. Jaffna is known for its Hindu temples, colonial architecture, and
                                delicious cuisine. Visitors can also explore the Jaffna Peninsula's beaches and lagoons.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                            <span class="card-title">Cultural Triangle</span>
                        </div>
                        <div class="card-content">
                            <p>This region in central Sri Lanka is home to some of the country's most important ancient
                                cities, including Anuradhapura, Polonnaruwa, and Kandy. These cities are filled with
                                ruins of temples, palaces, and monasteries, offering a glimpse into Sri Lanka's rich
                                history.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                            <span class="card-title">Eastern Beaches</span>
                        </div>
                        <div class="card-content">
                            <p>The eastern coast of Sri Lanka is less developed than the south, but it offers some
                                stunning beaches and wildlife sanctuaries. Popular destinations include Trincomalee and
                                Arugam Bay. Trincomalee is a historic town with a beautiful harbor, while Arugam Bay is
                                a popular surfing spot.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                            <span class="card-title">Island of a Thousand Waterfalls</span>
                        </div>
                        <div class="card-content">
                            <p>Sri Lanka isn't just beaches. Here, emerald jungles whisper secrets as hidden waterfalls
                                erupt, their veils shimmering rainbows. Trek through lush landscapes and discover
                                cascading wonders, each a testament to the island's vibrant soul.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 center">
                    <a href="#contact" class="btn btn-large grey darken-3">
                        <i class="material-icons left">send</i> Contact For Booking
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Follow -->
    <section class="section section-follow teal darken-2 white-text center">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Follow VacayMate</h4>
                    <p>Follow us on social media for special offers</p>
                    <a href="htttps://facebook.com" target="_blank" class="white-text">
                        <i class="fab fa-facebook fa-4x"></i>
                    </a>
                    <a href="htttps://twitter.com" target="_blank" class="white-text">
                        <i class="fab fa-twitter fa-4x"></i>
                    </a>
                    <a href="htttps://linkedin.com" target="_blank" class="white-text">
                        <i class="fab fa-linkedin fa-4x"></i>
                    </a>
                    <a href="htttps://googleplus.com" target="_blank" class="white-text">
                        <i class="fab fa-google-plus fa-4x"></i>
                    </a>
                    <a href="htttps://pinterest.com" target="_blank" class="white-text">
                        <i class="fab fa-pinterest fa-4x"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery" class="section section-gallery scrollspy">
        <div class="container">
            <h4 class="center">
                <span class="teal-text">Paradise </span> of the Indian Ocean
            </h4>
            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beach"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?travel"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?nature"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img"
                        src="https://source.unsplash.com/1600x900/?beach, travel" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beaches"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?traveling"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?bridge"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?boat, travel"
                        alt="">
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?water"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?building"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?trees"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?cruise"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Contact -->
    <section id="contact" class="section section-contact scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card-panel teal white-text center">
                        <i class="material-icons medium">email</i>
                        <h5>Contact Us For Booking</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus sed praesentium
                            delectus. Sit, mollitia
                            quo. Veniam repellat voluptas ipsum doloremque?</p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h4>Location</h4>
                        </li>
                        <li class="collection-item">VacayMate Agency</li>
                        <li class="collection-item">555 Beach rd, Suite 33</li>
                        <li class="collection-item">Miami FL, 55555</li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    <div class="card-panel grey lighten-3">
                        <h5>Please fill out this form</h5>
                        <div class="input-field">
                            <input type="text" placeholder="Name" id="name">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                            <input type="email" placeholder="Email" id="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Phone" id="phone">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="input-field">
                            <textarea class="materialize-textarea" placeholder="Enter Message" id="message"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <input type="submit" value="Submit" class="btn">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="section teal darken-2 white-text center">
        <p class="flow-text">VacayMate &copy; 2018</p>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    // Side Menu
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 500,
        interval: 6000
    });

    // Scrollspy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // Auto Complete
    const ac = document.querySelector('.autocomplete');
    M.Autocomplete.init(ac, {
        data: {
            "Aruba": null,
            "Cancun Mexico": null,
            "Hawaii": null,
            "Florida": null,
            "California": null,
            "Jamaica": null,
            "Europe": null,
            "The Bahamas": null,
        }
    });
</script>

</html>
