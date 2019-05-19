<?php 
  if($_POST) {
    # code...
    include 'db.php';
    // $kode = 'exol';
    $id= $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $query2 = "INSERT INTO customer VALUES ('$id', '$email', '$name', '$hp')";


    // $tgl_beli = date("Y-m-d", strtotime($_POST['tgl_beli']));
    // $tgl_antar = date("Y-m-d", strtotime($_POST['tgl_antar']));
    $kodekonser = 'exol';
    $jumlah = $_POST['jumlah'];
    $kodekategori = $_POST['kodekategori'];

    $query = "INSERT INTO pembelian VALUES ('', '$jumlah', '$id', '$kodetiket')";
    $sql2 = mysqli_query($connect, $query2);
    $sql1 = mysqli_query($connect, $query);
    
    $query3 = "SELECT namakonser, tanggal, tempat, waktu FROM konser WHERE kodekonser='exol'";
    $sql3 = mysqli_query($connect, $query3);

    // if ($sql1) {
    //   echo "<script type='text/javascript'>
    //       window.alert('Input is successful');
    //       window.location.href = 'tampil_beli.php';
    //       </script>
    //   ";
    // }
    // echo "INPUTNYA BERHASIL LHO <br>";
    // echo "<a href = 'tampil_kamar.php'>LIHAT DATA</a>";
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
  <!-- <link href="style_pesan.css" rel="stylesheet"> -->
  <style>
    .caption{
      color: azure;
      text-align: center;
      font-style: italic;
    }
  </style>
  <script src="formvalidation.js"></script>
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


  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/venue/tokyo-tower-japan.jpg" alt="Nature" style="width:100%">
            <div class="caption">
              <p>Tokyo, Japan</p>
            </div>
          </div>
        </div>  
        
      
        <div class="col-md-9">
          <div class="data">
            <form method="post" action="#" name="myForm" onsubmit="return validateForm()" >
              <div class="row">
                <div class="col-md-1">
                  <label>ID</label>
                </div>
                <div class="col-md-8">
                  <input type="text" name="id">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <label>Email</label>
                </div>
                <div class="col-md-8">
                  <input type="text" name="email">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <label>Name</label>
                </div>
                <div class="col-md-8">
                  <input type="text" name="name">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <label>No.Hp</label>
                </div>
                <div class="col-md-8">
                  <input type="text" name="hp">
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <label>Concert</label>
                </div>
                <div class="col-md-8">
                  <p>The ElyXion</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <label>Date</label>
                </div>
                <div class="col-md-8">
                  <p>2019-07-14</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <label>Place</label>
                </div>
                <div class="col-md-8">
                  <p>Gocheok Sky Dome</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <label>Time</label>
                </div>
                <div class="col-md-8">
                  <p>17.00</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-1">
                  <label>Ticket</label>
                </div>
                <div class="col-md-8">
                  <select name="tiket">
                    <option>Select Your TIcket</option>
                    <?php 
                      include 'db.php';
                      $query4 = "SELECT kodetiket, namatiket FROM tiket";
                      $sql4 = mysqli_query($connect, $query4);
                      while ($row = mysqli_fetch_array($sql4))
                      {
                        echo "<option value='".$row['kodetiket']."'>'".$row['namatiket']."'</option>";
                      }
                    ?>        
                  </select>
                </div>
              </div>          
              <div class="row">
                <div class="col-md-1">
                  <label>Quantity</label>
                </div>
                <div class="col-md-8">
                  <input type="number" name="jumlah">
                </div>
              </div>
          <!-- <div class="row"> -->
              <div>
                <input type="submit" name="SEND" value="SEND">
              </div>
            </form>
          </div>
         
        </div>       
      </div>
    </div>
  </section>

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
