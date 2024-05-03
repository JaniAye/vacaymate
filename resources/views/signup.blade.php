<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #86B817;
            background-color: #86B817;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        .frm {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {

            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 820px;
            max-width: 100%;
            min-height: 560px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #86B817;
            background: -webkit-linear-gradient(to right, #86B817, #86B817);
            background: linear-gradient(to right, #86B817, #86B817);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }

        .radio-button-container {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .radio-button {
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        .radio-button__input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .radio-button__label {
            display: inline-block;
            padding-left: 30px;
            margin-bottom: 10px;
            position: relative;
            font-size: 15px;
            color: #989898;
            font-weight: 600;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .radio-button__custom {
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #555;
            transition: all 0.3s ease;
        }

        .radio-button__input:checked+.radio-button__label .radio-button__custom {
            background-color: #86B817;
            border-color: transparent;
            transform: scale(0.8);
            box-shadow: 0 0 20px #ace625;
        }

        .radio-button__input:checked+.radio-button__label {
            color: #86B817;
        }

        .radio-button__label:hover .radio-button__custom {
            transform: scale(1.2);
            border-color: #86B817;
            box-shadow: 0 0 20px #ace625;
        }
    </style>
</head>


<body>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 mt-4 mb-5">
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
                    <a href="./view/about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="package.html" class="nav-item nav-link">Packages</a>
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
                <a href="/provider-panel" class="btn btn-primary rounded-pill py-2 px-4">User Portal</a>
            </div>
        </nav>
        <div class="container-fluid bg-primary py-5 mb-1 mt-10px hero-header">
            <div class="container py-5">
                <div style="height: 1.0em;"></div>

                <div class="container mt-4" id="container">

                    <div class="form-container sign-up-container">
                        <div class="frm">
                            <h4>Create Account</h4>
                            <div class="social-container">
                                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <span>or use your email for registration</span>
                            <input type="text" placeholder="Name" id="name" />
                            <div class="radio-button-container">
                                <div class="radio-button">
                                    <input type="radio" class="radio-button__input" id="isUser"
                                        name="radio-group" checked>
                                    <label class="radio-button__label" for="isUser">
                                        <span class="radio-button__custom"></span>
                                        User
                                    </label>
                                </div>
                                <div class="radio-button">
                                    <input type="radio" class="radio-button__input" id="isSProvider"
                                        name="radio-group">
                                    <label class="radio-button__label" for="isSProvider">
                                        <span class="radio-button__custom"></span>
                                        service Provider
                                    </label>
                                </div>

                            </div>

                            <input type="email" placeholder="Email" id="emailAddr" />
                            <input type="password" placeholder="Password" id="pwd" />
                            <input type="password" placeholder="Re-Enter Password" id="rePwd" />
                            <button onclick="signInAcc()">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-container sign-in-container">
                        <div class="frm">
                            <h1>Sign in</h1>
                            <div class="social-container">
                                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <span>or use your account</span>
                            <input type="email" placeholder="Email" id="lgEmail" />
                            <input type="password" placeholder="Password" id="lgPw" />
                            <a href="#">Forgot your password?</a>
                            <button onclick="logAcc()">Sign In</button>
                        </div>
                    </div>
                    <div class="overlay-container">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h1>Welcome Back!</h1>
                                <p>To keep connected with us please login with your personal info</p>
                                <button class="ghost" id="signIn">Sign In</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h1>Hello, Travellers!</h1>
                                <p>Enter your personal details and start journey with us</p>
                                <button class="ghost" id="signUp">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>

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
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });

        function signInAcc() {
            var name = document.getElementById('name').value;
            var emil = document.getElementById('emailAddr').value;
            var pwd = document.getElementById('pwd').value;
            var repwd = document.getElementById('rePwd').value;
            const isUser = document.getElementById('isUser').checked;
            const isSProvider = document.getElementById('isSProvider').checked;
            var userType = '';

            if (isUser) {
                userType = 'USER';
            } else if (isSProvider) {
                userType = 'SERVICE';
            }

            if (name.trim() === '' || emil.trim() === '' || pwd.trim() === '' || repwd.trim() === '') {
                alert("Enter All Details...");
            } else {
                if (pwd === repwd) {

                    var account = {
                        name: name,
                        email: emil,
                        password: pwd,
                        type: userType
                    };

                    $.ajax({
                        url: '{{ route('account.create') }}',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: account,
                        success: function(response) {
                            alert(response.message);




                            document.getElementById('name').value = '';
                            document.getElementById('emailAddr').value = '';
                            document.getElementById('pwd').value = '';
                            document.getElementById('rePwd').value = '';
                            document.getElementById('isUser').checked = true;
                            document.getElementById('isSProvider').checked = false;

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Failed to create location: ' + textStatus);
                        }
                    });
                } else {
                    alert("Re-Check password again");
                }
            }
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function logAcc() {

            var emil = document.getElementById('lgEmail').value;
            var pwd = document.getElementById('lgPw').value;



            if (emil.trim() === '' || pwd.trim() === '') {
                alert("Enter All Details...");
            } else {

                if (isValidEmail(emil)) {
                    var account = {
                        email: emil,
                        password: pwd
                    };

                    $.ajax({
                        url: '{{ route('account.login') }}',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: account,
                        success: function(response) {
                            localStorage.setItem('user', response.user.id);
                            localStorage.setItem('userType', response.user.type);

                            if (response.user.type === 'USER') {
                                var homeUrl = `/`;
                                window.location.href = homeUrl;
                            } else {
                                window.location.href = `/provider-home`;
                            }

                            document.getElementById('lgPw').value = '';
                            document.getElementById('lgEmail').value = '';
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            if (jqXHR.status === 401) {
                                alert('Invalid email or password');
                            } else {
                                alert('Failed to log in: ' + textStatus);
                            }
                            document.getElementById('lgPw').value = '';
                            document.getElementById('lgEmail').value = '';
                        }
                    });
                } else {
                    alert('Please enter a valid email address');
                    document.getElementById('lgPw').value = '';
                    document.getElementById('lgEmail').value = '';
                }

            }

            // isUser
            // isSProvider



        }
    </script>
</body>

</html>
