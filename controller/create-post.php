<?php 
//------------------------------------------------------------------------------------------------------------------------------------------- 
//	Establishing a Database
//-------------------------------------------------------------------------------------------------------------------------------------------

	require_once(__DIR__ . "/../model/config.php");
//------------------------------------------------------------------------------------------------------------------------------------------- 
	$connection = new mysqli($host, $username, $password, $database); 
// 	Variables
//-------------------------------------------------------------------------------------------------------------------------------------------
	
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');

 	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title' , post = '$post'");
 
 	if ($query) {
 		echo "<p>Successfully inserted post: $title</p>";
 		echo "Posted on: " . $date->format('M d,Y') . " at " . $time->format('g:i');
 	}
 	elseif ($query) {
 		echo "<p>Inserted post: $post</p>";
 	}
 	else {
 		echo "<p>" . $_SESSION["connection"]->error . "</p>";
 	}

 ?>
