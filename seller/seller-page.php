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
        <img src="../img/s1.jpg" alt="" id="sellerIcon" class="profile-icon">
        <div class="solid-bg">
            <h1 id="sellerName" class="center">NAME</h1>
            <p id="productNum" class="center">Products: </p>
            <div class="flex row">
                <p id="sellerPhone">Number:</p>
                <p id="sellerAddr">Address:</p>
            </div>
            <button class="btn-circle btn-center" > 
                <a href="acc-profile-seller.php" style="color: white;text-decoration: none;" >
                Edit Profile </a></button>
        </div>
        
        
    </main>

    <section class="half-container">
        <div class="flex row">
            <div class="product"></div>
            <div class="product"></div>
            <div class="product"></div>
        </div>

    </section>

    <footer>
        
    </footer>
    
</body>
</html>