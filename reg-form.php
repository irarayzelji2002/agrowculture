<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reg-form-style.css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    
    <title>aGROWculture</title>

</head>
<body>
    
    <!-- Navbar -->
    <nav class="sticky">
        <div class="flex-nav">
        <div>aGROWculture</div>
        <div>
            <a href="" class="nav-link">SELL</a>
            <a href="" class="nav-link">LOGIN</a>
            <a href="" class="nav-link">SIGN UP</a>
            <a href="" class="nav-link">ICON LOGO</a>
        </div>

        </div>
    </nav>

    <!--REGFORM-->
    <section>
        <!--Background Image-->
        <section class="bg-image"></section>
        <!--Form-->
        <div class="container">
            <form id="regForm" class="regform" action="db/registerDATA.php" method="post">
                <h1>Join our community.</h1>
                <!--Role-->
                <h3 class="formGreenText">I am a...</h3>
                <div class="left-input">
                    <label style>
                    <p class="formGreenText">Buyer</p>
                    <input type="radio" id="Buyer" name="user_type" value="Buyer" checked="checked"/>
                    </label>
                </div>
                <div class="right-input">
                    <label>
                    <p class="formGreenText">Seller</p>
                    <input type="radio" id="Seller" name="user_type" value="Seller"/>
                    </label>
                </div>
                <!--Account Details-->
                <fieldset id="acctDetails">
                    <legend><h2 style="margin-top: 2rem;">Account Details</h2></legend>
                    <div style="position: relative; margin-right: 8px;">
                        <div class="left-input">
                            <p class="formGreenText">First Name</p>
                            <div class="wrapper"><input type="text" id="first_name" name="first_name" required/></div>
                        </div>
                    </div>
                    <div style="position: relative; margin-left: 8px;">
                        <div class="right-input">
                            <p class="formGreenText">Last Name</p>
                            <div class="wrapper"><input type="text" id="last_name" name="last_name" required/></div>
                        </div>
                    </div>
                    <p class="formGreenText">Email Address</p>
                    <div class="wrapper"><input type="text" id="email" name="email" required/></div>
                    <p class="formGreenText">Password</p>
                    <div class="wrapper"><input type="text" id="password" name="password" required/></div>
                </fieldset></br>
                <!--Business Details-->
                <fieldset id="businessDetails">
                    <legend><h2>Business Details</h2></legend>
                    <p class="formGreenText">Company/Business Name</p>
                    <div class="wrapper"><input type="text" id="business_name" name="business_name" required/></div>
                    <p class="formGreenText">Phone Number</p>
                    <div class="wrapper"><input type="text" id="phone_number" name="phone_number" required/></div>
                    <p class="formGreenText">Address</p>
                    <div class="wrapper"><input type="text" id="address" name="address" required/></div>
                </fieldset></br>
                <!--Upload Documents-->
                <fieldset id="uploadDocuments">
                    <legend><h2 class="formGreenText">Upload Documents</h2></legend>
                    <div class="left-input">
                        <div class="upload-btn-wrapper">
                            <button class="btn">SELECT FILES</button>
                            <input type="file" name="myfile"></input>
                        </div>
                    </div>
                </fieldset>
                <!--Submit Button-->
                <div class="contentButton wrapper">
                    <button type="submit" class="btn-box">SUBMIT</button>
                </div>
            </form>
            <!--Picture on Right-->
            <div class="right-container">
                <img src="img/farm.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="picture">
            </div>
        </div>
    </section>
    
    <!--FOOTER-->
    <footer>  
    </footer>
</body>
</html>