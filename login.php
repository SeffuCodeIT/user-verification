<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/14/19
 * Time: 10:24 AM
 */
session_start();
$conn = mysqli_connect("localhost","root","","userVerification");
if (isset($_POST['btnlogin'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $password == md5($password);
    $result = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password' ");

    if (mysqli_num_rows($result)==$result){
        echo "you are logged in";
        header("location:home.php");
    }else{
        echo "wrong username or password";

    }
}

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/styles.css">
</head>
<body>
<div class="header">
    <h1>Log in</h1>
</div>
<div class="one">
    <form action="login.php" method="POST">
        Name:<input type="text" name="username"  class="form-group"><br>
        Password:<input type="password" name="password"  class="form-group"><br>
        <input type="submit" name="btnlogin" value="login">
    </form>
</div>
</body>
</html>