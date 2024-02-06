<?php
include_once("db-config.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'email', 'password' from users where email='$email' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in sessio and redirect to sample page 1
    if ($user_matched > 0) {
        header("location: Addtocart.html");
    } else {
        echo "User email or password is not matched<br><br>";
    }
}
?>