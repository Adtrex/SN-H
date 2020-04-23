<?php

$allUsers = scandir("db/users/");
	$countAllUsers = count($allUsers);

	for($counter = 0; $counter < $countAllUsers; $counter++) {

		$currentUser = $allUsers[$counter];

			$users = explode("___", file_get_contents("db/users/".$currentUser));

echo "<table>";

foreach ($users as $content) {
	echo "<tr><td>" .$content."</td></tr>";
	
}
echo "</table>";

}
?>