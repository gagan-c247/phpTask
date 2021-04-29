<?php

include '../backendCode/db.php';
session_start();

$email= $_POST['email'];
$password =  $_POST['password'];


$sql = "SELECT  firstname,lastname, email, password FROM customer";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($email == $row['email'] && $password == $row['password']){
            echo  "<script> alert('You log in successfully'); </script>";
            $_SESSION['firstname'] = $row["firstname"];
            $_SESSION['lastname'] = $row["lastname"];
            header('Location: http://localhost/Chapter247/php/home.php/');
            exit;
        }
    }
} 
echo  "<script> alert('Try again latter'); </script>";
header('Location: http://localhost/Chapter247/php/login.php/');
exit;