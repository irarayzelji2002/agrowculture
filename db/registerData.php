<?php
  require_once '../config.php';

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']); //MD5 encryption
  $user_type = $_POST['user_type'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $business_name = $_POST['business_name'];
  
  //parse uploaded file
  // $image = $_FILES['image'];
  //1. save the file name in the database
  //2. upload / move the uploaded file into a specific folder

  //Insert SQL
  $sql = 
  " INSERT INTO `users`(
    `first_name`,
    `last_name`,
    `email`,
    `password`,
    `business_name`,
    `user_type`,
    `phone_number`,
    `address`
)  
  VALUES (
          '".$first_name."',
          '".$last_name."', 
          '".$email."',
          '".$password."' ,
          '".$business_name."' , 
          '".$user_type."', 
          '".$phone_number."', 
          '".$address."' 
        )";
       
        
  //Execute SQL
  if (mysqli_query($conn, $sql)) {
    header('Location:../login.php');
  } else {
     mysqli_error($conn);
     
     header('Location: ../signup.php?authenticate=false');
  }
  echo $sql;

  //CLOSE DATABASE CONNECTION
  mysqli_close($conn);
