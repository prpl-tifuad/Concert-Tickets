<?php
	include 'db.php';
	

	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$QueryString = "SELECT * FROM venue WHERE namatempat LIKE '%$cari%'";
		$SQL = mysqli_query($connect,$QueryString); 		
	}else{
		$QueryString = "SELECT * FROM venue";
		$SQL = mysqli_query($connect,$QueryString); 	
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
              <form class="form-inline my-2 my-lg-0" method="get" action="venue.php">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search for venue..." aria-label="Search" name="cari" >
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
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
  <br>
</div>
  
    <div class="row">
    	<?php foreach ($SQL as $data) : ?>
  
    	<div class="col-md-4">
     		<div class="thumbnail">
          		<img src="<?= $data['img']; ?>" alt="Lights" style="width:100%">
          	</div>
          	<div class="caption">
            	<p><?= $data['namatempat'] ?></p>
         	</div>       
    	</div>

    	<?php endforeach; ?>
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