<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./res/css/bootstrap.min.css">
    <title>login</title>
</head>
<body class="bg-light">

    <?php include('./header.php'); ?>

    <form class="m-4 p-2" action="" method="post">
        <h2 class="text-center">login</h2>

        <label class="form-lable fw-bold">name:</label>
        <input type="text" class="form-control" name="name" placeholder="enter name" required>
        <br>
        <label class="form-lable fw-bold">password:</label>
        <input type="password" class="form-control" name="pass" placeholder="enter password" required>

        <input type="submit" class="btn btn-primary mt-5 col-1" name="submit" value="login">
        <a href="./reg.php" class="btn btn-success mt-5 col-1">register</a>

    </form>
    
</body>
</html>

<?php
    include('./conn.php');

    if(isset($_POST['submit']))
    {
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $pass=mysqli_real_escape_string($conn,$_POST['pass']);

        $sql="SELECT * from user WHERE name='$name' AND password='$pass'";
        $res=mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)>0)
        {
            header('location:info.php');
        }else{
            echo"login fail....?";
        }


    }
?>