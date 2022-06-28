<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" href="images/favicon.png" type="image/gif" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <title>login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .container {
            background-color: #F8F9FA;
            width: 80%;
            height: 740px;
            justify-content: center;
            align-items: center;
            margin-left: 130px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            padding-top: 20px;
            font-size: 40px;
            color: #44B89D;
        }

        h2 {
            padding-top: 65px;
            text-align: center;
            color: rgb(7, 7, 70);
        }

        p {
            padding-top: 10px;
            text-align: center;
            font-size: 18px;
        }

        .button1 {
            margin-top: 30px;
            margin-left: 36.5%;
            width: 28%;
            height: 42px;
            border: 1px solid lightgray;
            border-radius: 5px;
            background-color: #F5F6F9;
            color: black;
            font-size: 17px;
        }

        .button1:hover {
            background-color: #44B89D;
            color: white;
        }

        .button2 {
            margin-top: 10px;
            margin-left: 36.5%;
            width: 28%;
            height: 42px;
            border: 1px solid lightgray;
            border-radius: 5px;
            background-color: #F5F6F9;
            color: black;
            font-size: 17px;
        }

        .button2:hover {
            background-color: #44B89D;
            color: white;
        }

        span {
            margin-top: 20px;
            text-align: center;
            border-left: 120px solid gray;
            padding-left: 5px;
            padding-right: 5px;
            border-right: 120px solid gray;
            margin-left: 38%;
        }

        .first .input {
            margin-top: 40px;
            display: inline-block;
            border: 1px solid lightgray;
            height: 37px;
            width: 28%;
            border-radius: 5px;
            font-size: 17px;
            padding-left: 15px;
        }

        .first .img1 {
            margin-left: 33%;
            vertical-align: middle;
        }

        .second .input {
            margin-top: 20px;
            display: inline-block;
            border: 1px solid lightgray;
            height: 37px;
            width: 28%;
            border-radius: 5px;
            font-size: 17px;
            padding-left: 15px;
        }

        .second .img2 {
            margin-left: 32%;
            vertical-align: middle;
        }

        .submit {
            margin-top: 20px;
            margin-left: 36.5%;
            width: 28%;
            height: 42px;
            border: 1px solid lightgray;
            border-radius: 5px;
            background-color: #44B89D;
            color: white;
            font-size: 17px;
        }

        .submit:hover {
            background-color: #F5F6F9;
            color: black;
        }

        .last {
            padding-top: 20px;
            text-align: center;
            font-size: 18px;
        }

        .last a {
            text-decoration: none;
        }
    </style>

    <?php include 'connection.php' ?>

    <?php

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $selectquery = "SELECT * FROM regis WHERE email = '" . $email . "' and password = '" . $password . "' ";
        $result = mysqli_query($con, $selectquery);

        $row = mysqli_fetch_array($result);

        if ($row > 0) {
    ?>
            <div class="alert alert-success text-center" role="alert">
                Email and Password is are Same !...
            </div>
    <?php
        }else {
            ?>
            <div class="alert alert-danger text-center" role="alert">
                Email and Password is are not Same !...
            </div>
    <?php
        }
    }
    ?>


</head>

<body class="sub_page">


    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php">
                        <b style="color: white;">
                            Bookstore
                        </b>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link pl-lg-0" href="index.php">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categories.php">Categories</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="product.php"> Product <span class="sr-only">(current)</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                        <from class="search_form">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <button class="" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </from>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <div class="container">
        <h1>Login Form</h1>

        <h2>Login Now</h2>
        <p>Get started with your free login</p>

        <button class="button1">Login via Gmail</button><br>
        <button class="button2">Login via Facebook</button><br><br><br>
        <span>OR</span>
        <form action="" method="POST">
            <div class="first">
                <img src="images\email.png" class="img1" height="35px" ; width="35px" alt="">
                <input type="email" placeholder="Email Address" class="input" name="email" required>
            </div>
            <div class="second">
                <img src="images\password.png" class="img2" height="31px" ; width="45px" alt="">
                <input type="password" placeholder="Create Password" class="input" name="password" required>
            </div>
            <div>
                <button type="submit" name="submit" class="submit">
                    Login Now
                </button>
            </div>
            <div class="last">
                Don't Have an Account? <a href="register.php">Sign up </a>
            </div>
        </form>
    </div>
</body>

</html>