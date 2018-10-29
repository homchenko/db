<?php
    $connection = mysqli_connect('localhost', 'root', '', 'myDataBase_dh');
    if(!$connection){
        die("Database connection failed");
    }
?>