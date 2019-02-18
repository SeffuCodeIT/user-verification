<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 10:59 AM
 */
if (isset($_GET['quantity'])){
    $conn = mysqli_connect("localhost","root","","userVerification");
    if (!$conn){
        echo "Failed to connect to DB";
    }else{
        extract($_GET);
        mysqli_query($conn,"DELETE FROM `items` WHERE id=$name");
        header("location:viewItems.php");
    }
}
?>