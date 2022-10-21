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
     <?php require_once '../templates/navbar-product-catalog.php' ?>

    <main class="full-container flex row">

        <div class="search">
            <div class="container">
                <button type="submit"> 
                    <i class="fa-solid fa-magnifying-glass" aria-hidden="true" ></i></button>
                <input type="text" placeholder="  Search">
            </div>
            </div>

        <div class="menu" >
            <ul>
              <li ><a href="#">▼ Category</a>
              <ul >
                <li style="margin-left:10%; font-size: small;"><input type="checkbox"> Dairy Products</a></li><br>
                <li style="margin-left:10%; font-size: small;"><input type="checkbox"> Fruits</a></li><br>
                <li style="margin-left:10%; font-size: small;"><input type="checkbox"> Vegetables</a></li><br>
            </ul>

    <section class="half-container">
        <div class="flex row">
            <div><img src="../img/s1.jpg" alt="" class="featured"></div>
            <div><img src="../img/s2.jpg" alt="" class="featured"></div>
            <div><img src="../img/s3.jpg" alt="" class="featured"></div>
            <div><img src="../img/s4.jpg" alt="" class="featured"></div>
            <div><img src="../img/s1.jpg" alt="" class="featured"></div>
            <div><img src="../img/s2.jpg" alt="" class="featured"></div>
            <div><img src="../img/s3.jpg" alt="" class="featured"></div>
            <div><img src="../img/s4.jpg" alt="" class="featured"></div>
        </div>
    </section>
</body>
</html>