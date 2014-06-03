<style>
header {
width:100%;
background:lightblue;
border:2px green solid;
}
#wrapper {
background-color:pink;
width:80%;
margin:auto;
text-align:center;
box-shadow:grey 0px 2px 2px 2px;
padding:3%;

}
li { list-style:none; 
}
.right {float:right;
margin-bottom:20px;}
img {
border:2px green solid;
}
</style>


<?php

include("password.php");

$mysql = new mysqli("localhost", "cnguye63", $my_password, "cnguye63");
?>

<!doctype html>
<head>
<title>Children Library</title>
</head>
<html>
<body>
<header>
	<h1>Welcome to Seattle Children Library</h1>
	<h2>Happy Books Hunting!</h2>
	
</header>

<div id=wrapper>
<h3>CHILDREN SECTION</h3>
<button class="right" >Check Out</button></br>
<br>
	<strong><a href="?result=front">COVERS</a></strong>
	<strong><a href="?result=list">LISTS</a>
</strong>
	
<?php
foreach($results as $books) {
	if($result=="front") {
		include("cover.php");
	} else {
		include("list.php");
	}
}

?>


</div>
</body>
</html>