<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bostorek</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"></script>

    <style>
        .table1 {
            justify-content: center;
            align-items: center;
            border: 1px solid pink;
            text-align: center;
            position: relative;
            top: 10px;
            left: 220px;
            width: 900px;
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
            padding-top: 40px;
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

    </style>

    <?php include 'connection.php'  ?>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bookstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" style="margin: 0px 0px 0px 80%;">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus" aria-hidden="true"></i><a href="addproduct.php" style="text-decoration: none; color:white; padding-left: 10px;">Add Book</a></button>
                </form>
            </div>
        </div>
    </nav>


    <table class="table1 table table-dark table-borderless" id="search" cellpadding="20px" cellspacing="0">
        <h1 class="h11">Product List</h1>
        <thead>
            <tr>
                <th scope="col">BookName</th>
                <th scope="col">BookImage</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <?php

        $selectquery = "SELECT * FROM product";
        $result = mysqli_query($con, $selectquery);

        $data = mysqli_num_rows($result);
        if ($data) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $row['username']; ?></td>
                        <td scope="row"><img src="assest/<?php echo $row['image']; ?>" style="width: 90px; height: 120px;"></td>
                        <td scope="row"><?php echo $row['price']; ?></td>
                        <td scope="row"><?php echo $row['description']; ?></td>
                        <td scope="row"><a href="productupdate.php?id=<?php echo $row['id']; ?>"><button name="update" class="btn btn-success update"><i class="fa fa-edit"></i></button></a></td>
                        <td scope="row"><a onclick="return confirm('Are you sure, you want to data delete !...')" href="productdelete.php?id=<?php echo $row['id']; ?>"><button name="delete" class="btn btn-danger delete"><i class="fa fa-trash"></i></button></a></td>

                        <!-- <button name="delete" class="btn btn-danger">Delete</button> -->
                    </tr>
                </tbody>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Data Dosen't Displayed!...")
            </script>
        <?php
        }

        ?>

    </table>
<!-- 
    <table class="d-lg-none table2" cellpadding="20px" cellspacing="0">
        <h1 class="d-lg-none h12">Product List</h1>
        <tr>
            <th>BookName</th>
            <th>BookImage</th>
            <th>Price</th>
            <th>Description</th>
        </tr>

        <?php

        $selectquery = "SELECT * FROM product";
        $result = mysqli_query($con, $selectquery);

        $data = mysqli_num_rows($result);
        if ($data) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><img src="assest/<?php echo $row['image']; ?>" style="width: 90px; height: 120px;"></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                </tr>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Data Dosen't Displayed!...")
            </script>
        <?php
        }

        ?>

    </table> -->

</body>

</html>