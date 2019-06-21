<?php 
  include 'db.php';

    $kodekonser = $_GET['kodekonser'];
    $query3 = "SELECT * FROM konser WHERE kodekonser='$kodekonser'";
    $SQL = mysqli_query($connect, $query3);
    $data = mysqli_fetch_array($SQL);

    $query1 = "SELECT * FROM tiket WHERE kodekonser='$kodekonser'";
    $SQL1 = mysqli_query($connect, $query1);

  

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
  <script src="validasi.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <a class="nav-link text-uppercase text-expanded" href="index.php">Concert
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="venue.php">Venue</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.html">About Us</a>
          </li>
          
          <li class="nav-item px-lg-4">
            <!-- <a class="nav-link text-uppercase text-expanded" >Search</a> -->
            <form class="form-inline my-2 my-lg-0"  method="get" action="index.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search" name="cari" >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>          
          </li>
          <li class="nav-item px-lg-4">
            <!-- <a class="nav-link text-uppercase text-expanded" >Search</a> -->
            <a class="nav-link text-uppercase text-expanded" href="login.html">
              <i class="large material-icons" >account_circle</i>
              Admin Login     
            </a>  
             
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div>
  <br><br><br>
</div>
<form method="post" action="datavalidation.php" name="myForm" onsubmit="return validateForm()">
          <div class="row">
            <div class="col1">
              <label>ID</label>
            </div>
            <div class="col2">
              <input type="text" name="id" >
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>E-Mail</label>
            </div>
            <div class="col2">
              <input type="text" name="email" >
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>Name</label>
            </div>
            <div class="col2">
              <input type="text" name="name" >
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>Contact</label>
            </div>
            <div class="col2">
              <input type="text" name="hp" >
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
              <label>KATEGORI TIKET</label>
            </div>
            <div class="col2">
              <label>
              <table class="data" border="5" align="center" cellspacing="3"> 
                  <tr> 
                      <td>KATEGORI TIKET</td>
                      <td>NAMA TIKET</td>
                      <td>HARGA (IDR)</td>
                  </tr>
                  <?php
                  include 'db.php';
                   $query1 = "SELECT `tiket`.`namatiket`, `kategoritiket`.`namakategori`, `tiket`.`harga` FROM tiket JOIN kategoritiket ON `tiket`.`kodekategori`=`kategoritiket`.`kodekategori` WHERE `kodekonser`='$kodekonser'";
                   $SQL1 = mysqli_query($connect, $query1);
                      foreach ($SQL1 as $data) {
                        echo "
                          <tr>
                            <td>$data[namakategori]</td>
                            <td>$data[namatiket]</td>
                            <td>$data[harga]</td>
                          </tr>
                        ";
                      }     
                  ?>
              </table>
            </label>
            </div>
          </div>
<div>
  <br><br><br>
  <br><br><br>
</div>
          <div class="row">
            <div class="col1">
              <label>TIKET KONSER</label>
            </div>
            
            <div class="col2">
              <select name="kodetiket" >
                <option>PILIH TIKET</option>
                  <?php 
                    include 'db.php';
                    $query3 = "SELECT * FROM tiket WHERE kodekonser='$kodekonser'";
                    $sql3 = mysqli_query($connect, $query3);
                    while ($row = mysqli_fetch_array($sql3))
                    {
                      echo "<option value='".$row['kodetiket']."'>'".$row['namatiket']."'</option>";
                    }
                  ?>        
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col1">
              <label>Jumlah</label>
            </div>
            <div class="col2">
              <input type="number" name="jumlah" >
            </div>
          </div>
          <div class="row">
            <div class="col1">
              <label>PASTIKAN DATA YANG ANDA INPUTKAN BENAR</label>
            </div>
            <div class="col2">
              <p></p>
            </div>
          </div>
          <div>
             <input type="submit">
          </div>
        </form>
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
