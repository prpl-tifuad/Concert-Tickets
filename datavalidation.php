<?php 
  include 'db.php';
  	if($_POST) {
    # code...
    
    // $kode = 'exol';
    

    $id= $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $query2 = "INSERT INTO customer VALUES ('$id', '$email', '$name', '$hp')";


    // $tgl_beli = date("Y-m-d", strtotime($_POST['tgl_beli']));
    // $tgl_antar = date("Y-m-d", strtotime($_POST['tgl_antar']));
    $kodetiket = $_POST['kodetiket'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO pembelian VALUES ('', '$jumlah', '$id', '$kodetiket')";
    $sql2 = mysqli_query($connect, $query2);
    $sql1 = mysqli_query($connect, $query);

    $query3 = "SELECT `customer`.`id`, `customer`.`email`, `customer`.`name`, `customer`.`hp`, `konser`.`namakonser`, `konser`.`tanggal`, `konser`.`waktu`, `konser`.`namatempat`, `tiket`.`namatiket`, `tiket`.`harga`, `pembelian`.`jumlah`, `pembelian`.`jumlah`*`tiket`.`harga` as 'total' , `pembelian`.`kodebeli` FROM `customer` JOIN `pembelian` ON `customer`.`id` = `pembelian`.`id` JOIN `tiket` ON `pembelian`.`kodetiket`=`tiket`.`kodetiket` JOIN `konser` ON `tiket`.`kodekonser`=`konser`.`kodekonser` WHERE `customer`.`id` = '$id'";
    
    $sql = mysqli_query($connect, $query3);
    $data = mysqli_fetch_array($sql);

  }
  	
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Q'iNs</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style_pesan.css">
	<script src="formvalidation.js"></script>
  <style>
    .caption{
      color: azure;
      text-align: center;
      font-style: italic;
    }
  </style>
  
</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Q'iNs Tickets</span>
    <span class="site-heading-lower">Grab Your Tickets Fast</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Q'iNs Tickets</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.html">About Us</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="concert.html" >Concert</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="venue.html">Venue</a>
          </li>
          
          <li class="nav-item px-lg-4">
            <!-- <a class="nav-link text-uppercase text-expanded" >Search</a> -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>          
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div>
  <br><br><br>
</div>
		  <div class="row">
            <div class="col1">
              <label>KODE BELI</label>
            </div>
            <div class="col2">
              <label><?php echo $data['kodebeli']?></label>
            </div>
          </div>

          <div class="row">
            <div class="col1">
              <label>ID</label>
            </div>
            <div class="col2">
              <label><?php echo $data['id']?></label>
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>E-Mail</label>
            </div>
            <div class="col2">
              <label><?php echo $data['email']?></label>
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>Name</label>
            </div>
            <div class="col2">
              <label><?php echo $data['name']?></label>
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>Contact</label>
            </div>
            <div class="col2">
              <label><?php echo $data['hp']?></label>
            </div>
          </div>
          
          <!-- <div class="row"> -->
          <div>
            <br>  
          </div>
          <div class="row">
            <div class="col1">
              <label>The Concert You're Buying</label>
            </div>
            <div class="col2">
              <p> </p>
            </div>
          </div>

          <div class="row">
            <div class="col1">
              <label>Nama Konser</label>
            </div>
            <div class="col2">
             <label><?php echo $data['namakonser']?></label>
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>Tanggal</label>
            </div>
            <div class="col2">
              <label><?php echo date("jS F, Y", $data['tanggal']) ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>Waktu</label>
            </div>
            <div class="col2">
              <label><?php echo date("H : i", $data['waktu']) ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>Tempat</label>
            </div>
            <div class="col2">
              <label><?php echo $data['namatempat']?></label>
            </div>
          </div>

          

          <div class="row">
            <div class="col1">
              <label>TIKET KONSER</label>
            </div>
            
            <div class="col2">
				<label><?php echo $data['namatiket']?></label>
            </div>
          </div>

          <div class="row">
            <div class="col1">
              <label>Jumlah</label>
            </div>
            <div class="col2">
              <label><?php echo $data['jumlah']?></label>
            </div>
          </div>

          <div class="row">
            <div class="col1">
              <label>Total</label>
            </div>
            <div class="col2">
              <label><?php echo $data['total']?></label>
            </div>
          </div>


<div>
  <br>
</div>
		  <div class="row">
            <div class="col1">
            
            </div>
            <div class="col2">
            	<label>Bayar Melalui : </label>
              	<div class="button">
					<button id="yes">TRANSFER</button>
					<button id="no">INDOMARET</button>
				</div>
            </div>
          </div>
<div>
  <br><br><br>
</div>
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Q'iNs Tickets Entertainment Inc 2019</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
