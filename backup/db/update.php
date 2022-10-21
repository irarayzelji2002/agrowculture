<?php
    session_start();
    require_once '../config.php';
    
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $business_name = $_POST['business_name'];
    $fName = $_POST['sFirstName'];
    $lName = $_POST['sLastName'];
    $currentID = $_SESSION["user_ID"];
    $password = md5($_POST['password']);

    $sql = "UPDATE users
    SET
        `first_name` = '$fName',
        `last_name` = '$lName',
        `email` = '$email',
        `password` = '$password',
        `business_name` = '$business_name',
        `phone_number` = '$phone_number',
        `address` = '$address'

    WHERE user_ID = $currentID
        ";

    if(mysqli_query($conn, $sql)){
        $_SESSION["sFirstName"]= $fName;
        $_SESSION["sLastName"]= $lName;
        $_SESSION["email"]= $email;
        $_SESSION['password'] = $password;
        $_SESSION["business_name"] = $business_name;
        $_SESSION["phone_number"] = $phone_number;
        $_SESSION["address"] = $address;
        header('Location:../buyer/buyer-page.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    //CLOSE DATABASE CONNECTION
    mysqli_close($conn);

?>
