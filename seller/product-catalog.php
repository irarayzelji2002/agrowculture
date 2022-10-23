<?php
require_once '../config.php';
session_start();
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
    <link rel="stylesheet" href="../css/pcatalog.css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/96362859e2.js" crossorigin="anonymous"></script>
    <title>aGROWculture</title>

</head>
<body>
    <!-- Navbar -->
    <nav class="sticky">
        <div class="flex-nav">
        <div>aGROWculture</div>
        <div>
        <a href="product-listing.php" style="color:black">SELL</a>
        <a href="product-catalog.php" style="color:black">HOME</a>
            <a href="seller-page.php" style="color:black">PROFILE</a>
            <a href="" style="color:black">ICON LOGO</a>
        </div>
    </nav>

 <!-- MAIN CONTENT -->
    <main class="full-container flex row">

        <div class="search">
            <div class="container">
                <button type="submit"> 
                    <i class="fa-solid fa-magnifying-glass" aria-hidden="true" ></i></button>
                <input type="text" placeholder="  Search">
            </div>
            </div>
            
        <div class="menu">
            <ul>
              <li ><a href="#">▼ Category</a>
              <ul>
                <li style="margin-left:10%; font-size: small;"><input type="checkbox"> Dairy or Eggs</a></li><br>
                <li style="margin-left:10%; font-size: small;"><input type="checkbox"> Fruits</a></li><br>
                <li style="margin-left:10%; font-size: small;"><input type="checkbox"> Vegetables</a></li><br>
            </ul>
        </div>

        <div class="flex row" style="width:80%;">
            <div class="product">
            <img src="../img/avocado.png" alt="" id="productIcon1" class="picon1">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>
        </div>

            <div class="product"><img src="../img/banana.png" alt="" id="productIcon1" class="picon2">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>
        </div>

            <div class="product"><img src="../img/potato.png" alt="" id="productIcon1" class="picon3">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>
        </div>

            <div class="product"><img src="../img/bellpepper.png" alt="" id="productIcon1" class="picon4">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>
        </div>

        <div class="product"><img src="../img/asparagus.png" alt="" id="productIcon1" class="picon5">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>
        </div>

            <div class="product"><img src="../img/cabbage.png" alt="" id="productIcon1" class="picon6">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>
        </div>

        <div class="product"><img src="../img/corn.png" alt="" id="productIcon1" class="picon7">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>
        </div>

            <div class="product"><img src="../img/milk.png" alt="" id="productIcon1" class="picon8">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>
        </div>
</body>
</html>
   