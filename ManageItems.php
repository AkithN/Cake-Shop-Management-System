<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "dreamcakes";
$con= new mysqli($hostname,$username,$password,$db);
// Check connection
if ($con->connect_error) {
die("Database Connection failed: " . $con->connect_error);
}

if ($con->connect_error) {
    die("Database Connection failed: " . $con->connect_error);
    }
    if(isset($_POST["submit"])){
    $code = $_POST["code"];
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $ingredients = $_POST['ingredients'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $sql= "INSERT INTO products VALUES('$code','$name','$weight','$ingredients','$price','$category')";
    if($con->query($sql))
    {
    echo "<script>alert('Record inserted ')</script>";
    }
    else {
    echo "<script>alert('Record insert failed ')</script>";
    }
    $con->close();
    }
    ?>
        