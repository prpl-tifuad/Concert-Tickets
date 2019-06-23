<?php 
include 'db.php';
	// echo $_POST['namatempat'];
	// echo $_FILES['img']['name'];
	// die( );
	$tempat_simpen_gambar = "Avenue/";
	$file = $tempat_simpen_gambar . basename($_FILES['img']['name']);
	move_uploaded_file($_FILES['img']['tmp_name'], $file);

	$namatempat = $_POST['namatempat'];

	$query = "INSERT INTO venue VALUES ('$namatempat', '$file')";
	$sql1 = mysqli_query($connect, $query);
	header("location:inputvenue.php");
 ?>