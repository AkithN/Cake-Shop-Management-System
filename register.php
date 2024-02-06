<?php
//include the database connection file 
include_once("db-config.php");

//check if form submitted, insert user data into database.

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    //if email already exists,throw error
    $email_result = mysqli_query($mysqli,"select 'email' from users where email='$email' and password ='$password' ");

    //Count the number of row matched
    $user_matched = mysqli_num_rows($email_result);

    //if number count of user rows returned more than  0< it means email already exists
    if($user_matched > 0 )
    {
        echo " <br/><br/><strong>Error: </strong> User already exists with the email id '$email'. ";
    }
    else
    {
        //insert user data into data base
        $result = mysqli_query($mysqli,"INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");

        //check if user data inserted successfully.
        if($result)
        {
            echo "<br/><br/>User registered successfully.";
            header("location: login.html");
        }
        else
        {
            echo "Registration error. Please try again." . mysqli_error($mysqli);
        }
    }
}
?>