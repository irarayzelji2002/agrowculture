<?php
//   <!-- To be change -->
//   //security check
// session_start();
// if (isset($_SESSION['isLogin'])) {
//   if ($_SESSION['isLogin'] == true) {
//     if ($_SESSION['usertype'] == "Artist") {
//       header('Location: artist/dashboard.php');
//     }
//     if ($_SESSION['usertype'] == "Client") {
//       header('Location: client/client_dashboard.php');
//     }
//   }
// }
?>
<!DOCTYPE html>
<html>
<head>

  <title>Agrowculture</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="css/aral.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">

  <!-- To be change -->
  <!-- FAVICON -->
  <!-- <link rel="icon" href="img/easethetiksIcon.png" type="image/gif" sizes="16x16"> -->
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">

</head>
<style >
/*   <!-- To be change --> */
/* body {
  background-image: url('img/bg/index_bg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100vw 112vh;
} */
</style>
<body class="bg-dark">
<?php require_once '../templates/navbar_seller.php' ?>
<?php 
// require_once 'templates/navbar_index.php' 
?>
<!-- end of navbar -->

<!-- CONTAINER -->
<div class="container mt-5" style="margin-top: 15%!important;padding-left: 20%; font-size-adjust: 0.58;">
<h1 style="font-size:5vw;font-size-adjust: 0.58;color:#6CCB9C;"> SELLER<h1>
</div>
<!----------------------------------------------------------------------------------------------------------------------------->

</body>
</html>