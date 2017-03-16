<?php
	ob_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Demax Group - Admin</title>
	<link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
</head>
<body>
	<?php 
		$now = date("YmdHms");
		include 'db.php';
		include 'nav_in.php';
		$post_id = $_GET['post_id'];

		$query1 = "SELECT * FROM projects WHERE id = '$post_id'";
		$run1   = mysqli_query($conn,$query1);

		while($row1 = mysqli_fetch_array($run1)){
			$img1 		  = $row1['image'];
			$projectName1 = $row1['name'];
			$finishDate1  = $row1['finishDate'];
			$status1 	  = $row1['status'];
			$about1       = $row1['about'];
			$map1 		  = $row1['map'];
			$additional1  = $row1['additional'];
		}
	?>
	<div class="col-md-12">
		<div class="container">
			<div class="col-md-12 dashboard_title_wrp">
				<h2>პროექტები</h2>
			</div>
			<div class="col-md-12 buti_wrapper_partners">
				<a href="projects.php" class="btn btn-default"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> უკან დაბრუნება</a>
			</div>
			<div class="col-md-12 dashboard_buttons_main_wrp">
				<form method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label>სახელი</label>
						<input type="text" name="name" class="form-control" placeholder="პროექტის სახელი" value="<?php echo $projectName1;?>">
					</div>
					<div class="col-md-6 col6 left">
						<div class="form-group">
							<label>დასრულების თარიღი</label>
							<input type="date" name="finishDate" class="form-control" value="<?php echo $finishDate1;?>">
						</div>
					</div>
					<div class="col-md-6 col6 right">
						<div class="form-group">
							<label>სტატუსი</label>
							<select class="form-control" name="status" value="<?php echo $status1;?>">
								<option value="1">მიმდინარე</option>
								<option value="2">დასრულებული</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>შენობის არსებული სურათი</label>
						<img src="..//imgs/projects/<?php echo $img1;?>" width="430" height="430">
					</div>	
					<div class="form-group">
						<label for="exampleInputFile">შენობის სურათი</label>
						<input type="file" class="form-control" id="exampleInputEmail1" name="image">
					</div>
					<div class="form-group">
						<label>პროექტის აღწერა</label>
						<textarea name="about"><?php echo $about1;?></textarea>
		        		<script>
		           			CKEDITOR.replace( 'about' );
		       	 		</script>
					</div>
					<div class="form-group">
						<label>Google Map</label>
						<textarea name="map" class="form-control"><?php echo $map1;?></textarea>
					</div>
					<div class="form-group">
						<label>დამატებითი ინფორმაცია</label>
						<textarea name="additional"><?php echo $additional1;?></textarea>
		        		<script>
		           			CKEDITOR.replace( 'additional' );
		       	 		</script>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="დამატება" class="btn btn-primary submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

<?php

	if(isset($_POST['submit'])){

		$img  		 = $_FILES['image'];
		$projectName = $_POST['name'];
		$finishDate  = $_POST['finishDate'];
		$status 	 = $_POST['status'];
		$about       = $_POST['about'];
		$map    	 = $_POST['map'];
		$additional  = $_POST['additional'];
 

		if(!empty($_FILES['image'])){
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_tmp  = $_FILES['image']['tmp_name'];
			$file_type = $_FILES['image']['type'];   
			$file_ext  = strtolower(end(explode('.',$_FILES['image']['name'])));
			$extensions = array("jpeg","jpg","png"); 

			$fl_name   = $now.'-'.$file_name;                
			
			
			move_uploaded_file($file_tmp,"..//imgs/projects/".$fl_name);


/*			$query = "UPDATE projects SET name = '$projectName',image = '$fl_name',about = '$about',status = '$status',finishDate = '$finishDate', additional = '$additional', map = '$map' WHERE id = '$post_id'";
			$run   = mysqli_query($conn,$query);

			header('Location: projects.php');

			echo $file_name;*/
			if($file_name != ''){
				move_uploaded_file($file_tmp,"..//imgs/projects/".$fl_name);

				$query = "UPDATE projects SET name = '$projectName',image = '$fl_name',about = '$about',status = '$status',finishDate = '$finishDate', additional = '$additional', map = '$map' WHERE id = '$post_id'";
				$run   = mysqli_query($conn,$query);

				header('Location: projects.php');
			}else{

				$query1 = "UPDATE projects SET name = '$projectName',about = '$about',status = '$status',finishDate = '$finishDate', additional = '$additional', map = '$map' WHERE id = '$post_id'";
				$run1   = mysqli_query($conn,$query1);

				header('Location: projects.php');
			}

		}

	}