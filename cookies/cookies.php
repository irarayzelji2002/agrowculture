<html>

<head>
    <link rel="stylesheet" href="php-style.css">
    <script src="script.js"></script>
    <title> Setting up a PHP session</title>
</head>

<body>


    <div class="margin-style">
    <h1 class="spotify-title">Working with cookies</h1>

    <h3>Setting, Getting, and Viewing the Cookie</h3>
    <?php
        if (setcookie('name', 'Working with Cookies', time() + 15)) {
            // echo "Cookie is created.";
        }
    ?>
    <p>In setting a cookie, use the setcookie(name, value, expire, path, domain, secure, httponly) function. <br>
    For example: (setcookie('name', 'Working with Cookies', time() + 15));
    </p>

    <p>In this example we use the variable 'name' to store the value of the cookie which is 'Working with Cookies'
    <br>
    When it is set it will show: <mark>'THE COOKIE VALUE IS: 'Working with Cookies'</mark></p>

    <p>When it is unset this will appear: <mark>Sorry... Not recognized</mark> </p>

    <p>To get the value of the cookie use PHP $_COOKIE function. We will use the same value of the cookie, 'Working with Cookie'</p>
    
    <p>The text below will change accordingly to the condition if it is set or not. And will show what the value of the cookie is.</p>
    
    <mark>
        <?php
            if (isset($_COOKIE["name"]))
                echo "THE COOKIE VALUE IS: " . $_COOKIE["name"] . "<br />";

            else
                echo "Sorry... Not recognized" . "<br />";
        ?>
    </mark>

    <p>
        <strong>Note:</strong>
        You might have to reload the page
        to see the value of the cookie.
    </p>  
    
	<p id="seconds" class="clock">15</p>
    <br>
    <p>This timer is to indicate the expiration of the cookie. Once ellapsed, cookie is deleted.</p>
    </div>

</body>


</html>