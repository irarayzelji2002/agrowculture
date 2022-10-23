<?php
    session_start();
    require_once '../config.php';
    $upload_dir= '../user_identification/';

    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $business_name = $_POST['business_name'];
    $fName = $_POST['sFirstName'];
    $lName = $_POST['sLastName'];
    $currentID = $_SESSION["user_ID"];

         $imgName = $_FILES['image']['name'];
         $imgTmp = $_FILES['image']['tmp_name'];
         $imgSize = $_FILES['image'] ['size'];

        if(empty($email)){
          $errorMsg ='Please input your email';
        }else if(empty($phone_number)){
          $errorMsg ='Please input your phone number';
        }else if(empty($address)){
          $errorMsg ='Please input your address';
        }else if(empty($fName)){
          $errorMsg ='Please input your first name';
        }else if(empty($lName)){
          $errorMsg ='Please input your last name';
        }else if(empty($currentID)){
          $errorMsg ='Please input your user ID';
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
    $sql = "UPDATE users
    SET
        `first_name` = '$fName',
        `last_name` = '$lName',
        `email` = '$email',
        `business_name` = '$business_name',
        `phone_number` = '$phone_number',
        `address` = '$address',
        `v_image` = '$userPic'

    WHERE user_ID = $currentID
        ";

    if(mysqli_query($conn, $sql)){
        $_SESSION["sFirstName"]= $fName;
        $_SESSION["sLastName"]= $lName;
        $_SESSION["email"]= $email;
        $_SESSION["business_name"] = $business_name;
        $_SESSION["phone_number"] = $phone_number;
        $_SESSION["address"] = $address;
        $_SESSION["v_image"] = $userPic;
        header('Location:../buyer/buyer-page.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    //CLOSE DATABASE CONNECTION
    mysqli_close($conn);

?>
