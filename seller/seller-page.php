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
    <title>aGROWculture</title>

</head>

<body>
<?php  
require_once '../templates/navbar_seller.php';
 ?>
    <!-- MAIN CONTENT -->
    <main class="full-container" style="margin-top:5%;">
        <img src="../img/s1.jpg" alt="" id="sellerIcon" class="profile-icon">
        <div class="solid-bg">
            <h1 id="sellerName" class="center" style="font-weight:700;"><?php echo $_SESSION["sFirstName"]?> <?php echo $_SESSION["sLastName"] ?></h1>
            <!-- <p id="productNum" class="center">Products: </p> -->
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
    
    <!-- TABLE-->
    <section class="half-container">
    <h1 class="sub-link center" >Listed Products</h1>
    <table>
        <!-- TABLE HEAD -->
        <thead>
            <tr>
                <th scope="col" class="sub-link center">Product ID</th>
                <th scope="col">Product NAME</th>
                <th scope="col">Product PRICE</th>
                <th scope="col">IMAGE</th>
                <th scope="col">DESC</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
    <!-- TABLE BODY -->
        <tbody>
            <tr>
            <?php

                $currentID = $_SESSION["user_ID"];
                $upload_dir = '../upload/';
                $sql = "SELECT `product_id`, `product_name`, `product_price`, `product_image`, `product_desc`, `product_status`
                        FROM `product`
                        WHERE user_ID = $currentID";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);


                if($resultCheck > 0) {
                    while($row = mysqli_fetch_assoc($result)) {   ?>   
                      <tr>
                        <td>
                            <?php echo  $row['product_id'] ?>
                        </td>
                        <td>    
                            <?php echo   $row['product_name'] ?>
                        </td>
                        <td>    
                            <?php echo   $row['product_price']?>
                        </td>
                        <td>
                            <img class="product-img" src=<?php echo $upload_dir . $row['product_image'] ?> alt="..." >
                        </td>
                          
                        <td>  
                            <?php echo $row['product_desc']?>
                        </td>
                        <td> 
                                <?php $row['product_status']?>
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

<footer style="margin-bottom:5%">

</footer>

</body>

</html>