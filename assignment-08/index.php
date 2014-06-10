<?php

include("password.php");
include("functions.php");

?>

<!doctype html>
<html>
<head>
<title>Functions- Assignment 08</title>
<style>
header {
background:magenta;
padding:1%;
text-align:center;
border: 2px solid green;
}

#wrapper {
width:80%;
margin:auto;
background:lightblue;
padding:1%;
text-align:center;
border: 2px solid green;
}
</style>
</head>





<body>

<header>
<h1>SUMMER SALE
</header>

<div id= "wrapper">
<h2>Explore what we have on SALE today!!!</h2>
We have 
<?php 

	$price = request("price");
	if($price ='') {
	$result = getClothesByPrice();

	foreach($result as $row) {  
?>
		<?= $row["id"] ?>  
		<?= $row["type"] ?>
		<?= $row["name"] ?>
		<?= $row["price"] ?>
		    
		

<?php }

	}else {
	$result = getTypeOfClothes();

	foreach($result as $row) { 
?>

		<?= $row["type"] ?>,
<?php }
	}
?>

in store.

</div>
</body>
</html>
