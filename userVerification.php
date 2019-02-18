<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/styles.css">
</head>
<body>
<div class="header">
    <h1>Register here</h1>
</div>
<div class="one">
    <form action="fileOne.php" method="POST">
        Name:<input type="text" name="username"  class="form-group" required><br>
        Email:<input type="email" name="email"  class="form-group" required><br>
        Password:<input type="password" name="x"  class="form-group" required><br>
        Password again:<input type="password" name="y"  class="form-group" required><br>
        <input type="submit" name="btnsubmit" value="Register">
        <a href="login.php" class="btn btn-success">LOG IN</a>
    </form>
</div>
</body>
</html>