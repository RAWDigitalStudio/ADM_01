<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$fileName ="names.txt";
	$fp = fopen($fileName, 'a') or die ("Can´t open file");
	$name = array($_REQUEST['nameUser'],$_REQUEST['edad']);
	for ($i=0; $i < count($name); $i++) { 
		fwrite($fp, $name[$i]."\n");
	}
	fwrite($fp, "###############################");
	fclose($fp);
	print("salvdado");

?>
</body>
</html>