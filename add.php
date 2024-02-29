<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./res/css/bootstrap.min.css">
    <title>add</title>
</head>
<body class="bg-light">

    <?php include('./header.php'); ?>

    <form class="m-4 p-2" action="" method="post">
        <h2 class="text-center">add student</h2>

        <label class="form-lable fw-bold">name:</label>
        <input type="text" class="form-control" name="name" placeholder="enter name" required>
        <br>
        <label class="form-lable fw-bold">regNo:</label>
        <input type="text" class="form-control" name="reg" placeholder="enter regNo" required>
        <br>
        <label class="form-lable fw-bold">city:</label>
        <input type="text" class="form-control" name="city" placeholder="enter city" required>

        <input type="submit" class="btn btn-primary mt-5 col-2" name="submit" value="add">

    </form>
    
</body>
</html>

<?php
    include('./conn.php');

    if(isset($_POST['submit']))
    {
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $reg=mysqli_real_escape_string($conn,$_POST['reg']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);

        $sql="INSERT INTO student(name,regNo,city) VALUES('$name','$reg','$city')";
        mysqli_query($conn,$sql);
        header('location:info.php');

    }
?>