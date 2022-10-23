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
    <link rel="stylesheet" href="../css/main.css">
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
    <?php require_once '../templates/navbar_seller.php'?>

    <!-- SEARCH -->
    <section class="search-container flex column">
            <i class="fa-solid fa-magnifying-glass search-icon" aria-hidden="true" style="margin: 0 1rem 0 1rem;"></i>
            <div class="search-bar">
                    <!-- <i class="fa-solid fa-magnifying-glass" aria-hidden="true" style="margin: 0 1rem 0 1rem;"></i> -->
                    <input  type="text" placeholder="Search for products">
            </div> 
    </section>

    <!-- CATEGORY FILTER -->
    <h3 class="center">Category</h3>
    <section class="category-container flex row">
        <input type="checkbox" id="category1" name="dairy-egg" value="dairy-egg">
        <label for="category1">Dairy or Eggs</label>

        <input type="checkbox" id="category2" name="fruits" value="fruits">
        <label for="category1">Fruits</label>

        <input type="checkbox" id="category3" name="vegetables" value="vegetables">
        <label for="category1">Vegetables</label>
    </section>

    <!-- MAIN CONTENT -->
    <main class="full-container flex column">



        <div class="full-container flex row">
            <div class="product">
                <img src="../img/avocado.png" alt="" id="productIcon1" class="product-icon">
                <h5 id="productname1" class="product-text sub-link">Name Here</h5>
                <h5 id="productprice1" class="product-text">Price</h5>
                <h5 id="productdesc1" class="product-text">Status</h5>
            </div>

            <div class="product">
                <img src="../img/banana.png" alt="" id="productIcon1" class="product-icon">
                <h5 id="productname1" class="product-text sub-link">Name Here</h5>
                <h5 id="productprice1" class="product-text">Price</h5>
                <h5 id="productdesc1" class="product-text">Status</h5>
            </div>

            <div class="product">
                <img src="../img/potato.png" alt="" id="productIcon1" class="product-icon">
                <h5 id="productname1" class="product-text sub-link">Name Here</h5>
                <h5 id="productprice1" class="product-text">Price</h5>
                <h5 id="productdesc1" class="product-text">Status</h5>
            </div>

            <div class="product">
                <img src="../img/bellpepper.png" alt="" id="productIcon1" class="product-icon">
                <h5 id="productname1" class="product-text sub-link">Name Here</h5>
                <h5 id="productprice1" class="product-text">Price</h5>
                <h5 id="productdesc1" class="product-text">Status</h5>
            </div>

            <!-- 

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

            <div class="product"><img src="../img/milk.png" alt="" id="productIcon1" class="picon8">
                <h5 id="productname1" class="pname">Product Name:</h5>
                <h5 id="productprice1" class="pprice">Product Price:</h5>
                <h5 id="productdesc1" class="pdesc">Product Description:</h5>
            </div>

            <div class="product"><img src="../img/milk.png" alt="" id="productIcon1" class="picon8">
                <h5 id="productname1" class="pname">Product Name:</h5>
                <h5 id="productprice1" class="pprice">Product Price:</h5>
                <h5 id="productdesc1" class="pdesc">Product Description:</h5>
            </div> -->
    </main>
</body>

</html>