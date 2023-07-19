<?php
include ('connect.php');
$name = $_POST['name'];
$email = $_POST['email'];
$message =$_POST['message'];
$phone = $_POST['phone'];


 $query = "INSERT INTO `users`(`name`, `email`, `message`, `phone`)
 VALUES ('$name','$email','$message','$phone')";

if(mysqli_query($conn,$query)){
    echo "Data Inserted Succeafully!";
}


?>