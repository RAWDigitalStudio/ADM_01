<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>First PHP Document</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<style>
	body{
		font-family: arial;
		font-size: 16px;
		color: #222
		margin: 7.111px 0; 
	}
	body{
	    -webkit-font-smoothing: antialiased;
	    -webkit-text-shadow: rgb(51,51,51) 0 0 1.405px;
	    text-shadow: rgb(51,51,51) 0 0 1.405px;
	}
	</style>

</head>
<body>

	<?php

		echo("<p>This is my first PHP</p>");
		print("<br/>This is print out");
		printf("<br/>Tengo %d años",29);
		printf("<br/>El rate de interes es %0.2f",8.43253245234626);
		$edad=29; // Value or Numerical Variable
		$nombre="Alfredo Martinez"; //String Variable
		$tax_rate=1.6; //Floating ponit numbers
		print("<br/>");
		print($nombre);
		print("<br/>");
		print($edad);
		print("<br/>");
		print($tax_rate);
		print("<br/>");
		print($nombre." tiene ".$edad." años");
		print("<br/>");
		printf($nombre."<br/>Tengo %d años",$edad);
		print("<br/>");
		printf("El iva en mexico es de %0.2f",$tax_rate);

		$value = 37*3/14+5-25+.0003/6;
		print("<br/>");
		print("Value: ".$value);
		$x = 12.55;
		$y = 13;

		$z = $x + $y;
		print("<br/>");
		echo ($x." + ".$y." = ".($x+$y));
		print("<br/>");
		echo ($x." - ".$y." = ".($x-$y));
		print("<br/>");
		echo ($x." * ".$y." = ".($x*$y));
		print("<br/>");
		echo ($x." / ".$y." = ".($x/$y));
		print("<br/>");
		echo(9%3);
		print("<br/>");
		echo(10%3);
		print("<br/>");
		echo(11%3);

		$x++;
		$y--;
		print("<br/>");
		echo("x: ".$x." y: ".$y);

		$poem="Roses are red, violets are blue";
		$poem.="<br/>PHP is fun and so are you";
		print("<br/>");
		echo ($poem);

		$operand1 = 17;
		$operand2 = 13;

		$operand2-=$operand1;

		print("<br/>");
		echo ($operand2);

		/* ARRAYS SIMPLE */


		$grupoBooli = array("Javi","Mariana","Santy","Mosko","Alexa","Sylvana","Alfredo");

		$grupoMusica[0]="PTV3";
		$grupoMusica[1]="NEU";
		$grupoMusica[2]="Rolling Stones";
		$grupoMusica[3]="Kiss";
		$grupoMusica[4]="Los eclipses";
		$grupoMusica[5]="Justin";
		$grupoMusica[6]="OneThi";

		print("<br/>");
		//print(&grupoBooli[0]);
		print($grupoBooli[rand(0, 6)]." le gusta: ".$grupoMusica[rand(0, 6)]);

		/* ARRAYS ASOCIATIVOS */

		$calif = array(
					"Javi" => rand(5, 10),
					"Mariana" => rand(5, 10),
					"Santy" => rand(5, 10),
					"Mosko" => rand(5, 10),
					"Alexa" => rand(5, 10),
					"Sylvana" => rand(5, 10),
					"Alfredo" => rand(5, 10)
			);
		print("<br/>");
		echo ("Javi tiene una calificacion de: ".$calif["Javi"]);
		print("<br/>");
		echo ("Mariana tiene una calificacion de: ".$calif["Mariana"]);
		print("<br/>");
		echo ("Santy tiene una calificacion de: ".$calif["Santy"]);
		print("<br/>");
		echo ("Mosko tiene una calificacion de: ".$calif["Mosko"]);
		print("<br/>");
		echo ("Alexa tiene una calificacion de: ".$calif["Alexa"]);
		print("<br/>");
		echo ("Sylvana tiene una calificacion de: ".$calif["Sylvana"]);
		print("<br/>");
		echo ("Alfredo tiene una calificacion de: ".$calif["Alfredo"]);

		/* ARRAYS MULTIDIMENSIONALES */

		$leng = array
		(
			"WEB" => array
			(
				"HTML",
				"CSS",
				"JS",
				"PHP",
				"Haml",
				"SASS",
				"LESS"
				),
			"SERVER" => array
			(
				"AJAX",
				"LINUX",
				"WINDOWS",
				"UNIX",
				"RUBY",
				"NODEJS"
				),
			"APPS" => array
			(
				"JAVA",
				"OBJECTIVE",
				"SWIFT",
				"WEB",
				"IONIC"
				)
			);
		print("<br/>");
		echo ($leng['WEB'][2]);
		print("<br/>");
		echo ($leng['APPS'][4]);

		/* CONDICIONALES */

		$age = 19;
		$citizen = false; //Boolean

		/*
		comparison operators
		== Equivalency
		> Greater Than
		<
		>=
		<=
		!_ Not Equal
		compound conditionals
		&& and
		|| or
		*/

		print("<br/>");
		if ($age >= 18 && $citizen == true) {
			print("Puedes votar");
		}else
		{
			print("No Puedes votar");	
		}


		/* Switch case and break */

		$grade = "A";

		print("<br/>");

		switch ($grade) {
			case 'a':
			case 'A':
				print("10");
				break;
			case 'b':
				print("9");
				break;
			case 'c':
				print("8");
				break;
			case 'd':
				print("7");
				break;	
			
			default:
				print("Not recognized");
				break;	
		}

		$age = 18;

		/* TERNARY OPERATOR */

		$voteString = ($age>88)? "can vote ruco":(($age>18)&&($age<88)? "can vote": "no puedes");

		print($voteString);

		/* 

		/* LOOPS */

		print("<br/>");
		$i = 1;
		while ($i <= 100) {
			print($i);
			print("<br/>");
			$i ++;
		}

		$var=100;
		do
		{
			echo($var);
			echo("<br/>");
			$var++;
		} while ($var< 35);


		$x = 0;
		while ($x<= count($grupoBooli)) {
			print($grupoBooli[$x]."<br/>");
			$x++;
		}

		/* For Loops */

		for ($i=0; $i < 100; $i++) { 
			print($i. "<br/>");
		}


		/* Foor Each Loop */

		foreach ($calif as $key => $value) {
			print("Name: ".$key);
			print("<br/>Calificacion: ".$value);
			print("<br/>");
		}
		

	
?>

</body>
</html>