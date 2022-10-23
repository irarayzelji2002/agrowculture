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
    <!--NAVBAR-->
    <?php require_once 'templates/navbar.php' ?>
    <div class="bg-image"></div>
    <main class="absolute-container">
        <div class="form-container solid-bg">
            <form class="form-flex column" id="regForm" action="db/registerDATA.php" method="post" enctype="multipart/form-data">
                <div>
                    <div>
                        <h1>Join our community.</h1>
                        <!--Role-->
                        <h3 class="sub-link">I am a...</h3>
                    </div>

                    <div class="form-flex">
                        <label>
                            <p class="sub-link">Buyer</p>
                            <input type="radio" id="Buyer" name="user_type" value="Buyer" checked="checked" style="margin-right: 2rem;" />
                        </label>

                        <label>
                            <p class="sub-link">Seller</p>
                            <input type="radio" id="Seller" name="user_type" value="Seller" />
                        </label>
                    </div>

                </div>



                <section class="fix-width">
                    <div>
                        <!--Account Details-->
                        <fieldset id="acctDetails">
                            <legend>
                                <h2 style="margin-top: 2rem;">Account Details</h2>
                            </legend>

                            <div class="form-flex">
                                <div>
                                    <p class="sub-link">First Name</p>
                                    <div><input type="text" id="first_name" name="first_name" required /></div>
                                </div>

                                <div>
                                    <p class="sub-link">Last Name</p>
                                    <div><input type="text" id="last_name" name="last_name" required /></div>
                                </div>
                            </div>

                            <p class="sub-link">Email Address</p>
                            <div><input type="text" id="email" name="email" required /></div>
                            <p class="sub-link">Password</p>
                            <div><input type="text" id="password" name="password" required /></div>
                        </fieldset></br>
                    </div>

                    <div>
                        <!--Business Details-->
                        <fieldset id="businessDetails">
                            <legend>
                                <h2>Business Details</h2>
                            </legend>
                            <p class="sub-link">Company/Business Name</p>
                            <div><input type="text" id="business_name" name="business_name" required /></div>
                            <p class="sub-link">Phone Number</p>
                            <div><input type="text" id="phone_number" name="phone_number" required /></div>
                            <p class="sub-link">Address</p>
                            <div><input type="text" id="address" name="address" required /></div>
                        </fieldset></br>
                    </div>


                    <div>
                        <!--Upload Documents-->
                        <fieldset id="uploadDocuments">
                            <legend>
                                <h2 class="sub-link">Upload Documents</h2>
                            </legend>
                            <input type="file" name="image" class="upload-btn-wrapper"></input>
                        </fieldset>
                    </div>

                    <!--Submit Button-->
                    <div class="contentButton wrapper">
                        <button type="submit" name="Submit"class="btn-box">SUBMIT</button>
                    </div>
            </form>
        </div>

        </section>
    </main>

    <!--FOOTER-->
    <footer>
    </footer>
</body>

</html>