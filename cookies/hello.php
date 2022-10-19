<!DOCTYPE html>
<head>
<title>PHP Code Blocks</title>
<meta http-equiv="content-type" content="text/html"; charset=iso-8859-1 />
</head>
<body>
<?php
$WorldVar = "World";
$SunVar = "Sun";
$MoonVar = "Moon";
$WorldInfo = 92897000;
$SunInfo = 72000000;
$MoonInfo = 3456;
echo "<p>Hello $WorldVar !<br />";
?>
<p>Hello <?php  echo $WorldVar ?><br />
The <?php echo $WorldVar?> is <?php echo $WorldInfo?>  miles from the <?php echo $SunVar ?>.<br />
Hello  <?php echo $SunVar?> ! <br> 
The <?php echo $SunVar?>'s core temperature is approximately <?php echo $SunInfo?> degrees 
Fahrenheit. <br>
 Hello <?php echo $MoonVar ?>, <br>
 The <?php echo $MoonVar?> is <?php echo $MoonInfo?> miles in diameter. </p>
</body>
</html>