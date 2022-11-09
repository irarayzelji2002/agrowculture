<?php
session_start();
require_once '../config.php';
$upload_dir = '../upload/';

// if(isset($_GET['product_id']))
// {
//     $prodID = mysqli_real_escape_string($conn, $_GET["product_id"]);
//     $query = "SELECT * FROM product WHERE product_id = '$prodID'";
//     $query_run = mysqli_query($conn, $query);

//     if(mysqli_num_rows($query_run) > 0)
//     {
//         $product = mysqli_fetch_assoc($query_run);
//     }
//     else {
//         $errorMsg = 'Error in finding product';
//     }
// }
    
if (isset($_POST['edit'])) {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $category_type = $_POST['category_type'];
    $productDescription = $_POST['productDescription'];
    $user_ID= $_SESSION['user_ID'];
    $seller_name= $_SESSION["sFirstName"]." ".$_SESSION["sLastName"];
    $status = "Example Status";
    $checkID = $_GET["product_id"];

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
            `product_id` = '$checkID',
            `user_ID` = '$user_ID',
            `seller_name` = '$seller_name',
            `category` = '$category_type',
            `product_name` = '$productName',
            `product_price` = '$productPrice',
            `product_image`= '$product_image',
            `product_desc`= '$productDescription',
            `product_status`= '$status'
            WHERE `product_id`= $checkID
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