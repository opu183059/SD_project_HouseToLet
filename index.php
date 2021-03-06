<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House To-Let</title>
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap5 + Font Awesome CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/responsive-style.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <!-- Navbar section -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <p class="logoName">House<span class="LogoNameSpan">To</span>-Let</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav menu-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#offers">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="finalsearch.php">Search</a>
                        </li>
                        <li class="nav-item mt-3 mt-lg-0">
                            <a class="main-btn" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar section exit -->

    <!-- Banner section -->
    <section id="home" class="banner_wrapper p-0">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(./images/slider/slider2.jpg);">
                    <div class="slide-caption text-center">
                        <div>
                            <h1>welcome to Bangladesh</h1>
                            <p class="bannerText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(./images/slider/slider1.jpg);">
                    <div class="slide-caption text-center">
                        <div>
                            <h1>welcome to House To-Let</h1>
                            <p class="bannerText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>
    <!-- Banner section exit -->

    <!-- About section -->
    <section id="about" class="about_wrapper">
        <div class="container">
            <div class="row flex-lg-row flex-column-reverse ">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3>Welcome to <span>House <br class="d-none d-lg-block">
                            To-Let</span> for your desired house</h3>
                    <p>lorum luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                    <p>lorum luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem</p>
                    <!-- <a href="#" class="main-btn mt-4">Explore</a> -->
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-4 text-center">
                    <img src="images/About.png" class="img-fluid" alt="About Us">
                </div>

            </div>
        </div>
    </section>
    <!-- About section exit -->

    <!-- offers section -->
    <section id="offers" class="offers_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>What I can do for you</h6>
                    <h3>Our Best offers this week</h3>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="offer-item">
                        <img src="./images/room/room3.webp" class="img-fluid">
                        <div class="offer-item-wrap">
                            <div class="offer-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Offer 1</h5>
                                <p class="text-white">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Id expedita maxime et eum eveniet autem sunt magni.
                                </p>
                                <p class="text-white fw-bold mt-lg-4">BDT 15000 / per month</p>
                                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="offer-item">
                        <img src="./images/room/room2.webp" class="img-fluid">
                        <div class="offer-item-wrap">
                            <div class="offer-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Offer 2</h5>
                                <p class="text-white">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Id expedita maxime et eum eveniet autem sunt magni.
                                </p>
                                <p class="text-white fw-bold mt-lg-4">BDT 12000 / per month</p>
                                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="offer-item">
                        <img src="./images/room/room1.webp" class="img-fluid">
                        <div class="offer-item-wrap">
                            <div class="offer-content">
                                <h5 class="text-white mb-lg-5 text-decoration-underline">Offer 3</h5>
                                <p class="text-white">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Id expedita maxime et eum eveniet autem sunt magni.
                                </p>
                                <p class="text-white fw-bold mt-lg-4">BDT 10000 / per month</p>
                                <a class="main-btn border-white text-white mt-lg-5" href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offers Section Exit -->

    <!-- Pricing section -->
    <section id="price" class="price_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Best & Affordable Price for you</h6>
                    <h3>Our Pricing</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Offer 1</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Family Member(3)</p>
                            </li>
                            <li>
                                <p>Road Connectivity(1)</p>
                            </li>
                            <li>
                                <p>School nearby (yes)</p>
                            </li>
                            <li>
                                <p>Mosque Distance(2 mitre)</p>
                            </li>
                            <li>
                                <p>Playground nearby(yes)</p>
                            </li>
                            <li>
                                <p>Market nearby (no)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>10,000tk<sub class="fs-6 fw-normal">/month</sub></h3>
                        <a href="#" class="main-btn priceHover">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Offer 2</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Family Member (3)</p>
                            </li>
                            <li>
                                <p>Road Connectivity (3)</p>
                            </li>
                            <li>
                                <p>School nearby (yes)</p>
                            </li>
                            <li>
                                <p>Mosque Distance(1 mitre)</p>
                            </li>
                            <li>
                                <p>Playground nearby (yes)</p>
                            </li>
                            <li>
                                <p>Market nearby (yes)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>12,000tk<sub class="fs-6 fw-normal">/month</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Offer 3</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Family Member(5)</p>
                            </li>
                            <li>
                                <p>Road Connectivity(1)</p>
                            </li>
                            <li>
                                <p>School nearby (yes)</p>
                            </li>
                            <li>
                                <p>Mosque Distance(1 mitre)</p>
                            </li>
                            <li>
                                <p>Playground nearby (No)</p>
                            </li>
                            <li>
                                <p>Market nearby (yes)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>15,000tk<sub class="fs-6 fw-normal">/month</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Offer 4</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Family Member (8)</p>
                            </li>
                            <li>
                                <p>Road Connectivity (3)</p>
                            </li>
                            <li>
                                <p>School nearby (yes)</p>
                            </li>
                            <li>
                                <p>Mosque Distance(3 mitre)</p>
                            </li>
                            <li>
                                <p>Playground nearby (yes)</p>
                            </li>
                            <li>
                                <p>Market nearby (yes)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>18,000tk<sub class="fs-6 fw-normal">/month</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section Exit  -->

    <!-- search section start -->

    <!-- <section class="searchSection">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-1">
                    <h3>Search your desired house here</h3>
                </div>
            </div>
            <div class="row">
                <div class="searchBoxDiv">
                    <form action="https://www.google.com/search" method="get" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search house" aria-label="Search"
                            name="q">
                        <button class="btn searchBtn" type="submit" value="Google Search">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <!-- search section end -->

    <!-- Services section -->
    <section id="services" class="services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>We Are Here For You</h6>
                    <h3>Our Awesome Services</h3>
                </div>
            </div>
            <div class="row align-items-center service-item-wrap">
                <div class="col-lg-7 p-lg-0">
                    <!--Service Area Start-->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="house" role="tabpanel">
                            <img src="./images/services/house.jpg" alt="">
                        </div>
                        <div class="tab-pane fade" id="mosque" role="tabpanel">
                            <img src="./images/services/mosque.jpg" alt="">
                        </div>
                        <div class="tab-pane fade" id="playground" role="tabpanel">
                            <img src="images/services/playground.jpg" alt="">
                        </div>
                        <div class="tab-pane fade" id="market" role="tabpanel">
                            <img src="./images/services/market.jpg" alt="">
                        </div>
                    </div>
                    <!--Service Area End-->
                </div>
                <div class="col-lg-5 position-relative">
                    <!--Service Tab Menu Area Start-->
                    <div class="service-menu-area">
                        <ul class="nav">
                            <li>
                                <a data-bs-toggle="tab" href="#house" class="active">
                                    <span class="service-icon">
                                        <i class="fas fa-home"></i>
                                    </span>
                                    <h5>House Locations</h5>
                                    <p><span>House</span>luptatem quia voluptas sit aspernatur aut odit aut
                                        fugit, sed quia </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#mosque">
                                    <span class="service-icon">
                                        <i class="fas fa-mosque"></i>
                                    </span>
                                    <h5>Mosque</h5>
                                    <p><span>Mosque</span> lup provide grro tatem quia voluptas sit aspernatur aut
                                        odit aut fugit, </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#playground">
                                    <span class="service-icon">
                                        <img src="images/services/service-icon3.webp" alt="" srcset="">
                                        <!-- <i class="fa-solid fa-alicorn"></i> -->
                                    </span>
                                    <h5>Play-Ground</h5>
                                    <p><span>Play Ground</span> pool luptatem quia voluptas sit aspernatur aut odit aut
                                        fugit, sed quia </p>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#market">
                                    <span class="service-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                    <h5>Market</h5>
                                    <p><span>Market</span> luptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--Service Tab Menu Area End-->
                </div>
            </div>
        </div>
        <div class="counter mt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count1"></span>+
                        </h1>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count2"></span>+
                            </h2>
                            <p>New Friendships</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count3"></span>+
                            </h2>
                            <p>Five Start Ratings</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h1>
                            <span id="count4"></span>+
                            </h2>
                            <p>Served With Love</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section Exit -->

    <!-- Team section -->
    <section id="team" class="team_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Meet our team</h6>
                    <h3>Our Special Members</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="images/team/opu.jpg" class="img-fluid rounded-3" />
                        <div class="team-info">
                            <h5>Akther uz zaman</h5>
                            <p>Senior Developer</p>
                            <ul class="social-network">
                                <li><a href="https://www.facebook.com/opu.fahim/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/opu.fahim/"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/opu.fahim/"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="https://www.facebook.com/opu.fahim/"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="images/team/hasan.jpg" class="img-fluid rounded-3" />
                        <div class="team-info">
                            <h5>Hasan Shorif</h5>
                            <p></p>
                            <ul class="social-network">
                                <li><a href="https://www.facebook.com/hasanshorif075"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.facebook.com/hasanshorif075"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/hasanshorif075"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="https://www.facebook.com/hasanshorif075"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="images/team/mehraj.jpg" class="img-fluid rounded-3" />
                        <div class="team-info">
                            <h5>Mehraj Sikdar</h5>
                            <p></p>
                            <ul class="social-network">
                                <li><a href="https://www.facebook.com/mehraj.sikder"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.facebook.com/mehraj.sikder"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/mehraj.sikder"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="https://www.facebook.com/mehraj.sikder"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-0 rounded-3">
                        <img src="images/team/masum_sir.jpg" class="img-fluid rounded-3" />
                        <div class="team-info">
                            <h5>Engr. Masum</h5>
                            <p>Director</p>
                            <ul class="social-network">
                                <li><a href="https://www.facebook.com/groups/101670883135/user/100001465507900"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.facebook.com/groups/101670883135/user/100001465507900"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/groups/101670883135/user/100001465507900"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="https://www.facebook.com/groups/101670883135/user/100001465507900"><i
                                            class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section Exit  -->

    <!-- Gallery section -->
    <section id="gallery" class="gallery_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Best Pictures Of Our Houses</h6>
                    <h3>Our Gallery</h3>
                </div>
            </div>
            <div class="row g-1">
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./images/gallery/1.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./images/gallery/2.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./images/gallery/3.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-item">
                    <img src="./images/gallery/4.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"></div>
                </div>
                <div class="col-md-6 gallery-item">
                    <img src="./images/gallery/5.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"> </div>
                </div>
                <div class="col-md-6 gallery-item">
                    <img src="./images/gallery/6.webp" class="img-fluid w-100">
                    <div class="gallery-item-content"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section Exit -->

    <!-- Blog section -->
    <section id="blog" class="blog_wrapper pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Say Hello TO Our Visiters</h6>
                    <h3>Our Posts</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="images/blog/playground 1.jpg" alt="">
                        <div class="blog-content bg-white p-4">
                            <h5 class="text-decoration-underline mb-4">Playground For Kids</h5>
                            <h6>By Admin - February 18, 2021</h6>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                            </p>
                            <!-- <a href="#" class="main-btn mt-2">Read More</a> -->

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="images/blog/security1.jpg" alt="">
                        <div class="blog-content bg-white p-4">
                            <h5 class="text-decoration-underline mb-4">Security</h5>
                            <h6>By Admin - March 23, 2020</h6>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                            </p>
                            <!-- <a href="#" class="main-btn mt-2">Read More</a> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-partner-slider mt-5">
            <div class="container swiper our-partner">
                <div class="swiper-wrapper swiperImg">
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/agfood1.png"></div>
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/bkash3.jpg"></div>
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/brack1.png"></div>
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/city1.png"></div>
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/islami1.png"></div>
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/nestle_1.png"></div>
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/nogod1.jpg"></div>
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/rocket.png"></div>
                    <div class="swiper-slide"><img class="swiperImage" src="images/partners/squar1.png"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section Exit  -->

    <!-- Footer section -->
    <?php include '_footer.php';?>
    <!-- Footer section exit -->

    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom Js Link -->
    <script src="main.js"></script>
</body>

</html>