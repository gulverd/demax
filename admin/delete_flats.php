<?php ob_start();?>
<?php
	
	include 'db.php';

	$post_id 	= $_GET['postID'];
	$floor_id 	= $_GET['floorID'];
	$flat_id 	= $_GET['flatID'];

	Echo $post_id . ' ' . $floor_id . ' ' . $flat_id; 

	$query1 = "DELETE FROM projects_flats WHERE id = '$flat_id'";
	$run1   = mysqli_query($conn,$query1);

	header('Location: projects_flats.php?floor_id='.$floor_id.'&post_id='.$post_id);

?>
