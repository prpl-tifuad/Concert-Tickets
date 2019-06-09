<?php 
include 'db.php';
	// echo $_POST['namatempat'];
	// echo $_FILES['img']['name'];
	// die( );
	$tempat_simpen_gambar = "Aposter/";
	$file = $tempat_simpen_gambar . basename($_FILES['poster']['name']);
	move_uploaded_file($_FILES['poster']['tmp_name'], $file);

	$kodekonser = $_POST['kodekonser'];
	$namakonser = $_POST['namakonser'];
	$tanggal = strtotime($_POST['tanggal']);
	$waktu = strtotime($_POST['waktu']);
	$namatempat = $_POST['namatempat'];
	$deskripsi = $_POST['deskripsi'];
	$query = "INSERT INTO konser VALUES ('$kodekonser','$namakonser','$tanggal','$waktu', '$file', '$namatempat', '$deskripsi')";
	$sql1 = mysqli_query($connect, $query);



 ?>