<!DOCTYPE html>
<html>

<head>
  <title>Log in</title>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/reg-form.css">
  <link rel="stylesheet" href="css/login.css">
  
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- bootstrap
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 -->

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
  <!-- FAVICON -->
  <link rel="icon" href="img/aGROWculture-Favicon.png" type="image/gif" sizes="16x16">
</head>

<body class="bg-image">
<?php require_once 'templates/navbar_index.php' ?>
  <form action="authenticate.php" method="post" style="margin:5%" class="align-content-center">

    <div class="card d-flex align-content-center align-items-center mx-auto customCard">
 
      <div class="card-body mb-4 customBodyCardSize">
        <h3 class=" d-flex align-content-center align-items-center mt-4 w-50 mx-auto bold-text">Join our Community</h3>
        <small class=" d-flex align-content-center align-items-center mt-1 w-50 mx-auto">Welcome back!</small>
        <div class="form-group ">
    
          <label for="exampleInputEmail1" class="text-dark mb-3 d-flex align-content-center align-items-center mt-4 w-50 mx-auto
      semibold-text">Email address</label>
          <input type="email" class="form-control w-50 d-flex align-content-center align-items-center mt-1 mx-auto bg-textbox" id="exampleInputEmail1 " aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="text-dark mb-3 mt-1 d-flex align-content-center align-items-center mt-4 w-50 mx-auto
      semibold-text">Password</label>
          <input type="password" class="form-control w-50 mx-auto mt-1 bg-textbox" id="exampleInputPassword1" name="password">
        </div>
        <div class="d-flex align-content-center align-items-center mt-4 w-50 mx-auto">
          <button type="submit" class="btn btn-warning d-flex justify-content-center align-items-center flex-fill logIn">
            LOG IN</button>
        </div>
        <?php
  if (isset($_GET['authenticate'])) { //check if authenticate key exists in URL
    if ($_GET['authenticate'] == "false") {?>
     
        <br>
        <div class="alert alert-danger" role="alert">
          Invalid email / password. 
        </div>
 <?php     
    }
  }
  ?>
  </form>
  </div>
  </div>

</body>

</html>