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
		
		$now       = date("Y-m-d H:m");
		$blog_id   = $_GET['id'];

		$queryBlog = "SELECT * FROM blog WHERE id ='$blog_id'";
		$runBlog   = mysqli_query($conn,$queryBlog);
		
		while($rowBlog = mysqli_fetch_array($runBlog)){
			
			$blog_title  = $rowBlog['title'];
			$blog_text   = $rowBlog['texta'];
			$imga        = $rowBlog['img'];

		}
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
						<input type="text" name="title" class="form-control" placeholder="სათაური" value="<?php echo $blog_title;?>">
					</div>
					<div class="form-group">
						<label>ბლოგის შინაარსი</label>
						<textarea name="about"><?php echo $blog_text;?></textarea>
		        		<script>
		           			CKEDITOR.replace( 'about' );
		       	 		</script>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="რედაქტირება">
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

		$title  	 = $_POST['title'];
		$text 		 = $_POST['about'];
		
		$blog_date   = date("Y-m-d H:m");

		$query =  "UPDATE blog SET title = '$title', texta = '$text', blog_date = '$blog_date' WHERE id = '$blog_id'";
		$run   = mysqli_query($conn,$query);

		header('Location: blog.php');

	}