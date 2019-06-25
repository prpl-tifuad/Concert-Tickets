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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Q'INs Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="functionadmin.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="large material-icons" >account_circle</i>
        </div>
        <div class="sidebar-brand-text mx-3">Q'INs Admins</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">
        <i class="large material-icons" >laptop_mac</i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        INPUT DATA
      </div>

      <li class="nav-item">
        <a class="nav-link" href="inputvenue.php">
        <i class="large material-icons" >location_on</i>
          <span>Venue</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="inputkonser.php">
        <i class="large material-icons" >event</i>
          <span>Concert</span></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="inputtiket.php">
        <i class="large material-icons" >note</i>
          <span>Ticket</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tampilpembelian.php">
        <i class="large material-icons" >payment</i>
          <span>Payment</span></a>
	  </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="large material-icons" >more_vert</i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" name="searching" >
            <div class="input-group">
              <input type="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="cari">
              <div class="input-group-append">
                <button class="btn btn-primary" onclick="searchAdmin()" >
                  <i class="large material-icons">search</i>
                </button>
              </div>
            </div>
          </form>
          
          
          <div class="topbar-divider d-none d-sm-block"></div>

          <a class="navbar-nav ml-auto" href="index.php" data-toggle="modal" data-target="#logoutModal" >
          <i class="large material-icons">exit_to_app</i>
            Logout
          </a>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
         

            <!-- Section: Team v.2 -->
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>
  <!-- Section description -->
  

  <!-- Grid row -->
  <div class="row text-center">

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-5">
      <br>
      <img class="col-md-4" src="img/nicky.jpg">
      <h4 class="font-weight-bold dark-grey-text my-4">Nicky Dwi Rizki</h4>
      <h6 class="text-uppercase grey-text mb-3"><strong>1700018090</strong></h6>
      <h6 class="text-uppercase grey-text mb-3"><strong>Analyts</strong></h6>
      
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-5" >
      <img class="col-md-4" src="img/qeela.jpeg">
      <h4 class="font-weight-bold dark-grey-text my-4">Rizqa Tsaqila Aulia Haq</h4>
      <h6 class="text-uppercase grey-text mb-3"><strong>1700018114</strong></h6>
      <h6 class="text-uppercase grey-text mb-3"><strong>Programmer</strong></h6>
      
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">
      <br>
      <img class="col-md-4" src="img/sundari.jpg">
      <h4 class="font-weight-bold dark-grey-text my-4">Sundari Fatikasary</h4>
      <h6 class="text-uppercase grey-text mb-3"><strong>1700018065</strong></h6>
      <h6 class="text-uppercase grey-text mb-3"><strong>Designer</strong></h6>
      
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.2 -->


            
         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Q'INs 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->



</body>

</html>
