<!doctype html>
<html>
<h1>Let's make up a love story here together!!!</h1>
<?php

$method = $_SERVER["REQUEST_METHOD"];
echo $method;

if ($method =="GET") {
?>
	

	<form method="post">
		<input name="adjective" placeholder="adjective"> <br>
		<input name="noun" placeholder="noun"><br>
		<input name="verb" placeholder="verb"><br>
		<input name="number" placeholder="number"><br>
		<input name="number2" placeholder="number"><br>
	<button>POST</button>
	</form>

<?php
} else {
?>

	<pre>
<?php print_r($_REQUEST); ?>	
	</pre>
	<h2>HOW TED MET ROBIN.</h2>
	Once upon a time Robin and Ted met at a <?=$_REQUEST["adjective"]?> <?=$_REQUEST["noun"]?> .
	The first thing that Robin did was <?=$_REQUEST["verb"]?> Ted. Ted was so shocked. 

<?php
$number = $_REQUEST["number"];

if ($number ==30){
?>

Ted frozed for <?=$number ?> seconds.

<?php 
} 
?>

	So happy, he immediately asked her out on a date. 
	Ever since that day, Ted has never gotten Robin out of his mind. 

<?php
$number2= $_REQUEST["number2"];

if ($number2>=20){
?>

	They've been married for <?=$number2?> years now.

<?php 
} else {
?>

	It only took him <?=$_REQUEST["number2"]?> years to give her a kiss.

<?php
}
?>

	

<?php
}
?>
                                                                                                                                                                                                                         
</html>


