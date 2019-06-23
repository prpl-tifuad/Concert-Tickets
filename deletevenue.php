<?php 
	include 'db.php';
	$namatempat = $_GET['namatempat'];

	$query = "DELETE FROM venue WHERE namatempat ='$namatempat'";
		$sql = mysqli_query($connect,$query);

		if ($sql) {
			header("location:inputvenue.php");
		}
		else{
			die("Not Responding");
		}
 ?>