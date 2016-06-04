<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		print("Printed from container.php");
		print("<br/>");
		include_once("includeMe.php");
		print("<br/>");
		include("includeMe.php");
		print("<br/>");
		include("includeMe.php");

	?>
</body>
</html>