<?php
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'dbconnect.php';
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $transactionId = $_POST["transactionId"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // $exists=false;

    // duplicate checker 
    $existSql = "SELECT * FROM `user` WHERE firstName='$firstName'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $showError = "Username Already Exists";
    }
    else{
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` (`firstName`, `lastName`, `email`, `transactionId`, `password`, `date`) 
            VALUES ('$firstName', '$lastName', '$email', '$transactionId', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House To-Let-Tanent_Account_Create</title>
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



    <!-- Alart  -->

    <?php
    if($showAlert){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hurrah!</strong> your account is created successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}
    if($showError){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '. $showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}
?>

    <!-- Alart  -->




    <!-- create account section  -->
        <section class="wrapper">
            <div class="container">
                <div class="loginArea text-center">
                    <div class="logo">
                        <img src="images/house.png" class="img-fluid mt-3" alt="logo">
                    </div>
                    <form action="/HouseToLet/registration.php" method="post" class="rounded bg-white shadow p-5">
                        <h3 class="text-dark fw-bolder fs-4 mb-2 creatAccount">Create an Account</h3>
    
                        <div class="fw-normal text-muted mb-2">
                            Already have an account? <a href="login.php" class="text-primary fw-bold text-decoration-none">Sign in here</a>
                        </div>
                        <div class="fw-normal text-muted mb-2">
                            Create an account as a <span class="text-dark fw-bolder"> House Owner</span> <a href="horegistration.php" class="text-primary fw-bold text-decoration-none">Click here</a>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingFirstName" name="firstName" placeholder="name@example.com" required>
                            <label for="floatingFirstName" required>User Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingLastName" name="lastName" placeholder="name@example.com">
                            <label for="floatingLastName">Mobile Number</label>
                        </div> 
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="transactionId" placeholder="name@example.com" required>
                            <label for="floatingInput">Transaction id</label>
                            <span class="password-info mt-2">To active your account please pay BDT <mark><span class="text-dark fw-bolder">250tk</span></mark> in 01522008870 through Bkash & give the ID</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                            <span class="password-info mt-2">Use 8 or more characters with a mix of letters, numbers & symbols.</span>
                        </div> 
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="cpassword" placeholder="Password">
                            <label for="floatingPassword">Confirm Password</label>
                        </div> 
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label class="form-check-label ms-2" for="gridCheck">
                              I Agree <a href="#">Terms and conditions</a>.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary submit_btn w-50 my-4">Continue</button> 
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