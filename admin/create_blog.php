<?php ob_start();?>
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
		include 'nav_in.php';
		include 'db.php';
		$now = date("Y-m-d H:m");
	?>
	<div class="col-md-12">
		<div class="container">
			<div class="col-md-12 dashboard_title_wrp">
				<h2>ბლოგი</h2>
			</div>
			<div class="col-md-12 dashboard_buttons_main_wrp">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>ბლოგის სათაური</label>
						<input type="text" name="title" class="form-control" placeholder="სათაური">
					</div>
					<div class="form-group">
						<label>ბლოგის სურათი</label>
						<input type="file" class="form-control" id="exampleInputEmail1" name="image">
					</div>	
					<div class="form-group">
						<label>ბლოგის შინაარსი</label>
						<textarea name="about"></textarea>
		        		<script>
		           			CKEDITOR.replace( 'about' );
		       	 		</script>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="დამატება">
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
		$title  	 = $_POST['title'];
		$text 		 = $_POST['about'];
		$blog_date   = date("Y-m-d H:m");


		if(isset($_FILES['image'])){
			$errors     = array();
			$file_name  = $_FILES['image']['name'];
			$file_size  = $_FILES['image']['size'];
			$file_tmp   = $_FILES['image']['tmp_name'];
			$file_type  = $_FILES['image']['type'];   
			$file_ext   = strtolower(end(explode('.',$_FILES['image']['name'])));
			$extensions = array("jpeg","jpg","png"); 
			$fl_name    = $file_name;                
			if(empty($errors)==true){
			    move_uploaded_file($file_tmp,"..//imgs/blog/".$fl_name);
			    $query = "INSERT INTO blog (title,texta,img,blog_date) VALUES ('$title','$text','$fl_name','$blog_date')";
				$run   = mysqli_query($conn,$query);
			    header('Location: blog.php');
			}else{
			    print_r($errors);
			}
		}

	}