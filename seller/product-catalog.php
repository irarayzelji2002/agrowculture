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
    <?php require_once '../templates/navbar_seller.php' ?>
 <!-- SEARCH -->
    <section class="search-container flex column">
            <i class="fa-solid fa-magnifying-glass search-icon" aria-hidden="true" style="margin: 0 1rem 0 1rem;"></i>
            <div class="search-bar">
            <form action="product-catalog.php" method="get" class="form-inline my-2 my-lg-0" style="width: 500px">

                <!-- <i class="fa-solid fa-magnifying-glass" aria-hidden="true" style="margin: 0 1rem 0 1rem;"></i> -->
                <input type="text" placeholder="Search for products"  aria-label="Search" name="query" >
            </form>
            </div>
        </section>
   
    <?php
    $sSearch = "";
    if (isset($_REQUEST['query'])) {
        $sSearch = $_REQUEST['query'];
    }
    $sql = "select * from product";
    if ($sSearch <> "") { ?>
    <!-- SEARCH PAGE -->
             <?php
              $sql = "SELECT * FROM `product` WHERE `product_name` LIKE  '%".$sSearch."%' or `category` LIKE  '%".$sSearch."%'";
        ?>
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
            <!-- TABLE-->
            <section class="half-container">
                <h1 class="sub-link center"><?php echo " " . $sSearch; ?></h1>

                <div class="full-container flex row">
                    <?php

                    // $currentID = $_SESSION["user_ID"];
                    $upload_dir = '../upload/';
                    // $sql = "SELECT*FROM `product`";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {   ?>

                            <div class="product">
                                <img id="productIcon1" class="product-icon" src=<?php echo $upload_dir . $row['product_image'] ?> alt="...">

                                <h5 id="productname1" class="product-text sub-link"> Name: <?php echo   $row['product_name'] ?></h5>
                                <h5 id="productprice1" class="product-text">Price: Php. <?php echo   $row['product_price'] ?></h5>

                            </div>
                <?php
                        }
                    } 
                } else { ?>
     
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
            <!-- TABLE-->
            <section class="half-container">
                <h1 class="sub-link center">Listed Products</h1>

                <div class="full-container flex row">
                    <?php

                    // $currentID = $_SESSION["user_ID"];
                    $upload_dir = '../upload/';
                    // $sql = "SELECT*FROM `product`";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {   ?>

                            <div class="product">
                                <img id="productIcon1" class="product-icon" src=<?php echo $upload_dir . $row['product_image'] ?> alt="...">

                                <h5 id="productname1" class="product-text sub-link"> Name: <?php echo   $row['product_name'] ?></h5>
                                <h5 id="productprice1" class="product-text">Price: Php. <?php echo   $row['product_price'] ?></h5>

                            </div>
                <?php
                        }
                    }
                }
                ?>




        </main>
</body>

</html>