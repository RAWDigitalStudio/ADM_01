<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		function double($value)
		{
			$value *= $value;
			return($value);
		}
	?>
</head>
<body>
<?php
 print("The value of 22.55 is: ".double(22.55));
?>

</body>
</html>