<?php

include("passwords.php");
$mysql = new mysqli(
	"localhost",
	"cnguye63",
	$mysql_password,
	"cnguye63"
);

$query = 'INSERT INTO fitness_tracking (calories, type, date) VALUES (?, ?, NOW());';
$prepared = $mysql->prepare($query);
$prepared->bind_param(
	"is",
	$_REQUEST["calories"],
	$_REQUEST["type"]
);
$prepared->execute();

header("Location: index.php");