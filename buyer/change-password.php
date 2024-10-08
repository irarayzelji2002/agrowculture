<?php
// require_once '../templates/navbar_buyer.php'
session_start();

if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['isLogin'] == false) {
        header('Location: ../login.php?security=false');
    }
} else {
    header('Location: ../login.php?security=false');
}
?>


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

    <!-- FAVICON -->
    <link rel="icon" href="../img/aGROWculture-Favicon.png" type="image/gif" sizes="16x16">

    <title>aGROWculture: My Profile</title>
    <style>
        input[type="file"]::file-selector-button {
            color: white;
        }

        input[type="text"] {
            flex: 1;
            min-width: 0;
        }

        .wrapper {
            display: flex;
        }

        label {
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <?php require_once '../templates/navbar_buyer.php' ?>
    <div style="height:5rem;"></div>
    <!-- MAIN CONTENT -->
    <main class="full-container">
        <h1 class="sub-link center" style="font-size:48px; font-weight:900;">My Profile</h1>
        <hr>

        <div class="half-container" style="width: 30rem; margin-bottom:5rem;">
            <form action="../db/cp-backend-buyer.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <?php
                    if (isset($_GET['fillout'])) { //check if authenticate key exists in URL
                        if ($_GET['fillout'] == "false") { ?>

                            <br>
                            <div class="alert alert-danger" role="alert">
                                Fill out all fields.
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if (isset($_GET['wrongpassword'])) { //check if authenticate key exists in URL
                        if ($_GET['wrongpassword'] == "true") { ?>

                            <br>
                            <div class="alert alert-danger" role="alert">
                                There was a problem. Wrong Current Password.
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if (isset($_GET['match'])) { //check if authenticate key exists in URL
                        if ($_GET['match'] == "false") { ?>

                            <br>
                            <div class="alert alert-danger" role="alert">
                                Passwords don't match.
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <label for="cur_password">Current Password:</label>
                    <div class="wrapper"><input type="password" id="cur_password" name="cur_password" style="width: 514px;"></div>

                    <label for="password1">New Password:</label>
                    <div class="wrapper"><input type="password" id="password1" name="password1" style="width: 514px;"></div>

                    <label for="password2">Confirm New Password:</label>
                    <div class="wrapper"><input type="password" id="password2" name="password2" style="width: 514px;"></div>

                    <div class="flex row">
                        <button type="submit" class="btn-circle btn-center" name="updatepassword" onClick="window.location.reload();">Save Password</button>

                    </div>
                </fieldset>
            </form>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>