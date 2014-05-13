<?php
//include but dont show my password
include ("passwords.php");

//to database
$myNewSQL = new mysqli("localhost", "cnguye63", $mysql_password, "cnguye63");

$result = $myNewSQL->query('SELECT * FROM Spring ORDER BY price;');


?>

<table width="500" border="1">
<tr>
    <td>TYPE</td>
    <td>NAME</td>
    <td>PRICE</td>
    <td>CONDITION</td>
    <td>ID</td>
  </tr>
<?php
foreach ($result as $col) {
?>
	
	<tr>

		<td><?= $col["type"] ?>
		<td><?= $col["name"] ?>
		<td><?= $col["price"] ?>
		<td><?= $col["conditions"] ?>
		<td><?= $col["id"] ?>
<?php
}
?>
</table>