<?php 
	include 'db.php';
	$kodekonser = $_GET['kodekonser'];

	$query = "DELETE FROM konser WHERE kodekonser ='$kodekonser'";
		$sql = mysqli_query($connect,$query);

		if ($sql) {
			header("location:inputkonser.php");
		}
		else{
			die("Not Responding");
		}
 ?>