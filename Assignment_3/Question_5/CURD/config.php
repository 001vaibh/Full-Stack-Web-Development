<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'web';

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
   
    if($conn == false){
        echo "Connection Failed..." + mysqli_connect_error();
    }
?>