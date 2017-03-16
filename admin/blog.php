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
</head>
<body>
	<?php include 'nav_in.php';
		  include 'db.php';
	?>
	<div class="col-md-12">
		<div class="container">
			<div class="col-md-12 dashboard_title_wrp">
				<h2>ბლოგი <a href="create_blog.php">სიახლის დამატება</a></h2>
			</div>
			<div class="col-md-12 dashboard_buttons_main_wrp">
				<?php

					$query  = "SELECT * FROM blog";
					$run    = mysqli_query($conn,$query);

					if(mysqli_num_rows($run) >= 1){
						echo '<table class="table table-striped table-hover table-bordered">
								<tr class="table_header">
									<td class="td_left">დასახელება</td>
									<td class="td_right">რედაქტირება</td>
									<td class="">წაშლა</td>
								</tr>';
						while($row = mysqli_fetch_array($run)){
							$id    = $row['id'];
							$title = $row['title'];

							echo '<tr>
								<td class="td_left">'.$title.'</td>
								<td class="td_right"><a href="edit_blog.php?id='.$id.'" class="btn btn-primary">რედაქტირება</a></td>
								<td class=""><a href="delete_blog.php?id='.$id.'" class="btn btn-danger">წაშლა</a></td>
							</tr>';
						}
						echo '</table>';
					}else{
						echo '<div class="alert alert-danger" role="alert">ამ დროისათვის არ არის ჩანაწერები!</div>';
					}

				?>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>