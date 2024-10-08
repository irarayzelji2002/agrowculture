<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reg-form.css">

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
    <!--NAVBAR-->
    <?php require_once 'templates/navbar_index.php' ?>
    <script type="text/javascript" src="db/validate.js"></script>
    <div class="bg-image"></div>
    <main class="absolute-container" style="margin-top: 10%;">
        <div style="height:3rem;"></div>
        <div class="form-container solid-bg">
            <form class="form-flex column" id="regForm" action="db/registerData.php" method="post" enctype="multipart/form-data">
                <div>
                    <div>
                        <h1 style="color: black; font-weight:900; font-size:24px;">Join our community.</h1>
                        <!--Role-->
                        <h3 class="sub-link" style="font-weight:900; font-size:19px; margin-top:1rem;">I am a...</h3>
                    </div>

                    <div class="form-flex">
                        <label>
                            <span class="sub-link">Buyer</span>
                            <input type="radio" id="Buyer" name="user_type" value="Buyer" checked="checked" style="margin-right: 2rem;" />
                        </label>

                        <label>
                            <span class="sub-link">Seller</span>
                            <input type="radio" id="Seller" name="user_type" value="Seller" />
                        </label>
                    </div>

                </div>



                <section>
                    <div>
                        <!--Account Details-->
                        <fieldset id="acctDetails">
                            <legend>
                                <h2 style="margin-top: 2rem; color: black; font-weight:900; font-size:24px;">Account Details</h2>
                            </legend>
                            <div class="form-flex">
                                <div style="width:100%">
                                    <p class="sub-link">First Name</p>
                                    <div style="display:flex;"><input type="text" id="first_name" name="first_name" style="flex:1;"/></div>
                                </div>

                                <div style="width:100%">
                                    <p class="sub-link">Last Name</p>
                                    <div style="display:flex;"><input type="text" id="last_name" name="last_name" style="flex:1;"/></div>
                                </div>

                                <div style="width:100%">
                                    <p class="sub-link">Email Address</p>
                                    <div style="display:flex;"><input type="text" id="email" name="email" style="flex:1;"/></div>
                                </div>

                                <div style="width:100%">
                                    <p class="sub-link">Password</p>
                                    <div style="display:flex;"><input type="password" id="password" name="password" style="flex:1;"/></div>
                                </div>
                            </div>
                        </fieldset></br>
                    </div>

                    <div>
                        <!--Upload Documents-->
                        <fieldset id="uploadDocuments">
                            <legend>
                                <!-- <h2 class="sub-link" style="color: black; font-weight:900; font-size:24px;">Upload Profile Photo</h2> -->
                                <h2 class="sub-link" style="color: black; font-weight:900; font-size:24px;">Upload Any Valid ID</h2>
                            </legend>
                            <input type="file" name="image" class="upload-btn" style="color:black;"  ></input>
                        </fieldset>
                    </div>

                    <div>
                        <!--Business Details-->
                        <br>
                        <fieldset id="businessDetails">
                            <legend>
                                <h2 style="margin-top: 2rem; color: black; font-weight:900; font-size:24px;">Business Details</h2>
                            </legend>
                            <p class="sub-link">Company/Business Name</p>
                            <div style="display:flex;"><input type="text" id="business_name" name="business_name" style="flex:1;"/></div>
                            <p class="sub-link">Phone Number</p>
                            <div style="display:flex;"><input type="text" id="phone_number" name="phone_number" style="flex:1;"/></div>
                            <p class="sub-link">Address</p>
                            <div style="display:flex;"><input type="text" id="address" name="address" style="flex:1;"/></div>
                        </fieldset></br>
                    </div>

                    <div>
                        <!--Upload Documents-->
                        <fieldset id="uploadDocuments">
                            <legend>
                                <!-- <h2 class="sub-link" style="color: black; font-weight:900; font-size:24px;">Upload Any Valid ID</h2> -->
                                <h2 class="sub-link" style="color: black; font-weight:900; font-size:24px;">Upload Profile Photo</h2>
                            </legend>
                            <input type="file" name="image" class="upload-btn" style="color:black;"  ></input>
                        </fieldset>
                    </div>

                    <!--Submit Button-->
                    <br>
                    <div>
                        <button type="submit" name="Submit" class="btn-box" onclick="validateForm()">SUBMIT</button>
                    </div>
            </form>
        </div>
        <?php
  if (isset($_GET['authenticate'])) { //check if authenticate key exists in URL
    if ($_GET['authenticate'] == "false") {
      echo '
        <br>
        <div class="alert alert-danger" role="alert">
          Invalid inputs.
        </div>
      ';
    }
  }
  ?>
        </section>
    </main>

    <!--FOOTER-->
    <footer>
    </footer>
</body>

</html>