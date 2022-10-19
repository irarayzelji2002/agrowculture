<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="../css/main.css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <title>aGROWculture: My Profile</title>

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
    <?php require_once '../templates/navbar_buyer.php' ?>
    <!-- MAIN CONTENT -->
    <main class="full-container"style="margin-top:5%;">
        <h1 class="sub-link center" >My Profile</h1>
        <hr>

        <div class="flex row half-container">
            <div>
                <img src="images/s1.jpg" alt="" class="profile-icon">
                <button class="btn-box">Upload Image</button>
            </div>

            <div>
                <form action="">
                    <fieldset class="">

                        <label for="emailAddress">Email Address:</label>
                        <input type="text" id="emailAddress" name="emailAddress">
                        
                        <label for="password">Password:</label>
                        <input type="text" id="password" name="password">
            
                        <label for="fullName">Name:</label>
                        <input type="text" id="fullName" name="fullName">

                        <label for="businessName">Company/Business Name:</label>
                        <input type="text" id="businessName" name="businessName">

                        <label for="phoneNum">Phone Number:</label>
                        <input type="text" id="phoneNum" name="phoneNum">
 
                        <label for="profileAddr">Address:</label>
                        <input type="text" id="profileAddr" name="profileAddr">
                        
                    </fieldset>
                </form>
            </div>

            
        </div>

        <div class="flex row">
            <button class="btn-circle btn-center">Save Profile</button>
            <button class="btn-circle btn-center"> 
            <a href="logout.php" style="color: white" >Logout
            </a>
            </button>
        </div>
        
    </main>

    <footer>
        
    </footer>
    
</body>
</html>