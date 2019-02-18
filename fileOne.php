<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/14/19
 * Time: 10:24 AM
 */
session_start();
$conn = mysqli_connect("localhost","root","","userVerification");
if (isset($_POST['username'])){
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = mysqli_real_escape_string($_POST['x']);
    $password2 = mysqli_real_escape_string($_POST['y']);
    if ($password == $password2){
//        create user
        $password = md5($password);
        $insert = mysqli_query($conn,"INSERT INTO `users`(`id`, `name`, `email`, `password`) VALUES (null,'$username','$email','$password')");
        header("location:login.php");
    }else{
//        failed
        echo "No matching password";
    }


    if (!$conn){
        echo "failed to connect";
    }else{

        if (!$insert){
            echo "failed to save1";
        }else{
            echo "$name saved succesfully";
            echo "<a href='user_Save.php'>Add user </a>";

        }
    }
}


?>