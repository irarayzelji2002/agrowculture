<html>

<head>
    <link rel="stylesheet" href="php-style.css">
    <title>Configuring Sessions</title>
</head>
<style>
    @font-face {
        font-family: myFirstFont;
        src: url(../WebResources/Sailec/Sailec\ Medium.otf);
    }

    * {
        font-family: myFirstFont;
    }
</style>

<body>

    <h1  class="spotify-title"> Configuring Sessions </h1>

    <div class="margin-style">
        Demonstrates the usage of the <b>session_set_cookie_params() </b> function<br>
        <?php
        //Setting the cookie parameters
        session_set_cookie_params(30 * 60, "/", "test",);
        //Retrieving the cookie parameters
        $res = session_get_cookie_params();
        //Starting the session 
        session_start();
        print_r($res);
        ?>

        <br><br>
        Demonstrates the usage of the <b> session_name() </b>function.<br>
        <?php
        $name = session_name();
        print("Session Name: " . $name);
        ?>

        <br><br>
        Demonstrates the usage of the <b>session_cache_limiter()</b> function.<br>
        <?php

        //Retrieving the cache limiter
        $limiter = session_cache_limiter();
        print("Cache limiter: " . $limiter);
        ?>
        <br><br>
        Demonstrates the usage of the <b>session_save_path() </b>function.<br>
        <?php
        $res = session_save_path();
        print("path: " . $res);
        ?>
        <br><br>
        Demonstrates the usage of the <b>session_write_close()</b> function.<br>
        <?php
        //Replacing the old value
        $_SESSION["A"] = "Hello";
        print("Value of the session array: ");
        print_r($_SESSION);
        //Closing the session
        session_write_close();
        echo "<br>";
        print("Value: " . $_SESSION["A"]);
        ?>
    </div>
</body>

</html>