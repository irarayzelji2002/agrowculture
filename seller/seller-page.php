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
<script src="js/scriptwo.js"></script>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/seller_list.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/plist.css">
    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- FONTAWESOME -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
     <!-- FAVICON -->
     <link rel="icon" href="../img/aGROWculture-Favicon.png" type="image/gif" sizes="16x16">
    
    <title>aGROWculture</title>

</head>

<body>
    <?php
    require_once '../templates/navbar_seller.php';
    ?>
    <div style="height:5rem;"></div>
    <!-- MAIN CONTENT -->
    <main class="full-container" style="margin-top:5%;">
            <?php
            $upload_dir = '../user_identification/';
            ?>

        <img src="<?php echo $upload_dir. $_SESSION["profile"] ?>" alt="" id="sellerIcon" class="profile-icon" style="transform: translate(0%, 25%);">

        <div class="solid-bg">
            <div class="flex row">
            <h1 id="sellerName" class="center" style="font-weight:700;"><?php echo $_SESSION["sFirstName"] ?> <?php echo $_SESSION["sLastName"] ?></h1>
            <!-- <p id="productNum" class="center">Products: </p> -->
            </div>
            <div class="flex row">
                <p id="sellerPhone">Number:
                    <?php echo $_SESSION["phone_number"] ?>
                </p>
                <p id="sellerAddr">Address: <?php echo $_SESSION["address"] ?> </p>
            </div>
            <div class="flex row">
            <button class="btn-circle btn-center">
                <a href="acc-profile-seller.php" style="color: white;text-decoration: none;">
                    Edit Profile </a></button>
            </div>
        </div>
    </main>

    <!-- TABLE-->
    <section class="half-container">
        <h1 class="sub-link center">Listed Products</h1>
        <br>
        <table style="margin-bottom: 5%;">
            <!-- TABLE HEAD -->
            <thead>
                <tr>
                    <th scope="col" class="sub-link center">Product ID</th>
                    <th scope="col">Product NAME</th>
                    <th scope="col">Product PRICE</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">DESC</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
            </thead>
            <!-- TABLE BODY -->
            <tbody>
                <tr>
                    <?php

                    $currentID = $_SESSION["user_ID"];
                    $upload_dir = '../upload/';
                    $sql = "SELECT `product_id`, `product_name`, `product_price`, `product_image`, `product_desc`
                        FROM `product`
                        WHERE user_ID = $currentID";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);


                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {   ?>
                    <tr>
                        <td>
                            <?php echo  $row['product_id'] ?>
                        </td>
                        <td>
                            <?php echo   $row['product_name'] ?>
                        </td>
                        <td>
                            <?php echo   $row['product_price'] ?>
                        </td>
                        <td>
                            <img class="product-img" src=<?php echo $upload_dir . $row['product_image'] ?> alt="...">
                        </td>

                        <td>
                            <?php echo $row['product_desc'] ?>
                        </td>
                        <td>
                        <?php echo '<a href="edit-form.php?product_id='.$row['product_id'].'" title="Edit Record" data-toggle="tooltip"><span class="fa fa-marker"  style="width: 40px;height: 40px;"></span></a>'; ?>
                        </td>

                        <!-- ACTION BUTTONS-->
                        <td>
                            <!-- EDIT/UPDATE -->
                           
                            
                            <!-- DELETE -->
                            <a href="../db/delete.php?product_id=<?php echo $row['product_id']?> title="Delete Record" data-toggle="tooltip"  onclick="return confirm('Are you sure to delete this record?')"
                            ><span class="fa fa-trash remove" style="width: 40px;height: 40px;"></span></a>
                        </td>

                    </tr>
        <?php
                        }
                    }
        ?>


                </tr>


            </tbody>
        </table>

    </section>

    <footer>

    </footer>

</body>
</html>