<?php

    require_once '../config.php';

    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $business_name = $_POST['business_name'];
    $currentID = ["id"];

    $sql = "UPDATE users
    SET
        `email` = '$email',
        `business_name` = '$business_name',
        `phone_number` = '$phone_number',
        `address` = '$address'
    WHERE user_ID = 9
        ";

    if(mysqli_query($conn, $sql)){
        echo "Records were updated successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    //CLOSE DATABASE CONNECTION
    mysqli_close($conn);
