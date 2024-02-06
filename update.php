<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "dreamcakes";
$con= new mysqli($hostname,$username,$password,$db);
if ($con->connect_error) {
die("Database Connection failed: " . $con->connect_error);
}
if(isset($_POST["submit"]))
{
    $code = $_POST["code"];
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $ingredients = $_POST['ingredients'];
    $price = $_POST['price'];
    $category = $_POST['category'];
$sql= "UPDATE products SET name='$name',weight='$weight',ingredients='$ingredients',price='$price',category='$category' WHERE code='$code'";
if($con->query($sql))
{
echo "<script>alert('Record Updates')</script>";
}
else {
echo "<script>alert('Record update failed ')</script>";
}
$con->close();
}
?>
