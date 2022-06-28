<!doctype html>
<html lang="en">

<head>
    <title>view cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .main-div {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .center-div {
            width: 90%;
            height: 80vh;
            background: -webkit-linear-gradient(left, #5DADE2, #7B7573);
            padding: 20px 0 0 0;
            box-sizing: 0 10px 20px 0 rgba(0, 0, 0, .03);
            border-radius: 10px;
            margin: auto;
        }

        h1 {
            font-size: 30px;
            color: #000;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .03);
            border-radius: 10px;
            margin: auto;
        }

        th,
        td {
            border: 1px solid #f2f2f2;
            padding: 8px 30px;
            text-align: center;
            color: gray;

        }

        th {
            text-transform: uppercase;
            font-weight: 500;
        }

        td {
            font-size: 13px;
        }

        .email-style {
            font-size: 14px;
            color: gray;
            display: inline-block;
            background: #f2f2f2;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            line-height: 30px;
            padding: 0 14px;
        }

        .post-class {
            text-transform: uppercase;
        }

        .fa {
            font-size: 18px;
        }

        .fa-edit {
            color: #63c76a;
        }

        .fa-trash {
            color: #ff0000;
        }

        a {
            text-decoration: none;
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>
    <?php session_start(); ?>
</head>

<body>

    <?php
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Add Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 pl-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="product.php">Product</a>
                </li>
            </ul> -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" style="margin: 0px 0px 0px 75%;">

                    <!-- checkout button -->
                    <button class="btn btn-primary d-flex" type="submit"><i class="fa fa-check text-light" style="font-size: 20px;"></i> <a href="colorlib-regform-12\colorlib-regform-12\checkoutform.php" style="text-decoration: none; color:white; padding-left:10px;">Checkout</a></button>

                    <!-- my cart button -->
                    <button class="btn btn-warning d-flex" style="margin-left: 20px;" type="submit"><i class="fa fa-shopping-cart text-light" style="font-size: 20px;"></i> <a href="product.php" style="text-decoration: none; color:white; padding-left:10px;">My Cart (<?php echo $count ?>)</a></button>

                </form>
            </div>
        </div>
    </nav>

    <div class="main-div">
        <h1>List of Add the product</h1>

        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>P Name</th>
                            <th>P Price</th>
                            <th>P Quantity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <th>.</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $ptotal = 0;
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
                                <td> <input type='number' name='PQuantity' class='form-control' value='$value[productQuantity]'> </td>
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
                    </tbody>

                </table>
            </div>

            <div class="card " style="width: 15rem;float:right; margin-right:45px; margin-top:20px;">
                <div class="card-body">
                    <h5 class="card-title text-muted">All Products Total :</h5>
                    <h5 class="card-subtitle mb-2 text-muted"><?php echo number_format($alltotal, 2) ?>$</h5>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>