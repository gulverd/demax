<?php

	include  'db.php';
	
	$id = $_GET['id'];


	$query  = "DELETE FROM blog WHERE id = '$id'";
	$run    = mysqli_query($conn,$query);

	header('Location: blog.php');

?>