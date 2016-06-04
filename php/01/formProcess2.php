<?php

		$age = $_REQUEST['age'];
		$citizen = $_REQUEST['citizen'];


		if ($age >= 18 && $citizen == 'true') {
			print("Puedes votar");
		}else
		{
			print("No Puedes votar");	
		}


?>