<?php 
    include('./conn.php');

    $id=$_GET['id'];
    $sql="DELETE FROM student WHERE id='$id'";
    mysqli_query($conn,$sql);
    header('location:info.php');
?>