<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ReservationKart - Booking Made Easy</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


         <!-- Bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="/css/animate.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="/css/fontawesome.all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="/css/owl.theme.default.min.css" />
    <!-- navber css -->
    <link rel="stylesheet" href="/css/navber.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="/css/meanmenu.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="/css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <!-- preloader Area -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->
    <header class="main_header_arae">
        <!-- Top Bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-list">
                            <li>
                                <a href="#!"><i class="fab fa-facebook"></i></a>
                                <a href="#!"><i class="fab fa-twitter-square"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a href="#!"><span>+1888 5087143</span></a></li>
                            <li><a href="#!"><span>info@reservationkart.com</span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-others-options">
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Sign up</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Bar -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="/">
                                <img src="/img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <img src="/img/logo.webp" alt="logo" width="300" >
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/tours" class="nav-link">
                                        TOURS
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/hotels" class="nav-link">HOTELS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/cabs" class="nav-link">CABS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/flights" class="nav-link">
                                        ABOUT
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">
                                        CONTACT
                                    </a>
                                </li>
                               
                            </ul>
                            <div class="others-options d-flex align-items-center">
                                <!-- <div class="option-item">
                                    <a href="#" class="search-box">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </div> -->
                                <!-- <div class="option-item">
                                    <a href="vendor.html" class="btn  btn_navber">Become a partner</a>
                                </div> -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="option-item">
                                    <a href="#" class="btn  btn_navber">Get free quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- search -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
