<?php

$dresses = [
[ "brand" => "Christian Dior", "theme" => "Red Carpet", "year" =>2014, "price" => "$19,000",],
[ "brand" => "Gucci", "theme" => "Movie Primiere",  "year" =>2012, "price" => "$23,000"],
[ "brand" => "Louis Vuitton", "theme" => "Dinner Gala",  "year" =>2014, "price" =>"$11,000"],
[ "brand" => "Alexander McQueen", "theme" => "Red Carpet",  "year" =>2010, "price" => "$22,000"],
[ "brand" => "Prada", "theme" => "Movie Premiere",  "year" =>2013,"price" => "$9,000"],
[ "brand" => "Chanel", "theme" => "Red Carpet",  "year" =>2011,"price" => "$33,000"],
];

$show = "all";
if (isset($_REQUEST["show"])) {
	$show = $_REQUEST["show"];
}

shuffle($dresses);

include("page.php");