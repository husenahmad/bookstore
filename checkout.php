<!-- <?php

include 'connection.php';

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $country = $_POST['country'];
    $state = $_POST['state'];

    $insertquery = "INSERT INTO checkout (firstname, lastname, email, password, address, address2, country, state) VALUES ('$firstname', '$lastname', '$email', '$password', '$address', '$address2', '$country', '$state')";

    $result = mysqli_query($con, $insertquery);

    if ($result) {
?>
        <div class="alert alert-success text-center" role="alert">
            Data Displayed Successfully!...
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger text-center" role="alert">
            Data Dosen't Displayed !...
        </div>
<?php
    }
}

?> -->


<!doctype html>
<html lang="en">

<head>
    <title>Checkout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
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
                    <button class="btn btn-success" type="submit"><i class="fa fa-shopping-cart" style="font-size: 20px;"></i><a href="viewcart.php" style="text-decoration: none; color:white; padding-left:10px;">My Cart</a></button>
                    <!-- <button class="btn btn-warning" type="submit"><a href="viewcart.php" style="text-decoration: none; color:white;">View Cart</a></button> -->
                </form>
            </div>
        </div>
    </nav>

    <!-- <div>
        <?php
        $alltotal = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
                $ptotal = ((int)$value['productPrice'] * (int)$value['productQuantity']);
                $alltotal += ((int)$value['productPrice'] * (int)$value['productQuantity']);
                echo "
                <form action='addcart.php' method='POST'>
                <tr>
                <td>$key</td>
                <td> <input type='hidden' name='PName' value='$value[productName]'> $value[productName] </td>
                <td> <input type='hidden' name='PPrice' value='$value[productPrice]'> $value[productPrice] </td>
                <td> <input type='text' name='PQuantity' class='form-control' value='$value[productQuantity]'> </td>
                <td>$ptotal$</td>
                <td><button class='btn btn-success' name='update'> <i class='fa fa-edit text-light' aria-hidden='true'></i> </button></td>
                <td><button class='btn btn-danger' name='remove'> <i class='fa fa-trash text-light' aria-hidden='true'></i> </button></td>
                <td><input type='hidden' name='item' value='$value[productName]'></td>
                </tr>
                </form>
                ";
            }
        }
        ?>
        <div class="card " style="width: 15rem;float:right; margin-right:60px; margin-top:20px;">
            <div class="card-body">
                <h5 class="card-title text-muted">All Products Total :</h5>
                <h5 class="card-subtitle mb-2 text-muted"><?php echo number_format($alltotal, 2) ?>$</h5>
            </div>
        </div>
    </div> -->

    <!-- form in checkout -->

    <section style="margin-top: 50px; background-image: url('images/'); background-size:cover; width:100%; height: 100%;">
        <form method="POST">
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Firstname</label>
                <input type="text" class="form-control" name="firstname" id="inputFirstname" style="border: 1px solid blue;" required>
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname" id="inputLastname" style="border: 1px solid blue;" required>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" style="border: 1px solid blue;" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword4" style="border: 1px solid blue;" required>
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" style="border: 1px solid blue;" required>
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor" style="border: 1px solid blue;">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Country</label>
                <input type="text" class="form-control" id="inputCountry" name="country" style="border: 1px solid blue;" required>
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">State</label>
                <input type="text" class="form-control" id="inputState" name="state" style="border: 1px solid blue;" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success" name="submit" style="margin-left: 3%; margin-top:2%;width: 15%;">Sign in</button>
                <a href="confirmform.php"><button type="submit" class="btn btn-warning" name="confirm" style="margin-left: 9%; margin-top:2%;width: 15%;">Confirm Form</button></a>
            </div>
        </form>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>