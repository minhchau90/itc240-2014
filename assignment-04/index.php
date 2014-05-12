<?php

//include but dont show my password
include ("passwords.php");


//connects to database
$myNewSQL = new mysqli("localhost", "cnguye63", $mysql_password, "cnguye63");

$result = $MyNewSQL->query('SELECT * FROM Spring ORDER BY type ASC;');
?>


<table>
<?php
foreach ($result as $row) {
?>
	<tr>
		<td><?= $row["type"] ?>
		<td><?= $row["name"] ?>
		<td><?= $row["price"] ?>
		<td><?= $row["conditions"] ?>
		<td><?= $row["id"] ?>
<?php
}
?>
</table>
