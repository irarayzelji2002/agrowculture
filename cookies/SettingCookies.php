<!DOCTYPE html>

<?php
	setcookie("cookiename", "Group4", time() + 3600);
?>

<html>
<body>
	<?php
	if (isset($_COOKIE["cookiename"]))
	{
		echo "Cookie name is " . $_COOKIE["cookiename"];
	}
	else
	{
		echo "No items for cookie name.";
	}
	?>

	<p>
		<strong>Note:</strong>
		You might have to reload the page
		to see the value of the cookie.
	</p>

</body>
</html>
