


<?php

function make_cookie($name, $value) {
	setcookie($name, $value, time() +60*60*24*5);
}

function deleteCookie($name) {
    setcookie($name, "", 10, "/");
  }

include("password.php");

  make_cookie("bookID", "");
  make_cookie("library", json_encode($library));


$library = [
    "author" =>$author, true,
    "title" =>$title, true,
  ];


  
  if (isset($_COOKIE["library"])) {
    $from_cookie = json_decode($_COOKIE["library"], true);

	$sort = $from_cookie["sort"];
	$view = $from_cookie["view"];
	$theme = $from_cookie["theme"];
  }

if (isset($_COOKIE["user"])) {
    	
	$sort = $_COOKIE["sort"];
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$view = htmlentities($_REQUEST["view"]);
	$theme = htmlentities($_REQUEST["theme"]);

}

$mysql = new mysqli("localhost", "cnguye63", $my_password, "cnguye63");

$results =$mysql->query('SELECT * FROM library;');
 

$result = "list";
if(isset($_REQUEST["result"])) {
	$result = $_REQUEST["result"];
}

include("page.php");
?>


