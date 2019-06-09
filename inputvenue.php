<?php 
	if($_POST) {
		# code...
		include 'db.php';
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_input.css">
</head>
<body>
	<form method="post" action="simpanvenue.php" name="myForm" enctype="multipart/form-data">
 					<div class="row">
						<div class="col1">
							<label>Nama Tempat</label>
						</div>
						
						<div class="col2">
							<input type="text" name="namatempat">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Image</label>
						</div>
						<div class="col2">
							<input type="file" name="img">
						</div>
					</div>
					
					<!-- <div class="row"> -->
					<div>
						 <input type="submit" name="SEND" value="SEND">
					</div>
				</form>
</body>
</html>
