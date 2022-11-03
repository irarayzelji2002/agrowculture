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
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <script src="js/scriptwo.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="../css/main.css">
    <!-- MIGHT DELETE THIS PLS -->
    <!-- <link rel="stylesheet" href="../css/seller_list.css"> -->
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/plist.css">
    <link rel="stylesheet" href="../css/pcatalog.css">
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
<?php require_once '../templates/navbar_seller.php' ?>
 <!-- EXPERIMENT -->
 <?php
          $finding_user = "";
          if (isset($_REQUEST['query'])) {
            $finding_user = $_REQUEST['query'];
          }

          $varUserid = $_GET['id'];
          $to_id = intval($varUserid);

          if ($finding_user <> "") {
            $sql = "select * from product where product_desc like  '%" . $finding_user . "%' or product_name like  '%" . $finding_user . "%'
    or seller_name like  '%" . $finding_user . "%'  and user_id=" . $varUserid;
          } else {
            $sql = "select * from product where user_id=" . $varUserid;
          }

          $result = mysqli_query($conn, $sql);
          if ($row = mysqli_fetch_assoc($result)) {
          ?><?php echo $row['seller_name'] ?>
  <?php
  } ?>
  
   <!-- EXPERIMENT -->
    <!-- MAIN CONTENT -->
    <main class="full-container" style="margin-top:5%;">
        <img src="../img/s1.jpg" alt="" id="sellerIcon" class="profile-icon">
        <div class="solid-bg">

            <h1 id="sellerName" class="center" style="font-weight:700;"><?php echo $row['seller_name'] ?></h1>
            <!-- <p id="productNum" class="center">Products: </p> -->
            <div class="flex row">
          <?php
            $sql =  $sql = "select * from users where user_id=" . $varUserid;
                 $result = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($result) > 0) {
                     $row = mysqli_fetch_assoc($result);
                   }?>
                <p id="sellerPhone">Number:
                 <?php echo $row["phone_number"];?> </p>
                <p id="sellerAddr">Address: <?php 
                echo $row["address"]
                ?> </p>
            </div>
       
        </div>
    </main>
    <main class="full-container flex column">
        <!-- PRODUCTS-->
        <section class="half-container">
                <h1 class="sub-link center">Listed Products</h1>

                <div class="full-container flex row">

                    <?php
                    $upload_dir = '../upload/';
                    $sql =  $sql = "select * from product where user_id=" . $varUserid;
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {   ?>

                            <div class="product">
                                <img id="productIcon1" class="product-icon" src=<?php echo $upload_dir . $row['product_image'] ?> alt="...">
                                <h5 id="productname1" class="product-text sub-link"> Seller: <?php echo   $row['seller_name'] ?></h5>

                                <h5 id="productname1" class="product-text sub-link"> Name: <?php echo   $row['product_name'] ?></h5>
                                <h5 id="productprice1" class="product-text">Price: Php. <?php echo   $row['product_price'] ?></h5>
                            </div>
                <?php
                        }
                    }
                
                ?>
 </section>
    </main>
    <footer>

    </footer>

</body>
</html>