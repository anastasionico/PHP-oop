<?php
	include "person.php";

	$person = new Person;

	$person->name="Nico";
	$person->age="27";

	echo $person->name . " is " . $person->age . " years old."


?>