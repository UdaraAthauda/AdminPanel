<?php include('./conn.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./res/css/bootstrap.min.css">
    <title>update</title>
</head>
<body class="bg-light">

    <?php include('./header.php'); ?>

    <?php
        $id=$_GET['id'];
        $sql1="SELECT * FROM student WHERE id='$id'";
        $res=mysqli_query($conn,$sql1);

        if(mysqli_num_rows($res)>0)
        {
            $row=mysqli_fetch_assoc($res);
        }
    ?>

    <form class="m-4 p-2" action="" method="post">
        <h2 class="text-center">update student</h2>

        <label class="form-lable fw-bold">name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
        <br>
        <label class="form-lable fw-bold">regNo:</label>
        <input type="text" class="form-control" name="reg" value="<?php echo $row['regNo']; ?>">
        <br>
        <label class="form-lable fw-bold">city:</label>
        <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>">

        <input type="submit" class="btn btn-success mt-5 col-2" name="submit" value="update">

    </form>
    
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $reg=mysqli_real_escape_string($conn,$_POST['reg']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);

        $sql="UPDATE student SET name='$name',regNo='$reg',city='$city' WHERE id='$id'";
        mysqli_query($conn,$sql);
        header('location:info.php');
    }
?>