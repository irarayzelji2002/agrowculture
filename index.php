<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="css/main.css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    
    <title>aGROWculture</title>

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
    <?php require_once 'templates/navbar.php' ?>
    <!-- MAIN CONTENT -->
    <main class="full-container flex row">
        <div class="flex-child">
            <h1>Live Fresh, Grow Fresh</h1>
            <p>
            This is the known tagline for the aGROWculture website. 
            This tagline meant that keeping the body in good health 
            will have a flourishing future ahead.

        </p>
            <button class="btn-circle"style="margin-top:5%">
            <a href="reg-form.php" style="color: white;font-weight:600;"> GET STARTED</a>
           </button>
            <p class="sub-text" style="margin-left:2%"> Join our community</p>
        </div>

        <div class="flex-child">
            <h1>Value of Production in Philippine Agriculture</h1>
            <p>
            According to Philippine Statistics Authority (2022), there is a -1.6 decrease in 
            the value of crop production in the first half of 2022. It has 
            went down showing a decline due to various agricultural problems.
            Hi elli test only
        </p>
        </div>
    </main>


    <section class="half-container">
        <div><h1 class="center">Featured Products</h1></div>
        <div class="flex row">
            <div><img src="img/s1.jpg" alt="" class="featured"></div>
            <div><img src="img/s2.jpg" alt="" class="featured"></div>
            <div><img src="img/s3.jpg" alt="" class="featured"></div>
            <div><img src="img/s4.jpg" alt="" class="featured"></div>
        </div>
        <div><p class="center sub-link">See all products</p></div>
    </section>

    <section class="half-container">
        <div class="center">
            <h1>Grow with Us!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas scelerisque rhoncus libero, et tristique massa hendrerit at.
                Sed urna elit, facilisis ut lectus sed, vestibulum suscipit lorem.</p>
        </div>

        <div class="flex row">
            <div class="roles">
                <h1>as a Buyer</h1>
                <ul>
                    <li>Example Role</li>
                    <li>Example Role</li>
                    <li>Example Role</li>
                    <li>Example Role</li>
                    <li>Example Role</li>
                </ul>
            </div>

            <div class="roles">
                <h1>as a Seller</h1>
                <ul>
                    <li>Example Role</li>
                    <li>Example Role</li>
                    <li>Example Role</li>
                    <li>Example Role</li>
                    <li>Example Role</li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        
    </footer>
    
</body>
</html>