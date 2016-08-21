<?php
	require "person.php";

	$person = new person;
	$person->name="John";
	$person->age="35";

	echo $person->sentence();
?>