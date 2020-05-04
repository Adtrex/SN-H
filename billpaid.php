	<?php
	include_once("header.php");
	if(!isset($_SESSION["LoggedIn"])){
		header("Location: login.php");
	}
	?>
	<h1>You have successfully made your payment</h1>
	<a href="patients.php">Kindly go back to dashboard</a>


	<?php
	include_once("footer.php");
	?>