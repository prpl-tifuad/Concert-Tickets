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
	<form method="post" action="simpankonser.php" name="myForm" enctype="multipart/form-data">
 					<div class="row">
						<div class="col1">
							<label>Kode Konser</label>
						</div>
						
						<div class="col2">
							<input type="text" name="kodekonser">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Nama Konser</label>
						</div>
						
						<div class="col2">
							<input type="text" name="namakonser">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Tanggal</label>
						</div>
						
						<div class="col2">
							<input name="tanggal" type="date" id="tanggal">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Waktu</label>
						</div>
						
						<div class="col2">
							<input id="waktu" type="time" name="waktu">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Poster</label>
						</div>
						<div class="col2">
							<input type="file" name="poster">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Tempat</label>
						</div>
						
						<div class="col2">
							<select name="namatempat">
							<option>Pilih Kota</option>
<?php 
include 'db.php';
$query3 = "SELECT namatempat FROM venue";
$sql3 = mysqli_query($connect, $query3);
while ($row = mysqli_fetch_array($sql3))
{
    echo "<option value='".$row['namatempat']."'>'".$row['namatempat']."'</option>";
}
?>        
</select>
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Deskripsi</label>
						</div>
						
						<div class="col2">
							<textarea name="deskripsi"></textarea>
						</div>
					</div>
					<!-- <div class="row"> -->
					<div>
						 <input type="submit" name="SEND" value="SEND">
					</div>
				</form>
</body>
</html