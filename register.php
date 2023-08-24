<?php

include "connection.php";

print_r($_POST);
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO user (`name`,`username`, `email`, `password`) VALUES ('$name', '$username', '$email', '$password')";
echo $sql;
if($result=mysqli_query($conn,$sql)){ 
    header("Location: form.html");
}else{
    echo $conn->connect_error;
    die;
}

// $sql= 'Select * from `user`';



?>