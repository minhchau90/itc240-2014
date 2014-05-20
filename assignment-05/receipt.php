<style>
body{width:500px; margin:auto; padding-top:200px; font-size:200%;}
form {
width:200px;
background-color:gray;
margin:auto;
}
</style>
<form method="POST" action="receipt.php">
		<input name="Total" placeholder="Your total cost"><br>
		<input name="Store" placeholder="Where you spent"><br>
		<input name="Item" placeholder="What you bought"><br>
		<input type="submit">
</form>
<br>

<?php 

include ("password.php");

$receipt = new mysqli ("localhost", "cnguye63", $mysql_password, "cnguye63");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$query = 'INSERT INTO receipt (Total, Store, Date, Item) VALUES (?, ?, NOW(), ?);';
	$prepared = $receipt->prepare($query);
	$prepared->bind_param("sss", $_REQUEST["Total"], $_REQUEST["Store"], $_REQUEST["Item"]);
	$prepared->execute();
}

?>
<?php
include("password.php");

$receipt = new mysqli("localhost", "cnguye63", $mysql_password, "cnguye63");

?>

<a href="index.php"><p style="text-align:center">click here to view receipts</p></a>


