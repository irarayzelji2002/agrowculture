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
    <main class="full-container" style="margin-top:8rem;">
        <h1 class="sub-link center" style="margin-top:8rem;">Add a Product</h1>

        <div class="flex row half-container">
            <div class="column" style="align-items:flex-start!important;">
                <img src="../img/s1.jpg" alt="" class="product-icon">
                <button class="btn-box">Upload Thumbnail</button>
                <br>
               

            </div>

            <div>
                <!-- ito -->
                <form action="../db/plbackend.php" method="post" enctype="multipart/form-data" >
                    <fieldset class="">

                        <label for="productname">Product Name</label>
                        <input type="text" id="productName" name="productName" aria-describedby="productHelp">

                        <label for="productprice">Product Price</label>
                        <input type="text" id="productPrice" name="productPrice">

                        <label for="">Category</label>

                        <label>
                            <input type="radio" id="dairyoreggs" name="category_type" value="DairyorEggs" checked="checked"/>
                            <p>Dairy or Eggs</p>
                        </label>

                        <label>
                            <input type="radio" id="Seller" name="category_type" value="Fruits"/>
                            <p>Fruits</p>
                        </label>

                        <label>
                            <input type="radio" id="Seller" name="category_type" value="Vegetables"/>
                            <p>Vegetables</p>
                        </label>

                        <label for="productdescription">Product Description</label>
                        <input class="prod-desc" type="text" id="productDescription" name="productDescription">
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control" name="product_image" value="" style="width: 376px;" required>
                        </div>
                    </fieldset>
                    <button class="btn-box" name="Submit" type="submit">Add Product</button>
                </form>
            </div>


        </div>

        <!-- <div class="flex row half-container">
            <div>
                <button class="btn-box1">Add Product</button>
            </div>
        </div> -->

    </main>

    <footer>

    </footer>

</body>

</html>