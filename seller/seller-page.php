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
    <link rel="stylesheet" href="../css/seller_list.css">
    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<!-- FONTAWESOME -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title>aGROWculture</title>

</head>

<body>
<?php  require_once '../templates/navbar_seller.php'; ?>
    <!-- MAIN CONTENT -->
    <main class="full-container" style="margin-top:5%;">
        <img src="../img/s1.jpg" alt="" id="sellerIcon" class="profile-icon">
        <div class="solid-bg">
            <h1 id="sellerName" class="center"><?php echo $_SESSION["sFirstName"]?> <?php echo $_SESSION["sLastName"] ?></h1>
            <p id="productNum" class="center">Products: </p>
            <div class="flex row">
                <p id="sellerPhone">Number:
                <?php echo $_SESSION["phone_number"]?> 
                </p>
                <p id="sellerAddr">Address: <?php echo $_SESSION["address"]?> </p>
            </div>
            <button class="btn-circle btn-center">
                <a href="acc-profile-seller.php" style="color: white;text-decoration: none;">
                    Edit Profile </a></button>
        </div>
    </main>

    <!--PRODUCT LIST UNDER SELLER PAGE-->
    <section class="half-container">

    <!--4 Box Blank Container Row-->
        <div class="flex row">
            <div class="product"><img src="../img/carrots.png" alt="" id="productIcon1" class="picon1">
            <h5 id="productname1" class="pname">Product Name:</h5>
            <h5 id="productprice1" class="pprice">Product Price:</h5>
            <h5 id="productdesc1" class="pdesc">Product Description:</h5>

            <i class="fas fa-marker fa-2x"></i>
            <i class="fas fa-trash fa-2x"></i>
            </div>

            <div class="product"><img src="../img/grapes.png" alt="" id="productIcon2" class="picon2">
            <h5 id="productname2" class="pname">Product Name:</h5>
            <h5 id="productprice2" class="pprice">Product Price:</h5>
            <h5 id="productdesc2" class="pdesc">Product Description:</h5>

            <i class="fas fa-marker fa-2x"></i>
            <i class="fas fa-trash fa-2x"></i>
            </div>

            <div class="product"><img src="../img/tomato.png" alt="" id="productIcon3" class="picon3">
            <h5 id="productname3" class="pname">Product Name:</h5>
            <h5 id="productprice3" class="pprice">Product Price:</h5>
            <h5 id="productdesc3" class="pdesc">Product Description:</h5>

            <i class="fas fa-marker fa-2x"></i>
            <i class="fas fa-trash fa-2x"></i>
            </div>

            <div class="product"><img src="../img/pineapple.png" alt="" id="productIcon4" class="picon4">
            <h5 id="productname4" class="pname">Product Name:</h5>
            <h5 id="productprice4" class="pprice">Product Price:</h5>
            <h5 id="productdesc4" class="pdesc">Product Description:</h5>

            <i class="fas fa-marker fa-2x"></i>
            <i class="fas fa-trash fa-2x"></i>
            </div>

        </div>

    </section>

    <footer>

    </footer>

</body>

</html>