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
if(isset($_POST["submit"])){
$code = $_POST["code"];
$sql= "DELETE FROM products WHERE code='$code'";
if($con->query($sql))
{
echo "<script>alert('Record deleted ')</script>";
}
else {
echo "<script>alert('Record delete failed ')</script>";
}
$con->close();
}
?>
