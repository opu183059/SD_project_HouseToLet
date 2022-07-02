<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $firstName = $_POST["firstName"];
    $password = $_POST["password"];
    // $sql = "SELECT * FROM user where firstName='$firstName' AND password='$password'";
    $sql = "SELECT * FROM user where firstName='$firstName'";
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
            while($row=mysqli_fetch_assoc($result)){
                if(password_verify($password, $row['password'])){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['firstname'] = $firstName;
                    header('location: logInIndex.php');
                }
                else{$showError = "Username or password didn't match, please try again.";}            
                }
        }
    else{$showError = "Username or password didn't match, please try again.";}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House To-Let-Tanent_Login</title>
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap5 + Font Awesome CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="registration.css">

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
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar section exit -->


<!-- alart  -->

<?php
if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> you are loged in
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '. $showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?> 


<!-- alart  -->


    <!-- create account section  -->
        <section class="wrapper">
            <div class="container">
                <div class="loginArea text-center">
                    <div class="logo">
                        <img src="images/house.png" class="img-fluid mt-3" alt="logo">
                    </div>
                    <form action="/HouseToLet/login.php" method="post" class="rounded bg-white shadow p-5">
                        <h3 class="text-dark fw-bolder fs-4 mb-2 creatAccount">Login</h3>
                        <div class="fw-normal text-muted mb-2">
                            To login as <span class="text-dark fw-bolder">House Owner</span> <a href="hologin.php" class="text-primary fw-bold text-decoration-none">Click here</a>
                        </div>
                        <!-- <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div> -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingFirstName" name="firstName" placeholder="name@example.com" required>
                            <label for="floatingFirstName">User Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                           
                        </div> 
                        <button type="submit" class="btn btn-primary submit_btn w-50 my-4">Login</button> 
                            
                        <div class="fw-normal text-muted mb-2">
                            Don't have an account? <br> <a href="registration.php" class="text-primary fw-bold text-decoration-none">Create Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>

     <!-- create account section end -->
    

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