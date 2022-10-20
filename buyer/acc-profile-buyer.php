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
    <?php require_once '../templates/navbar_buyer.php' ?>
    <!-- MAIN CONTENT -->
    <main class="full-container"style="margin: 5rem auto 2rem auto!important;">
        <h1 class="sub-link center" >My Profile</h1>
        <hr>

        <div class="flex row half-container">
            <div>
                
            <img src="../img/s1.jpg" alt="" class="profile-icon placeholder-bg" >
            <input type="file" name="myfile" class="custom-file-input"style="margin-top: 10%;"></input>


            
            </div>
            
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
            <a href="../logout.php" style="color: white;text-decoration:none" >Logout
            </a>
            </button>
        </div>
        
    </main>

    <footer>
        
    </footer>
    
</body>
</html>