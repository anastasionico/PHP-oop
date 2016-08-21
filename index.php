<?php
	require "vehicle.php";
	require "ducati.php";

	$ducati = new ducati(2," ducati 998");

	echo $ducati->is_bike();


?>