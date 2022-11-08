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
    <link rel="stylesheet" href="../css/plist.css">
    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" href="../img/aGROWculture-Favicon.png" type="image/gif" sizes="16x16">

    <title>aGROWculture: Product Listing</title>
    <style>
    input[type="file"]::file-selector-button {
        color: white;
    }
    input[type="text"] {
        flex:1;
        min-width:0;
    }
    input[type="radio"] {
        height:1rem;
        margin-top:0.2rem;
    }
    .wrapper {
        display: flex;
    }
    label {
        margin-top:1rem;
    }
    </style>
</head>

<body>
    <?php require_once '../templates/navbar_seller.php' ?>
    <div style="height:5rem;"></div>
    <!-- MAIN CONTENT -->
    <main class="full-container">
        <h1 class="sub-link center" style="font-size:48px; font-weight:900;">Add a Product</h1>
        <hr>

        <div class="half-container" style="width: 30rem; margin-bottom:5rem;">
            <div>
                <!-- ito -->
                <form action="../db/plbackend.php" method="post" enctype="multipart/form-data" >
                    <fieldset class="">

                        <label for="productname">Product Name</label>
                        <div class="wrapper"><input type="text" id="productName" name="productName" aria-describedby="productHelp"></div>

                        <label for="productprice">Product Price</label>
                        <div class="wrapper"><input type="text" id="productPrice" name="productPrice"></div>

                        <label for="">Category</label>

                        <label style="display:flex; height:1rem; margin-top:0; margin-bottom:0.5rem;">
                            <input type="radio" id="dairyoreggs" name="category_type" value="DairyorEggs" checked="checked"/>
                            <p style="text-indent: 1em;">Dairy or Eggs</p>
                        </label>

                        <label style="display:flex; height:1rem; margin-top:0; margin-bottom:0.5rem;">
                            <input type="radio" id="Seller" name="category_type" value="Fruits"/>
                            <p style="text-indent: 1em;">Fruits</p>
                        </label>

                        <label style="display:flex; height:1rem; margin-top:0; margin-bottom:0.5rem;">
                            <input type="radio" id="Seller" name="category_type" value="Vegetables"/>
                            <p style="text-indent: 1em;">Vegetables</p>
                        </label>

                        <label for="productdescription">Product Description</label>
                        <div class="wrapper"><input class="prod-desc" type="text" id="productDescription" name="productDescription"></div>
                        
                        <div class="form-group">
                            <label for="image">Choose Image for Thumbnail</label>
                            <div class="wrapper"><input type="file" class="upload-btn" name="product_image" value="" style="width: 376px;" required></div>
                        </div>
                    </fieldset>
                    <button class="btn-box" name="Submit" type="submit">Add Product</button>
                </form>
            </div>


        </div>

    </main>

    <footer>

    </footer>

</body>

</html>