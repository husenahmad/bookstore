<?php include 'connection.php'  ?>

<?php

$id = $_GET['id'];
$deletequery = "DELETE FROM product WHERE id='$id' ";
$result = mysqli_query($con, $deletequery);

if ($result) {
?>
    <script>
        alert("Data Deleted Successfully !...");
        window.open("http://localhost/bookstore/productdisplay.php", "_self");
    </script>
<?php
} else {
?>
    <script>
        alert("Data not Deleted !...");
    </script>
<?php
}

?>