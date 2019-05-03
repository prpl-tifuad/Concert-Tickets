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


  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-pull-9">
          <div class="thumbnail">
            <img src="img/venue/tokyo-tower-japan.jpg" alt="Nature" style="width:100%">
            <div class="caption">
              <p>Tokyo, Japan</p>
            </div>
          </div>
        </div>  
        
        
        <div class="col-md-9 col-md-push-3">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputname" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputname" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputid" class="col-sm-2 control-label">ID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputid" placeholder="ID">
              </div>
            </div>
            <div class="form-group">
              <label for="inputemail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputemail" placeholder="Email">
              </div>
            </div>
            <div><br></div>
            <div class="form-group">
              <label for="namakonser" class="col-sm-2 control-label">Concert</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="namakonser" placeholder="concert">
              </div>
            </div>
            <div class="form-group">
              <label for="tglkonser" class="col-sm-2 control-label">Date</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="date" placeholder="date">
              </div>
            </div>
            <div class="form-group">
              <label for="place" class="col-sm-2 control-label">Place</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="place" placeholder="place">
              </div>
            </div>
            <div class="form-group">
              <label for="kategoritiket" class="col-sm-2 control-label">Ticket Categori</label>
              <div class="col-sm-10">
                <input type="radio" class="form-control" id="kategoritiket" name="kategoritiket">Seating
                <input type="radio" class="form-control" id="kategoritiket" name="kategoritiket">Standing
              </div>
            </div>
            <div class="form-group">
              <label for="jenistiket" class="col-sm-2 control-label">Ticket</label>
              <div class="col-sm-10">
                <input type="radio" class="form-control" id="jenistiket" name="jenistiket">Diamond
                <input type="radio" class="form-control" id="jenistiket" name="jenistiket">Ruby
                <input type="radio" class="form-control" id="jenistiket" name="jenistiket">Gold
              </div>
            </div>
            <div class="form-group">
              <label for="jumlah" class="col-sm-2 control-label">Quantity</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="jumlah">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
               <button type="submit" class="btn btn-default">Sumbit</button>
              </div>
            </div>
          </form>
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
