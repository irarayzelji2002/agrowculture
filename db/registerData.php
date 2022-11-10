<?php
  require_once '../config.php';
  $upload_dir= '../user_identification/';

  if (isset($_POST['Submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']); //MD5 encryption
  $user_type = $_POST['user_type'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $business_name = $_POST['business_name'];

      $imgName = $_FILES['image']['name'];
      $imgTmp = $_FILES['image']['tmp_name'];
      $imgSize = $_FILES['image'] ['size'];

      if(empty($first_name)){
        $errorMsg ='Please input your first name';
      }else if(empty($last_name)){
        $errorMsg ='Please input your last name';
      }else if(empty($email)){
        $errorMsg ='Please input your email';
      }else if(empty($password)){
        $errorMsg ='Please input your password';
      }else if(empty($user_type)){
        $errorMsg ='Please input your type';
      }else if(empty($phone_number)){
        $errorMsg ='Please input your phone number';
      }else if(empty($address)){
        $errorMsg ='Please input your address';
      }
      else{

        $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    
        $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
  
        $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

        if(in_array($imgExt, $allowExt)){
    
          if($imgSize < 5000000){
            move_uploaded_file($imgTmp ,$upload_dir.$userPic);
          }else{
            $errorMsg = 'Image too large';
          }
        }else{
          $errorMsg = 'Please select a valid image';
        }
      }

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
    `address`,
    `v_image`,
    `v2_image`

) 
  VALUES (
          '".$first_name."',
          '".$last_name."', 
          '".$email."',
          '".$password."' ,
          '".$business_name."' , 
          '".$user_type."', 
          '".$phone_number."', 
          '".$address."',
          '".$userPic."',
          '".$userPic."'

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
}
