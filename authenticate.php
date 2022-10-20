<?php
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']); //MD5 encrytion

//1. Setup Database connection
$servername = "localhost";
$db_username = "root"; //xampp default
$db_password = "";  //xampp default
$database = "agrowculture";

$conn = mysqli_connect($servername, $db_username, $db_password, $database);

//2. SELECT SQL
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


//3. Execute SQL
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
  $_SESSION["sPhoneNumber"] = $row["phone_number"];
  $_SESSION["email"] = $row["email"];

  $_SESSION["sAddress"] = $row["address"];
  $_SESSION["sRegion"] = $row["region"];
  $_SESSION["sCity"] = $row["city"];
  $_SESSION["sZip"] = $row["zip"];

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

//.4 Closing Database Connection
mysqli_close($conn);
