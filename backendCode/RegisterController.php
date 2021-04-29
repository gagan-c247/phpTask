<?php
include '../backendCode/db.php';
session_start();

$firstname= $_POST['fname'];
$lastname= $_POST['lname'];
$password =  $_POST['password'];
$email =  $_POST['email'];
$confirmpassword = $_POST['cpsw'];

if(empty($firstname) || empty($lastname) || empty($pasword) || empty($email)|| empty($confirmpassword) ){
    header('Location: http://localhost/Chapter247/php/login.php/');
    exit;
}
if($confirmpassword == $password){
$pasword = md5($password);
$sql = "INSERT INTO customer (firstname,lastname, email, password)
VALUES ('$firstname','$lastname', '$email' , '$password')";

if ($conn->query($sql) === TRUE) {
echo  "<script> alert('New record created successfully'); </script>";
  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
  header('Location: http://localhost/Chapter247/php/home.php/');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
