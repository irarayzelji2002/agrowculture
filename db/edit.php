<?php
session_start();
require_once '../config.php';
$upload_dir = '../upload/';

    
if (isset($_POST['edit'])) {
    $prodCheck = $_POST['product_id'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $category_type = $_POST['category_type'];
    $productDescription = $_POST['productDescription'];
    $product_image = $_POST['product_image'];
    $user_ID= $_SESSION['user_ID'];
    $seller_name= $_SESSION["sFirstName"]." ".$_SESSION["sLastName"];
    $status = "Example Status";

    $imgName = $_FILES['product_image']['name'];
    $imgTmp = $_FILES['product_image']['tmp_name'];
    $imgSize = $_FILES['product_image']['size'];
 
    if(empty($productName )){
        $errorMsg = 'Please input  product name ';
    }elseif(empty($productPrice)){
        $errorMsg = 'Please input Product Price';
    }elseif(empty($category_type)){
        $errorMsg = 'Please choose category';
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
        
        if(!isset($errorMsg)){
            $sql = "UPDATE product
            SET
            `user_ID` = '$user_ID',
            `seller_name` = '$seller_name',
            `category` = '$category_type',
            `product_name` = '$productName',
            `product_price` = '$productPrice',
            `product_image`= '$userPic',
            `product_desc`= '$productDescription',
            `product_status`= '$status'
            WHERE `product_id`= $prodCheck
            ";
     
           $result = mysqli_query($conn, $sql);
           if($result){
             echo '<script> alert("Successfully edited product.");</script>';
             header('Location: ../seller/seller-page.php');
           }else{
            echo '<script> alert("Error in edited product.");</script>';
             $errorMsg = 'Error '.mysqli_error($conn);
           }
         }
  }

?>