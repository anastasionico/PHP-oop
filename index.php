<?php
	require "person.php";

	$person = new person("Micheal",80);
	
	echo $person->sentence();
?>