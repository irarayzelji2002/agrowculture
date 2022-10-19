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
    
    <title>aGROWculture</title>

</head>
<body>
    <!-- Navbar -->
    <?php require_once '../templates/navbar_buyer.php' ?>

    <!-- MAIN CONTENT -->
    <main class="full-container"style="margin-top:5%;">
        <img src="../img/s1.jpg" alt="" id="buyerIcon" class="profile-icon">
        <div class="solid-bg">
            <h1 id="buyerName" class="center">NAME</h1>
            <div class="flex row">
                <p id="buyerPhone">Number:</p>
                <p id="buyerAddr">Address:</p>
            </div>
            
            <button class="btn-circle btn-center" > <a href="acc-profile.php" style="color: white" >
                Edit Profile </a></button>
        </div>
        
        
    </main>

    <footer>
        
    </footer>
    
</body>
</html>