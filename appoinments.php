<?php session_start();
require_once('function/user.php');


$allappointsments = scandir("db/appointments/");
	$countAllappointments = count($allappointments);

	for($counter = 0; $counter < $countAllappointments; $counter++) {

		$currentappoinments = $allappointments[$counter];

		if($currentappoinments > 0){
			$_SESSION["message"] = "You have " . $currentappoinments . " pending appointments";
	 header("Location: mt.php");
		}else{
			$_SESSION["message"] = "You have no pending appointments";
			header("Location: .php");
			die();
		}
		
		