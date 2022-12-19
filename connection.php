<?php
    $servernae = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sooq";

        $con = new mysqli($servernae , $username , $password , $dbname);
        if($conn->connect_error){
            die("Connection Failed : " . $conn->connect_error);
        }
?>