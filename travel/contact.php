<?php

include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
   
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    
    $sql = "INSERT INTO `msg` (`name`,  `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert ('$name successfully sent message ') </script>";
        
    }
    header('location: home.php');
    }
   
   mysqli_close($conn);
    ?>

