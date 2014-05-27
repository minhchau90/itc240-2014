<!doctype html>
<html>
	<body>
		<h1>Hey Neko, you have weight problem. <br>
		Here is your current fitness activities:</h1>

<?php

	include("passwords.php");
	$mysql = new mysqli("localhost", "cnguye63", $mysql_password, "cnguye63");

	$prepared = $mysql->prepare('SELECT * FROM fitness_tracking order by date DESC');
	$prepared->execute();
	$results = $prepared->get_result();

	foreach ($results as $row) {
?>
	<div> 	
		On
		<?= htmlentities($row["date"]) ?>
		you burned
		<?= htmlentities($row["calories"]) ?>
		calories from 
		<?= htmlentities($row["type"]) ?>.
		
	</div>
<?php
	}

	$sumQuery = $mysql->prepare('SELECT SUM(calories) AS sum FROM fitness_tracking;');
	$sumQuery->execute();
	$sumResult = $sumQuery->get_result();

	$sum = $sumResult->fetch_array();
?>
		<div><br>
			Your total calorie input is:
			<?= $sum["sum"] ?>
		</div>
	</body>
</html>