<?php 
    include('./conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./res/css/bootstrap.min.css">
    <title>info page</title>
</head>
<body class="bg-light">
    <?php include('./header.php'); ?>

    <a href="./add.php" class="btn btn-secondary m-3">add student</a>

    <table class="table m-4">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>regNo</th>
                <th>city</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql="SELECT * FROM student";
                $res=mysqli_query($conn,$sql);

                if(mysqli_num_rows($res)>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        
                        $id=$row['id'];
            ?>            
                       <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['regNo'];?></td>
                        <td><?php echo $row['city'];?></td>
                        <td>
                            <a href="./update.php?id=<?php echo $id ?>" class="btn btn-primary btn-sm">update</a>
                            <a href="./delete.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm">delete</a>
                        </td>    
                       </tr>

                    <?php    
                    }
                }
            ?>
        </tbody>

    </table>

</body>
</html>