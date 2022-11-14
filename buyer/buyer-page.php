<?php 
session_start();

require_once '../config.php';
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
    
    <!-- FAVICON -->
    <link rel="icon" href="../img/aGROWculture-Favicon.png" type="image/gif" sizes="16x16">

    <title>aGROWculture</title>

</head>
<body>
    <!-- Navbar -->
    <?php require_once '../templates/navbar_buyer.php'; ?>
    <div style="height:5rem;"></div>
    <!-- MAIN CONTENT -->
    <main class="full-container">
        <img src="../img/s1.jpg" alt="" id="buyerIcon" class="profile-icon">
        <div class="solid-bg">
            <h1 id="buyerName" class="center" style="font-size:48px; font-weight:700;">
                <!-- NAME -->
                <div class="flex row">
                <?php echo $_SESSION["sFirstName"]?> <?php echo $_SESSION["sLastName"] ?>
                </div>    
            </h1>
            <div class="flex row">
                <p id="buyerPhone">Number:
                <?php echo $_SESSION["phone_number"]?> 
                </p>
                <p id="buyerAddr">Address:  
                    <?php echo $_SESSION["address"]?> 
            </p>

            </div>
            
            <div class="flex row">
            <button class="btn-circle btn-center">
                <a href="acc-profile-buyer.php" style="color: white;text-decoration: none;">
                Edit Profile </a></button>
            </div>
        </div>
        
        
    </main>

    <footer>
        
    </footer>
    
</body>
</html>