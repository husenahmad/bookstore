<!doctype html>
<html lang="en">

<head>
    <title>Mycart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <?php session_start(); ?>

</head>

<body>

    <!-- <?php
            $count = 0;
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            ?> -->

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pl-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="product.php">Product</a>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" style="margin: 0px 0px 0px 80%;">
                    <button class="btn btn-success" type="submit"><i class="fa fa-shopping-cart" style="font-size: 20px;"></i><a href="viewcart.php" style="text-decoration: none; color:white; padding-left:10px;">My Cart (<?php echo $count ?>)</a></button>
                </form>
            </div>
        </div>
    </nav> -->

    <!-- product cart code with start -->

    <?php

    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];


    if (isset($_POST['addcart'])) {

        // ek hi product dusri bar nahi mangani ho to ye alert vala code likhe

        // $checkitem = array_column($_SESSION['cart'], 'productName');
        // if (in_array($product_name, $checkitem)) {
        //     echo "
        //                     <script>
        //                         alert('Product already added !...');
        //                         window.location.href = 'product.php';
        //                     </script>
        //                     ";
        // } else {
        $_SESSION['cart'][] = array(
            'productName' => $product_name,
            'productPrice' => $product_price,
            'productQuantity' => $product_quantity
        );
        header('location: viewcart.php');
    }
    // }

    // // remove product 

    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['productName'] === $_POST['item']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location:viewcart.php');
            }
        }
    }

    // // update product

    if (isset($_POST['update'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['productName'] === $_POST['item']) {
                $_SESSION['cart'][$key] = array(
                    'productName' => $product_name,
                    'productPrice' => $product_price,
                    'productQuantity' => $product_quantity
                );
                header('location: viewcart.php');
            }
        }
    }


    ?>

    <!-- product cart code with end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>