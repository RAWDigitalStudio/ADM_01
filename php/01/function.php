<?php
	function hola()
	{
		print("Hello World <br/>");

	}

	function repeatMy()
	{
		for ($i=0; $i < 10; $i++) { 
			print("Hi this is reapeat number ".($i+1));
			print("<br/>");
		}
	}

	function dogAgeCalc($age)
	{
		$age = $age * 7;
		print("The age is: ".$age);
		print("<br/>");
	}

	function saludosQ($name)
	{
		print("Saludos: ".$name);
		print("<br/>");
	}

	function addThem($x,$y)
	{
		print("The result is ".($x+$y));
	}


?>