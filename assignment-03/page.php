<!doctype html>
<head>
<style>
	#wrapper {
		background-color:red;
		width:960px;
		height:800px;
		margin:0 auto;
		padding:40px;
		border:3px solid black;
		text-align:center;
		}
</style>
</head>
<html>
<body>
<div id="wrapper">
		<h1>Dresses</h1>
		<a href="?show=cover">Photo view</a>
		<a href="?show=all">List view</a>
		<br>
		<?= count($dresses); ?> dresses are available.
		
		<ul>
<?php

	foreach ($dresses as $dresses) 
{
	if ($show == "cover") 
	{
	include("cover.php");
	}else {
		include ("dresses.php");
	}
}
?>
		</ul>
</div>
</body>
</html>