<?php
require_once 'config.php';

session_start();

$email = $_POST['email'];
$password = md5($_POST['password']); //MD5 encrytion

//SELECT SQL
$sql = "
    SELECT 
      * 
    FROM 
      `users` 
    WHERE 
      `email`='" . $email . "'
      AND
      `password`='" . $password . "'
  ";


$_SESSION["sFirstName"] = "";
$_SESSION["sLastName"] = "";
$_SESSION["user_ID"] = "";


//Execute SQL
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if ($count > 0) {
  //user found
  $_SESSION['isLogin'] = true;

  $_SESSION['user_ID'] = $row['user_ID'];
  $_SESSION["sFirstName"] = $row["first_name"];
  $_SESSION["sLastName"] = $row["last_name"];
  $_SESSION["usertype"] = $row["user_type"];
  $_SESSION["phone_number"] = $row["phone_number"];
  $_SESSION["email"] = $row["email"];
  $_SESSION["business_name"] = $row["business_name"];
  $_SESSION["address"] = $row["address"];

  if ($_SESSION["usertype"] == "Seller") {
    header('Location: seller/seller-page.php');
  }
  if ($_SESSION["usertype"] == "Buyer") {
    header('Location:buyer/buyer-page.php');
  }
} else {


  $_SESSION["sFirstName"] = "";
  $_SESSION["sLastName"] = "";
  $_SESSION["sGender"] = "";

  //invalid credentials
  $_SESSION['isLogin'] = false;
  header('Location: login?authenticate=false');
}

//CLOSE DATABASE CONNECTION
mysqli_close($conn);
