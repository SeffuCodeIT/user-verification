<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="home.php" class="btn btn-outline-success">Add Item</a>
<table class="table table-striped table-hover table-dark">
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 2/12/19
     * Time: 10:34 AM
     */
    $conn = mysqli_connect("localhost","root","","userVerification");
    if(!$conn){
        echo "DB not found";
    }else{
        $fetch = mysqli_query($conn,"SELECT * FROM items");
        if(!$fetch){
            echo "Fetching failed";
        }else{
            while ($row = mysqli_fetch_assoc($fetch)){
                extract($row);
                echo "
              <tr>
                    <td>$name</td>
                    <td>$quantity</td>
                    <td>$price</td>
                    <td><a href='delete.php?x= $id' class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php?y= $id' class='btn btn-success'>Update</a></td>
              </tr>
               ";
            }
        }
    }

    ?>
</table>
</body>
</html>