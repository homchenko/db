<?php
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <h1><a href="create-posts.php">Create post</a></h1>
                <?php 
                    $quary = 'SELECT * FROM users';
                    $result = mysqli_query($connection, $quary);
                    if(!$result){
                        die("Query failed" . mysqli_error());
                    }
                ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Password</td>
                    </tr>
                
                <?php
                    while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        <td><?= $row['id']?></td>
                        <td><?= $row['name']?></td>
                        <td><?= $row['password']?></td>
                    </tr>
                        
                    <?php }
                ?>
                </table>   
            </div>
        </div>
    </div>  
</body>
</html>
