<?php

$host = 'localhost' ;
$user = 'root';
$password = '';
$database = 'soma';

//connection
$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

//registration process
if(isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM students WHERE email='$email'";
  $result = mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($result) == 0){
    //HASHING A PASSWORD
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);
    // $hashed_password = md5($password);

    //inserting into db
    $sql = "INSERT INTO students(name,email,password) 
            VALUES('$name','$email','$hashed_password')";

    mysqli_query($conn,$sql);

    header('location:soma.php');

  }else{
    echo 'user already exists';
  }
}


// login process

 