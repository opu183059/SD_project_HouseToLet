
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House To-Let - House Listing</title>
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
                <a class="navbar-brand" href="#">
                    <p class="logoName">House<span class="LogoNameSpan">To</span>-Let</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav menu-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="logInIndex.php">Home</a>
                        </li>
                        <li class="nav-item mt-3 mt-lg-0">
                            <a class="main-btn" href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar section exit -->

    <!-- Search Section Start -->
    <section class="searchSection">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-1">
                    <h3>Search your desired house here</h3>
                </div>
            </div>
            <div class="row">
                <div class="searchBoxDiv">
                    <form action="" method="GET" class="d-flex">
                        <input class="form-control me-2" type="text" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="Search house" aria-label="Search"
                            name="search">
                        <button class="btn searchBtn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Section end -->

    <!-- list container start -->
    <div class="container listing-page-text-size">
        <div class="list-container mt-4">
     
            <!-- Left column  -->
            <div class="left-col">
               
                <?php
                            include 'dbconnect.php';
                            
                            if(isset($_GET['search']))
                            {
                                $filtervalues = $_GET['search'];
                                $querry = "SELECT * FROM housedetails WHERE CONCAT(area) LIKE '%$filtervalues%' ";
                                $querry_run = mysqli_query($conn, $querry);
                                if(mysqli_num_rows($querry_run)>0){
                                    echo '<h3>Recomanded place in <span class="text-uppercase">'.$filtervalues.'</span></h3>';
                                    foreach($querry_run as $items)
                                    {
                                        echo '
                                        <div class="listing-house pt-4 pb-3">
                                        <div class="listing-house-image">
                                            <a href="#">
                                                <img src="'.$items['imagelink'].'" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class="listing-house-info">
                                            <p>Private Flat in '.$items['area'].'</p>
                                            <h4>'.$items['hname'].'</h4>
                                            <p>'.$items['hdetails'].'</p>
                                            <a href="'.$items['location'].'" class="searchBtn mt-3">See Details</a>
                                            <br>
                                            <div class="listing-house-price">
                                                <p>'.$items['member'].'members</p>
                                                <h4>'.$items['rent'].'tk/<span class="house-price-month">Month</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                        ';
                                    }
                                }
                                else{
                                    echo '
                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="alert-heading">Ops!</h4>
                                        <p>there is no data for <span class="text-uppercase">'.$filtervalues.'</span> area</p>
                                        <hr>
                                        <p class="mb-0">We will expand our work to this area soon</p>
                                    </div>
                                    ';
                                }
                            }
                        
                        ?>
            </div>
            <!-- Left column  -->

            <!-- Right column Start -->


            <div class="right-col">
                <div class="advertisement">
                    <div class="add2 p-5">
                        <a href="#">
                            <img src="https://picsum.photos/200/300" alt="">
                        </a>
                    </div>
                    <br>
                    <div class="add3 p-5">
                        <a href="#">
                            <img src="images/Advertisement/atz2.gif" alt="">
                        </a>
                        <a href="#">Lorem ipsum dolor</a>
                    </div>
                    <div class="add4 p-5">
                        <a href="#">
                            <img src="https://source.unsplash.com/200x200/?food" alt="">
                        </a>
                    </div>
                    <br>
                    <br>
                    <div class="add5 p-5">
                        <a href="#">
                            <img src="images/Advertisement/atz3.gif" alt="">
                        </a>
                        <a href="#">Lorem ipsum dolor sit amet dolor sit amet</a>
                    </div>
                </div>
            </div>
            


            <!-- Right column End -->

        </div>
    </div>
    <!-- list container end -->




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
    <script>
        function funs(){
            alert("to see details you have to login.");
        }
    </script>
</body>

</html>