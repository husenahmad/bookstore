<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Bostorek</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <?php session_start(); ?>


    <style>
        body {
            background: linear-gradient(pink, lightblue);
        }

        .table1 {
            justify-content: center;
            align-items: center;
            border: 1px solid pink;
            text-align: center;
            position: relative;
            top: 10px;
            left: 420px;
            width: 500px;
        }

        .table2 {
            justify-content: center;
            align-items: center;
            border: 1px solid pink;
            text-align: center;
            position: relative;
            top: 10px;
            width: 100%;
        }

        .h11 {
            padding-top: 140px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;
            color: #28A745;
        }

        .h12 {
            padding-top: 50px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;
            color: #28A745;
        }

        .addcart {
            font-size: 18px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>

    <?php include 'connection.php'; ?>

</head>

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php">
                        <span>
                            Bookstore
                        </span>
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

    <?php
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 pl-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="product.php">Product</a>
                </li>
            </ul> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" style="margin: 0px 0px 0px 80%;">
                    <button class="btn btn-success" type="submit"><i class="fa fa-shopping-cart" style="font-size: 20px;"></i><a href="viewcart.php" style="text-decoration: none; color:white; padding-left:10px;">My Cart (<?php echo $count ?>)</a></button>
                    <!-- <button class="btn btn-warning" type="submit"><a href="viewcart.php" style="text-decoration: none; color:white;">View Cart</a></button> -->
                </form>
            </div>
        </div>
    </nav>

    <!-- product slider start -->

    <?php

    $selectquery = "SELECT * FROM product ";
    $result = mysqli_query($con, $selectquery);
    $row = mysqli_num_rows($result);

    if ($row) {
    ?>
        <div class="container d-flex justify-content-center mt-50 mb-50">
            <div class="row">
                <?php
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <!-- <div class="card col-lg-3 d-flex">
                        <a href="description.php?id=<?php echo $data['id']; ?>"><img class="card-img-top img-thumbnail " style="width: 150px; height: 210px; margin-left: 48px; " src="assest/<?php echo $data['image']; ?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <a href="description.php?id=<?php echo $data['id']; ?>" style="color: black; ">
                                <h5 class="card-title"> <?php echo $data['username']; ?> </h5>
                            </a>
                            <a href="description.php?id=<?php echo $data['id']; ?>" style="color: black; ">
                                <p class="card-text"> <?php echo $data['description'] ?> </p>
                            </a>
                            <a href="description.php?id=<?php echo $data['id']; ?>" style="color: black;">
                                <p class="card-text"> <?php echo $data['price'] ?> </p>
                            </a>
                        </div>
                    </div> -->
                    <div class="col-md-4 mt-2">
                        <form action="addcart.php" method="POST">
                            <div class="card" style="width: 300px; height:570px;">
                                <div class="card-body" style="box-shadow: 2px 2px 20px 5px lightgray;">
                                    <div class="card-img-actions">
                                        <a href="description.php?id=<?php echo $data['id']; ?>"><img class="card-img img-fluid" style="width: 150px; height: 210px; margin-left: 48px; " src="assest/<?php echo $data['image']; ?>" alt="Card image cap"></a>
                                        <a href="description.php?id=<?php echo $data['id']; ?>" style="color: black;">
                                            <h5 class="card-title mt-3"> <?php echo $data['username']; ?> </h5>
                                        </a>
                                        <a href="description.php?id=<?php echo $data['id']; ?>" style="color: black; ">
                                            <i>
                                                <p class="card-text"> <?php echo $data['description'] ?> </p>
                                            </i>
                                        </a>
                                        <a href="description.php?id=<?php echo $data['id']; ?>" style="color: black;">
                                            <b>
                                                <p class="card-text pt-2"> <?php echo $data['price'] ?> </p>
                                            </b>
                                        </a><br>
                                        <input type="hidden" name="PName" value="<?php echo $data['username']; ?>">
                                        <input type="hidden" name="PPrice" value="<?php echo $data['price']; ?>">
                                        <input type="number" name="PQuantity" placeholder="Add the quantity"><br><br>
                                        <button type="submit" name="addcart" class="btn btn-danger "><i class="fa fa-shopping-cart "> <b class="addcart"> Add to Cart </b></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger text-center" role="alert">
            Data Dosen't Displayed !...
        </div>
    <?php
    }

    ?>

    <!-- product slider end -->

    <!-- info section -->
    <section class="info_section layout_padding2" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 info-col">
                    <div class="info_detail">
                        <h4>
                            About Us
                        </h4>
                        <p>
                            Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos atque asperiores incidunt vel voluptate iste
                        </p>
                        <div class="info_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                    <div class="info_contact">
                        <h4>
                            Address
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +91 9157037748
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    sunasarahusenahmad07@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                    <div class="info_contact">
                        <h4>
                            Newsletter
                        </h4>
                        <form action="#">
                            <input type="text" placeholder="Enter email" />
                            <button type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="#">Sunasara Husenahmad</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
    <!-- slider script link -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- start script code -->


    <!-- end script code -->
</body>

</html>