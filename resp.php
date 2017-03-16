<?php
	include 'admin/db.php';

	$gela = $_POST['get_option'];
	
	if(isset($gela)){

		$query = "SELECT * FROM projects_flats WHERE floor_id = '$gela'";
		$run   = mysqli_query($conn,$query);

		while($row = myqsli_fetch_array($run)){
			
			$flat_name = $row['flat_name'];

			print json_encode($row);

			exit;
		}
	}

?>
