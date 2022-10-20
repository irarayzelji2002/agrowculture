<?php

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']); //MD5 encryption
  $birth_month = $_POST['birth_month'];
  $birth_day = $_POST['birth_day'];
  $birth_year = $_POST['birth_year'];
  $user_type = $_POST['user_type'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $region = $_POST['region'];
  $zip = $_POST['zip'];
  //parse uploaded file
  // $image = $_FILES['image'];
  //1. save the file name in the database
  //2. upload / move the uploaded file into a specific folder

  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root"; //xampp default
  $db_password = "";  //xampp default
  $database = "agrowculture"; //name of database

  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

  //2. Insert SQL
  $sql = 
  " INSERT INTO `users`(
    `first_name`, 
    `last_name`, 
    `email`, 
    `password`, 
    `birth_month`, 
    `birth_day`, 
    `birth_year`, 
    `user_type`, 
    `phone_number`, 
     `address`, 
    `city`, 
    `region`, 
    `zip`)  
  VALUES (
          '".$first_name."',
          '".$last_name."', 
          '".$email."',
          '".$password."' ,
          '".$birth_month."', 
          '".$birth_day."', 
          '".$birth_year."', 
          '".$user_type."', 
          '".$phone_number."', 
          '".$address."', 
          '".$city."', 
          '".$region."', 
          '".$zip."' 
        )";
  //3. Execute SQL
  if (mysqli_query($conn, $sql)) {
    header('Location:../login.php');
  } else {
     mysqli_error($conn);
     
     header('Location: ../signup.php?authenticate=false');
  }
  echo $sql;
  //.4 Closing Database Connection
  mysqli_close($conn);
  

?>