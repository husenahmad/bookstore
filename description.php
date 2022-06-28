<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Description</title>
    <style>
        .font {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .border {
            border-radius: 20px 20px 20px 20px;
            /* border-radius: 92% 8% 89% 11% / 9% 90% 10% 91%; */
            border: 10px solid lightgray;
        }

        .btn {
            background: linear-gradient(to bottom, #d465ef 0%, #615cfd 100%);
            border: 1px solid lightblue;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        button:hover {
            background: linear-gradient(to bottom, #615cfd 0%, #d465ef 100%);
        }
    </style>
</head>

<body style="background: linear-gradient(pink, lightblue); height:100%;">

    <?php

    include 'connection.php';

    $id = $_GET['id'];

    $selectquery = "SELECT * FROM product WHERE id='$id' ";
    $result = mysqli_query($con, $selectquery);
    $data = mysqli_fetch_array($result);

    ?>

    <div>
        <img src="assest/<?php echo $data['image']; ?>" class="border" alt="" height="380px" width="300px" style="margin: 5% 15% 0px 5%;"><br><br><br>

        <div class="font" style="font-size: 18px; padding-left: 70px;">
            <?php ?> Title of Book : <?php echo  $data['username']; ?><br><br>
            <?php ?> Price of Book : <?php echo $data['price']; ?><br><br>
            <?php ?> Description of Book : <?php echo $data['description']; ?><br><br>
            <button class="btn" style="width: 200px; height: 45px;"><a href="product.php" style="text-decoration: none; color:white; font-size:16px;"> Viwe the Product</a></button>
        </div>
    </div>
</body>

</html>