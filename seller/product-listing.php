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
    <link rel="stylesheet" href="../css/plist.css">
    <link rel="stylesheet" href="../css/seller_list.css">
    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <title>aGROWculture: Product Listing</title>

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
    <h1 class="sub-link left" >Add a Product</h1>

        <div class="flex row half-container">
            <div>
                <img src="../img/s1.jpg" alt="" class="product-icon">
                <button class="btn-box">Upload Thumbnail</button>
            </div>

            <div>
                <form action="">
                    <fieldset class="">

                        <label for="productname">Product Name</label>
                        <input type="text" id="productName" name="productName" aria-describedby="productHelp">

                        <label for="productprice">Product Price</label>
                        <input type="text" id="productPrice" name="productPrice">

                        <label for="">Category</label>
                        <input class="category-listing" type="radio" name="dairyoreggs" id="dairyoreggs" value="Option1:Dairy/Eggs">
                        <label for="dairyoreggs">Dairy or Eggs</label>
            
                        <input class="category-listing"  type="radio" name="fruits" id="fruits" value="Option2:Fruits">
                        <label for="fruits">Fruits</label>

                        <input class="category-listing" type="radio" name="vegetables" id="vegetables" value="Option3:Vegetables">
                        <label for="vegetables">Vegetables</label>

                        <label for="productdescription">Product Description</label>
                        <input class="prod-desc" type="text" id="productDescription" name="productDescription">
                        
                    </fieldset>
                </form>
            </div>

            
        </div>

        <div class="flex row half-container">
            <div>
                <button class="btn-box1">Add Product</button>
            </div>
        </div>
        
    </main>

    <footer>
        
    </footer>
    
</body>
</html>