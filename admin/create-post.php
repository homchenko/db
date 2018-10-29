<?php
    include 'db.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users(name, password) VALUES('$name', '$password')";
        $result = mysqli_query($connection, $sql);
        if(!$result){
            die("Запрос не удался");
        }
    }
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
            <div class="col-md-4">
            
            </div>
            <div class="col-md-8">
                <form action="create_post.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                        <br>
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                        <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>