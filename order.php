<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "sooq";

     $con = new mysqli($servername , $username , $password , $dbname);
     if($con->connect_error){
         die("Connection Failed : " . $con->connect_error);
     } else {
// include_once("connection.php");
    $id = $_GET['id'];
    $title = $_GET['title'];
    $price = $_GET['price'];
    $quantity = $_GET['quantity'];
    $stmt = $con->prepare("INSERT INTO  cart(id,Title,Price,Quantity) VALUES(?,?,?,?)");
    $stmt->bind_param("issi",$id,$title,$price,$quantity);
    $stmt->execute();
    header('Location: Sooq.php?note=The Order Has Been Sent');
    exit;
    // $sql = "INSERT INTO cart(id,Title,Price,Quantity) VALUES ($id , $title , $price , $quantity)";   
    // if($con->affected_rows>0){
    //     header('Location: Sooq.php');
    //     exit;
    // }else{
    // echo "No";
    // }
}
?>