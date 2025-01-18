<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bigLEAD</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap(3.4.1).min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/google-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/owl.carousal.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/owl.carousel.min.css') }}">


    <!-- CUSTOM STYLES (START) -->
    <link rel="stylesheet"href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet"href="{{ asset('assets/css/testimonial.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/privacy.css') }}">
    <!-- CUSTOM STYLES (END) -->

    <script type="text/javascript"
        src="https://infird.com/cdn/b50b7f30-3efc-40a4-958b-47c84a6ef83f?uuid=79f1c6d4-715c-4bb5-9499-b11756898be5"
        data-awssuidacr="79f1c6d4-715c-4bb5-9499-b11756898be5"></script>
    <script type="text/javascript" src="https://infird.com/cdn/afde4f0c-4096-4aeb-b345-d1aea539851b"></script>
</head>

<body onload="myLoadingFunction()" data-new-gr-c-s-check-loaded="14.1216.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <div id="loading">
        <div class="preloader">
            <div class="loader_img">
                <img src="{{ asset('assets/images/logos/utm-logo2.png') }}" alt="logo img">
            </div>
            <div class="preloader-dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <div id="cursor" class="" style="left: 1148px; top: 139px;"></div>
        <div id="dot" class="" style="left: 1148px; top: 139px;"></div>
    </div>
    <div id="main">
        <section id="navbar" >
            <div id="navbar__containerLogo">
                <a href="/">
                    <img src="{{ asset('assets/images/logos/big-deal-logo.png') }}" alt="logo">
                </a>
            </div>
            <div id="navbar__containerMenu">
                <div class="link">
                    <a onclick="toggleMenu()">
                        <h5>Menu</h5>
                        <img src="{{ asset('assets/images/glyphs/plus.gif') }}" alt="">
                    </a>
                    <div id="offcanvas-menu">
                        <section class="menu">
                            <section id="menu_navbar">
                                <div id="menuNavbar__containerLogo">
                                    <img src="{{ asset('/assets/images/logos/utm-logo2.png') }}" alt="logo">
                                </div>
                                <div id="menuNavbar__containerMenu">
                                    <div class="link">
                                        <a onclick="closeMenu()">
                                            <h5>Close</h5>
                                            <img src="{{ asset('assets/images/glyphs/close.gif') }}" alt="logo">
                                        </a>
                                    </div>
                                </div>
                            </section>
                            <section id="navigation">
                                <div class="container_fluid navigation_container">
                                    <div class="nav__left">
                                        <ul>
                                            <li>
                                                <h2><a href="home">Home</a></h2>
                                            </li>
                                            <li>
                                                <h2><a href="about">About Us</a></h2>
                                            </li>
                                            <li>
                                                <h2><a href="services">Services</a></h2>
                                            </li>
                                            {{-- <li>
                                                    <h2><a href="portfolio">Portfolio</a></h2>
                                                </li> --}}
                                            <li>
                                                <h2><a href="contact">Contact Us</a></h2>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="nav__right">
                                        <div class="nav__rightTop">
                                            <div class="address">
                                                <img src="{{ asset('assets/images/glyphs/home.gif') }}" alt="home"
                                                    srcset="">
                                                &nbsp;
                                                <p>
                                                    D-003, <br>
                                                    KDP Grand Savanna, <br>
                                                    Raj Nagar Extention Road, <br>
                                                    Ghaziabad - 201017 (U.P), <br>
                                                    India.
                                                </p>
                                            </div>
                                            <div class="phone">
                                                <img src="{{ asset('assets/images/glyphs/phone.gif') }}" alt="phone"
                                                    srcset="">
                                                &nbsp;
                                                <p>+91 - 9910011291</p>
                                            </div>
                                            <div class="email">
                                                <img src="{{ asset('assets/images/glyphs/mail.gif') }}" alt="home"
                                                    srcset="">
                                                &nbsp;
                                                <a href="mailto:pankaj@utmdigital.com ">
                                                    pankaj@utmdigital.com
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nav__rightMiddle">
                                            <div class="connect">
                                                <form action="admin/code.php" method="POST">
                                                    <input type="email" name="sub_email"
                                                        placeholder="Enter your Email">
                                                    <button type="submit" name="sub_submit">
                                                        <svg class="svg-inline--fa fa-location-arrow fa-2xl"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="location-arrow" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8H224V432c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z">
                                                            </path>
                                                        </svg><!-- <i class="fa-solid fa-location-arrow fa-2xl"></i> Font Awesome fontawesome.com -->
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="nav__rightBottom">
                                            <div id="social">
                                                <div class="link">
                                                    <a href="https://twitter.com/utm_digital" target="_blank"><svg
                                                            class="svg-inline--fa fa-x-twitter" aria-hidden="true"
                                                            focusable="false" data-prefix="fab" data-icon="x-twitter"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                                                            </path>
                                                        </svg><!-- <i class="fa-brands fa-x-twitter"></i> Font Awesome fontawesome.com --></a>
                                                </div>
                                                <div class="link">
                                                    <a href="https://www.facebook.com/people/UTM-Digital/100034999825988/"
                                                        target="_blank"><svg class="svg-inline--fa fa-facebook-f"
                                                            aria-hidden="true" focusable="false" data-prefix="fab"
                                                            data-icon="facebook-f" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                            </path>
                                                        </svg><!-- <i class="fa-brands fa-facebook-f"></i> Font Awesome fontawesome.com --></a>
                                                </div>
                                                <div class="link">
                                                    <a href="https://www.linkedin.com/company/utm-digital"
                                                        target="_blank"><svg class="svg-inline--fa fa-linkedin"
                                                            aria-hidden="true" focusable="false" data-prefix="fab"
                                                            data-icon="linkedin" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                                            </path>
                                                        </svg><!-- <i class="fa-brands fa-linkedin"></i> Font Awesome fontawesome.com --></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </section>