<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./res/css/bootstrap.min.css">
    <title>register</title>
</head>
<body class="bg-light">

    <?php include('./header.php'); ?>

    <form action="" class="m-4 p-2" method="post">

        <h2 class="text-center">user register</h2>

        <label class="form-lable fw-bold">user name:</label>
        <input type="text" class="form-control" name="name" placeholder="enter user name">
        <br>
        <label class="form-lable fw-bold">password:</label>
        <input type="text" class="form-control" name="pass" placeholder="enter password">

        <input type="submit" class="btn btn-success mt-5 col-2" name="submit" value="register">

    </form>
</body>
</html>

<?php 
    include('./conn.php');

    if(isset($_POST['submit']))
    {
        $un=mysqli_real_escape_string($conn,$_POST['name']);
        $pass=mysqli_real_escape_string($conn,$_POST['pass']);

        $sql="INSERT INTO user(name,password) VALUES ('$un','$pass')";
        mysqli_query($conn,$sql);
        header('location:login.php');
    }
?>