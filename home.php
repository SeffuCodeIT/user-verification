
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/14/19
 * Time: 11:45 AM
 */
session_start();
$conn = mysqli_connect("localhost","root","","userVerification");
if (isset($_POST['btnsubmit'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    if (!$conn){
        echo "not connected";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `items`(`id`, `item name`, `quantity`, `price`) VALUES (null,'$name','$quantity','$price')");
        if (!$insert){
                echo "insertion failed";
        }else{
            echo "Item saved successfully";
            header("location:home.php");
        }
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
    <title>Items</title>
</head>
<body>
<form action="home.php" method="POST">
    Item name:<input type="text" name="name"><br>
    Quantity:<input type="number" name="quantity"><br>
    Selling price:<input type="number" name="price"><br>
    <input type="submit" name="btnsubmit" value="Enter item">
    <a href="viewItems.php">view items</a>
</form>
</body>
</html>