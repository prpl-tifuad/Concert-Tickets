<?php 
    include 'db.php';
    $namatempat = $_GET['namatempat'];
	$QueryString = "SELECT * FROM venue WHERE namatempat='$namatempat'";
	$SQL = mysqli_query($connect,$QueryString); 	
    $row = mysqli_fetch_array($SQL);

	if($_POST) {
		# code...
        include 'db.php';
        $tempat_simpen_gambar = "Avenue/";
	$file = $tempat_simpen_gambar . basename($_FILES['img']['name']);
	move_uploaded_file($_FILES['img']['tmp_name'], $file);

	$namatempat = $_POST['namatempat'];

	$query = "UPDATE venue SET namatempat='$namatempat', img='$file' WHERE namatempat='$namatempat'";
	$sql1 = mysqli_query($connect, $query);
	header("location:inputvenue.php");
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

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style_input.css">
  <script src="functionadmin.js"></script>
  <style>
  .hapus{
  background-color: rgba(28, 12, 173, 0.856);
  color: white;
  width: 100px;
  height: 40px;
  border-radius: 10px;
  float: right;
  margin-right: 1%;
  text-align: center;
  font-family: 'Arial Narrow', sans-serif;
}

.hapus:hover{
  background-color: lightblue;
  color: maroon;
}
  </style>

  
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

				<h1 class="h3 mb-0 text-gray-800">Input Data Venue</h1>
	

          </div>

		  
          <!-- Content Row -->
        <div><br><br></div>
			  <form method="post" action="" name="myForm" enctype="multipart/form-data">
 					<div class="row">
						<div class="col1">
							<label>Nama Tempat</label>
						</div>
						
						<div class="col2">
							<input type="text" name="namatempat" value="<?php echo $row['namatempat']?>">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Image</label>
						</div>
						<div class="col2">
							<input type="file" name="img" value="<?php echo $row['img']?>">
						</div>
					</div>
					
					<!-- <div class="row"> -->
					<div>
                      
                            <input type="submit" name="SAVE" value="SAVE">
                            <button class="hapus"><a href="deletevenue.php">DELETE</button>

                    
                         
					</div>
				</form>
         
		
			
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Q'INs 2019</span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  

  

</body>

</html>
