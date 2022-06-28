<!doctype html>
<html lang="en">

<head>
    <title>Add product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login.css">

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

    <?php


    if (isset($_POST['submit'])) {

        $username = $_POST['username'];

        if (isset($_FILES['image'])) {

            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];

            if (move_uploaded_file($file_tmp, "assest/" . $file_name)) {
    ?>
                <div class="alert alert-success text-center" role="alert">
                    File is Uploaded !...
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger text-center" role="alert">
                    File Dose't Uploaded !...
                </div>
    <?php
            }
        }

        $price = $_POST['price'];
        $description = $_POST['description'];

        $insertquery = "INSERT INTO product(username, image, price, description) VALUES('$username', '$file_name', '$price', '$description')";

        $result = mysqli_query($con, $insertquery);
    }
    ?>

</head>

<body style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;">

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
            <input type="text" class="form-control w-50" id="exampleInputPassword1" placeholder="Enter your Bookname" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Product :</label>
            <input type="file" class="form-control w-50 text-center" id="exampleInputPassword1" placeholder="Choose your products" name="image">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price :</label>
            <input type="text" class="form-control w-50" id="exampleInputPassword1" placeholder="Enter your Price" name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description :</label>
            <input type="text" class="form-control w-50" id="exampleInputPassword1" placeholder="Enter your Description" name="description">
        </div>
        
             <div class="form-group">
            <label for="exampleInputPassword1">Price :</label>
            <input type="text" class="form-control w-50 text-center" id="exampleInputPassword1" placeholder="Enter your price" name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description :</label>
            <input type="text" class="form-control w-50 text-center" id="exampleInputPassword1" placeholder="Enter your Description" name="description">
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
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
                    <h2>Login Form</h2>
                    <form action=""  method="POST" enctype="multipart/form-data">
                        <div class="inputbox">
                            <input type="text" placeholder="📖 Enter your Bookname" name="username">
                        </div>
                        <div class="inputbox">
                            <input type="file" placeholder="📂 Choose your products" name="image">
                        </div>
                        <div class="inputbox">
                            <input type="text" placeholder="$ Enter your Price" name="price">
                        </div>
                        <div class="inputbox">
                            <input type="text" placeholder="✎ Enter your Description" name="description">
                        </div>
                        <div class="inputbox">
                            <input <button type="submit" name="submit"></button> 
                        </div>
                        <p class="forgot">Forgot password ?<a href="#">Click Here</a></p>
                        <p class="forgot">Don't have an account? <a href="#">Sing up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- form section end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>