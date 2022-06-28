<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookstore</title>

    <link rel="stylesheet" href="css/login.css">

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
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#03e9f4, #06373F);
        }
    </style>

    <?php include 'connection.php'  ?>

    <!-- fetch the row start -->
    <?php

    $id = $_GET['id'];
    $selectquery = "SELECT * FROM product WHERE id='$id' ";
    $result = mysqli_query($con, $selectquery);
    $row = mysqli_fetch_array($result);

    ?>
    <!-- fetch the row end -->


    <!-- update query start -->

    <?php

    if (isset($_POST['update'])) {

        $username = $_POST['username'];

        if (isset($_FILES['image'])) {

            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];

            if (move_uploaded_file($file_tmp, "assest/" . $file_name)) {
    ?>
                <script>
                    alert("File is Uploaded!...")
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("File Dosen't Uploaded!...")
                </script>
            <?php
            }
        }

        $price = $_POST['price'];
        $description = $_POST['description'];

        $updatequery = "UPDATE product SET username='$username', image='$file_name', price='$price', description='$description' WHERE id='$id' ";
        $result = mysqli_query($con, $updatequery);

        if ($result) {
            ?>
            <script>
                alert("Data Updated Successfully!...")
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Data Dosen't Updated!...")
            </script>
    <?php
        }
    }
    ?>

    <!-- update query end -->

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
                    <button class="btn btn-primary" type="submit"><a href="productdisplay.php" style="text-decoration: none; color:white;">Veiw The Product</a></button>
                </form>
            </div>
        </div>
    </nav>
    
    <!-- form section -->
    <!-- <form method="POST" enctype="multipart/form-data" style="margin: 50px; margin-left: 25%;">
        <h1 class="text-light">Choose The Product</h1><br><br>
        <div class="form-group">
            <label for="exampleInputEmail1">Bookname :</label>
            <input type="text" class="form-control w-50" id="exampleInputPassword1" placeholder="Enter your Bookname" name="username" value="<?php echo $row['username'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Product :</label>
            <input type="file" class="form-control w-50 text-center" id="exampleInputPassword1" placeholder="Choose your products" name="image" value="<?php echo $row['image'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price :</label>
            <input type="text" class="form-control w-50" id="exampleInputPassword1" placeholder="Enter your Price" name="price" value="<?php echo $row['price'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description :</label>
            <input type="text" class="form-control w-50" id="exampleInputPassword1" placeholder="Enter your Description" name="description" value="<?php echo $row['description'] ?>">
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="update" class="btn btn-success">Submit</button>
    </form> -->

    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Update the Data</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="inputbox">
                            <input type="text" placeholder="📖 Enter your Bookname" name="username" value="<?php echo $row['username'] ?>">
                        </div>
                        <div class="inputbox">
                            <input type="file" placeholder="📂 Choose your products" name="image" value="<?php echo $row['image'] ?>">
                        </div>
                        <div class="inputbox">
                            <input type="text" placeholder="$ Enter your Price" name="price" value="<?php echo $row['price'] ?>">
                        </div>
                        <div class="inputbox">
                            <input type="text" placeholder="✎ Enter your Description" name="description" value="<?php echo $row['description'] ?>">
                        </div>
                        <div class="inputbox">
                            <input <button type="submit" name="update"></button>
                        </div>
                        <p class="forgot">Forgot password ?<a href="#">Click Here</a></p>
                        <p class="forgot">Don't have an account? <a href="#">Sing up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- form section end -->
</body>

</html>