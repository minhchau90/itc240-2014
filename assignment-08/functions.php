<?php



function request($name) {
	$var = $name;
	if (isset($_REQUEST[$name])) {
	$var = $_REQUEST[$name];
	return $var;
	}
	return false;
}

$mysql = new mysqli("localhost", "cnguye63",$mysql_password , "cnguye63");

function getTypeOfClothes() {
	global $mysql;
	$prepared = $mysql->prepare('SELECT type FROM Spring');
	$prepared->execute();
	return $prepared->get_result();
}




function getClothesByPrice($price) {
	global $mysql;
	$prepared = $mysql->prepare('SELECT * FROM Spring where price = ?');
	$prepared->bind_param("i", $price);
	$prepared->execute();
}




?>
