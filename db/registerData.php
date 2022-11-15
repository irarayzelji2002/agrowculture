<?php
  require_once '../config.php';
  $upload_dir= '../user_identification/';

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
  $phoneVal = strlen($phone_number);
  $passVal = strlen($password);

  if(empty($first_name)){
    $errorMsg ='Please input your first name';
    header('Location: ../reg-form.php?authenticate=false');
  }
  else if(empty($last_name)){
    $errorMsg ='Please input your last name';
    header('Location: ../reg-form.php?authenticate=false');
  }
  else if(empty($email)){
    $errorMsg ='Please input your email';
    header('Location: ../reg-form.php?authenticate=false');
  }
  else if(empty($password)){
    $errorMsg ='Please input your password';
    header('Location: ../reg-form.php?authenticate=false');
  }
 else if($passVal<=8){
    $errorMsg ='Your password has a minimum length of 8';
    echo $errorMsg;
    echo $passVal;
    header('Location: ../reg-form.php?authenticate=false');
  }
  elseif(empty($user_type)){
    $errorMsg ='Please input your type';
    header('Location: ../reg-form.php?authenticate=false');
  }
 else if(empty($phone_number) || ($phoneVal<11) || ($phoneVal>11)){
    $errorMsg ='Your Phone Number must be 11 digits';
    header('Location: ../reg-form.php?authenticate=false');
  }
  else if(empty($address)){
    $errorMsg ='Please input your address';
    header('Location: ../reg-form.php?authenticate=false');
  }
  else {
    if (isset($_POST['Submit']))
    {
      $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    
        $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
  
        $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

        if(in_array($imgExt, $allowExt)){
    
          if($imgSize < 5000000){
            move_uploaded_file($imgTmp ,$upload_dir.$userPic);
          }else{
            $errorMsg = 'Image too large';
          }
        }
        else
        {
          $errorMsg = 'Please select a valid image';
        }

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
  } else {
     mysqli_error($conn);
     header('Location: ../reg-form.php?authenticate=false');
  }
  echo $sql;

  //CLOSE DATABASE CONNECTION
  mysqli_close($conn);
    } // END OF MAIN IF
  }
  

  // if (isset($_POST['Submit'])) {

  //       $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    
  //       $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
  
  //       $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

  //       if(in_array($imgExt, $allowExt)){
    
  //         if($imgSize < 5000000){
  //           move_uploaded_file($imgTmp ,$upload_dir.$userPic);
  //         }else{
  //           $errorMsg = 'Image too large';
  //         }
  //       }else{
  //         $errorMsg = 'Please select a valid image';
  //       }
  //     }

  //parse uploaded file
  // $image = $_FILES['image'];
  //1. save the file name in the database
  //2. upload / move the uploaded file into a specific folder

  //Insert SQL
//   $sql = 
//   " INSERT INTO `users`(
//     `first_name`,
//     `last_name`,
//     `email`,
//     `password`,
//     `business_name`,
//     `user_type`,
//     `phone_number`,
//     `address`,
//     `v_image`,
//     `v2_image`

// ) 
//   VALUES (
//           '".$first_name."',
//           '".$last_name."', 
//           '".$email."',
//           '".$password."' ,
//           '".$business_name."' , 
//           '".$user_type."', 
//           '".$phone_number."', 
//           '".$address."',
//           '".$userPic."',
//           '".$userPic."'

//         )";
        
  // //Execute SQL
  // if (mysqli_query($conn, $sql)) {
  // } else {
  //    mysqli_error($conn);
  //    header('Location: ../signup.php?authenticate=false');
  // }
  // echo $sql;

  // //CLOSE DATABASE CONNECTION
  // mysqli_close($conn);

