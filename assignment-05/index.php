<?php
include("password.php");

$receipt = new mysqli("localhost", "cnguye63", $mysql_password, "cnguye63");

?>
<?php

$output = 'SELECT Total, Store, Date, Item FROM receipt;';
$prepared = $receipt->prepare($output);
$prepared->execute();

$lists = $prepared->get_result();

foreach($lists as $list) {
?>

<style>
body {width:500px; margin:auto; padding-top:180px;}
</style>

<body>
<table width="500" border="1">
<tr> 
  <td width="100"><?=$list["Date"] ?></td>	
  <td width="150"><?=$list["Store"]?></td>	
  <td width="150"><?=$list["Item"]?></td>
  <td width="100"><?=$list["Total"]?></td>
</tr>
</table>
<?php
}
?>

<?php
$total_amount = 'SELECT SUM(Total) as totalValue FROM receipt;';
$add_up = $receipt->prepare($total_amount);
$add_up->execute();

$resultTotal = $add_up->get_result();
//print_r($resultTotal);

foreach ($resultTotal as $totalResult) {

?>


<h3 style="text-align:right">Total: $<?=$totalResult["totalValue"]?></h3>

<?php
}
?>

<a href="receipt.php"><h3 style="text-align:center">Enter Your New Expense here</h3></a>
