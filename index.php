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
    
    <!-- FAVICON -->
    <link rel="icon" href="img/aGROWculture-Favicon.png" type="image/gif" sizes="16x16">
    
    <title>aGROWculture</title>

</head>
<body>
    <?php require_once 'templates/navbar_index.php' ?>
    <!-- MAIN CONTENT -->
    <main class="full-container flex row">
        <div class="flex-child">
            <h1 style="font-size:48px; font-weight:900;">Live Fresh, Grow Fresh</h1>
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
            <h1 style="font-size:48px; font-weight:900;">Value of Production in Philippine Agriculture</h1>
            <p>
            According to Philippine Statistics Authority (2022), there is a -1.6 decrease in 
            the value of crop production in the first half of 2022. It has 
            went down showing a decline due to various agricultural problems.
        </p>
        </div>
    </main>


    <section class="half-container">
        <div><h1 class="center" style="font-size:48px; font-weight:900;">Featured Products</h1></div>
        <div class="flex row">
            <div><img src="img/FeaturedProducts1.jpg" alt="" class="featured" style="object-fit:cover;"></div>
            <div><img src="img/FeaturedProducts2.jpg" alt="" class="featured" style="object-fit:cover;"></div>
            <div><img src="img/FeaturedProducts3.jpg" alt="" class="featured" style="object-fit:cover;"></div>
            <div><img src="img/FeaturedProducts4.jpg" alt="" class="featured" style="object-fit:cover;"></div>
        </div>
        <div><a href="buyer/product-catalog.php" style="color: white;"><p class="center sub-link">See all products</p></a></div>
    </section>

    <section class="half-container">
        <div class="center">
            <h1 style="font-size:48px; font-weight:900;">Grow with Us!</h1>
            <p>aGROWculture aims to provide farmers an e-commerce platform to sell their crops to retailers, 
                distributors, and purchasing agents. Farmers will be the suppliers who will sell their goods 
                in bulk orders to distributors. It will help farmers reach larger audiences and make transactions 
                faster and more efficient. On the other hand, distributors can have more options in choosing 
                their suppliers through the product catalog. This platform will allow easier negotiation between 
                farmers and distributors.</p>
        </div>

        <div class="flex row" style="padding-bottom:5rem;">
            <div class="roles">
                <h1 style="font-size:48px; font-weight:900;">as a Buyer</h1>
                <ul style="line-height:2rem; padding-bottom:1rem;">
                    <li>Act as retailers</li>
                    <li>Act as distributor</li>
                    <li>Act as purchasing agents</li>
                    <li>Consider price, quality, and reliability when choosing suppliers</li>
                    <li>Responsible for the receipt of goods from suppliers</li>
                    <li>Negotiate with seller</li>
                </ul>
            </div>

            <div class="roles">
                <h1 style="font-size:48px; font-weight:900;">as a Seller</h1>
                <ul style="line-height:2rem; padding-bottom:1rem;">
                    <li>Act as suppliers</li>
                    <li>Sell and provide products for retailers</li>
                    <li>Ensure the quality and availability of products sold</li>
                    <li>Provide clear description and titles for their products</li>
                    <li>Price their products correctly</li>
                    <li>Negotiate with buyer</li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        
    </footer>
    
</body>
</html>