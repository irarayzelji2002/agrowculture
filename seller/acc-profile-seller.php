<?php
    session_start();
    require_once '../templates/navbar_seller.php';
if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['isLogin'] == false) {
        header('Location: ../login.php?security=false');
    }
} else {
    header('Location: ../login.php?security=false');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="../css/main.css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <title>aGROWculture: My Profile</title>

</head>
<body>
    <!-- Navbar -->
    <!-- <nav class="sticky">
        <div class="flex-nav">
        <div>aGROWculture</div>
        <div>
            <a href="">SELL</a>
            <a href="">LOGIN</a>
            <a href="">SIGN UP</a>
            <a href="">ICON LOGO</a>
        </div>

        </div>
    </nav> -->
    <?php require_once '../templates/navbar_seller.php' ?>
    <!-- MAIN CONTENT -->
    <main class="full-container"style="margin-top:5%;">
        <h1 class="sub-link center" >My Profile</h1>
        <hr>

        <div class="flex row half-container">
            <div>
                <img src="../img/s1.jpg" alt="" class="profile-icon">
                <button class="btn-box">Upload Image</button>
            </div>

            <div>
                <form action="">
                    <fieldset class="">

                    <input type="hidden" name="id" value="<?php
                                                            $currentID = $_SESSION["user_ID"];
                                                            echo $currentID; ?>">
                    <label for="emailAddress">Email Address:</label>
                    <input type="email" id="email" name="email" value="<?php echo $_SESSION["email"] ?>">

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Change your password" onfocus="this.value=''">

                    <label for="fullName">First Name:</label>
                    <input type="text" id="sFirstName" name="sFirstName" value="<?php echo $_SESSION["sFirstName"] ?>">

                    <label for="fullName">Last Name:</label>
                    <input type="text" id="sLastName" name="sLastName" value="<?php echo $_SESSION["sLastName"] ?>">


                    <label for="businessName">Company/Business Name:</label>
                    <input type="text" id="business_name" name="business_name" value="<?php echo $_SESSION["business_name"] ?>">

                    <label for="phone_number">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number" value="<?php echo $_SESSION["phone_number"] ?>">

                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="<?php echo $_SESSION["address"] ?>">
                        
                    </fieldset>

                    <div class="flex row">
                        <button class="btn-circle btn-center">Save Profile</button>
                        <button class="btn-circle btn-center"> 
                        <a href="../logout.php" style="color: white; text-decoration:none" >Logout
                        </a>
                        </button>
                    </div>

                </form>
            </div>

            
        </div>

        
        
    </main>

    <footer>
        
    </footer>
    
</body>
</html>