<?php
	$name = $_REQUEST['dogName'];
	$age = $_REQUEST['dogAge'];

	echo ("Your Dog name is: ".$name." and your dog is ".$age." human years old.");

	$dogAge =$age * 7;

	echo ("<br/>Your Dog is "."<strong>".$dogAge."</strong>"." in dog years");
?>