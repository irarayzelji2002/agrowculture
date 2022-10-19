<?php
$authenticate = false;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    $name = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    if ($name == 'group5' && $pass == 'group5') {
        $authenticate = true;
    }
}
if ($authenticate == false) {
    header('WWW-Authenticate: Basic realm="Restricted Page Enter Details To Continue"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Authentication Failed! Refresh To Do It Again.";
} else {
?>
    <html>
    <head>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <title> Simple HTTP Authentication Using PHP</title>
    </head>

    <body>
        <h1 class="spotify-head" style="color: #fff">
            Simple HTTP Authentication Using PHP
        </h1>
        <section class="container mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col-lg-4 col-md-6 col-sm-12 shadow rounded-3 card" style="width:60%!important">
                    <?php require_once 'ConfiguringSessions.php' ?>
                </div>
            </div>
        </section>
        <section class="container mb-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col-lg-4 col-md-6 col-sm-12 shadow rounded-3 card" style="width:60%!important">
                    <?php require_once 'cookies.php' ?>
                </div>
            </div>
        </section>

    </body>
    </html>

<?php
}
?>