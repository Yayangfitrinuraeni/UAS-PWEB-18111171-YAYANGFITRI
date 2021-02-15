<!DOCTYPE html>
<html lang="en">
<head>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="modul/css/menuutama.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><title>Menu utama</title>
</head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#myPage">Toko Sepatu</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown"href="#">KATEGORI <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="sepatu.php">Sepatu Futsal</a></li>
            <li><a href="#">Sepatu Bola</a></li>
            <li><a href="#">Sepatu Kets</a></li> 
            <li><a href="#">Sepatu Voli</a></li>
            <li><a href="#">Dan lain-lain</a></li>
          </ul>
            </li>
            <li><a href="#keranjang" >KERANJANG</a></li> 
            <li><a href="#chat">CHAT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown"href="#">Pengaturan <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="editprofile.php">Profil</a></li>
            <li><a href="index.php" class="btn btn-primary mr-3">KELUAR</a></li>
          </ul>
        </div>
     </div>
   </nav>
   
   <div class="jumbotron2 text-center">
     <h1>
       <img src="Sepatu/logo.jpg">
      </h1>
      <form class="form-inline">
        <div class="input-group">
          <h4>Hello guys<br> <br>Disini kami menyediakan berbagai macam sepatu<br> 
           Dengan Kualitas Premium dan memiliki harga yang setara dengan Kualitasnya
          </h4>
        </div>
      </form>
    </div>
    <p>
      <center><a href="#product"class="btn btn-primary2 mr-3">ALL PRODUCT</a></center>
    </p>
   
    <!-- Container (Portfolio Section) -->
    <div class="container-fluid text-center bg-grey">
      <div class="row text-center">
        <!-- 1 -->
        <div class="col-sm-4">
          <div class="thumbnail">
            <div class="panel panel-default text-center">
              <img src="img/blue.png" alt="Gelang" width="400" height="300">
              <p><strong>Biru(42)</strong></p>
              <p>
                <a class="btn btn-primary" href="info.php">Beli</a> <a class="btn" href="#">Rp 2.766.000</a>
              </p>
            </div>
          </div>
        </div>
        <!-- 2 -->
        <div class="col-sm-4">
          <div class="thumbnail">
            <div class="panel panel-default text-center">
              <img src="img/black.png" alt="Sendal" width="400" height="300">
              <p><strong>Hitam (39)</strong></p>
              <p>
                <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 2.500.000</a>
              </p>
            </div>
          </div>
        </div>
        <!-- 3 -->
        <div class="col-sm-4">
          <div class="thumbnail">
            <div class="panel panel-default text-center">
              <img src="img/blue.png" alt="Koper" width="400" height="300">
              <p><strong>Blue (39)</strong></p>
              <p>
                <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 2.360.000</a>
              </p>
            </div>
          </div>
        </div>
        <!-- 4 -->
        <div class="col-sm-4">
          <div class="thumbnail">
            <div class="panel panel-default text-center">
              <img src="img/green.png" alt="Boneka" width="400" height="300">
              <p><strong>Green (41)</strong></p>
              <p>
                <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 2.370.000</a>
              </p>
            </div>
          </div>
        </div>
        <!-- 6 -->
        <div class="col-sm-4">
          <div class="thumbnail">
            <div class="panel panel-default text-center">
              <img src="img/orange.png" alt="Baju" width="400" height="300">
              <p><strong>Orange (43)</strong></p>
              <p>
                <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 3.125.000</a>
              </p>
            </div>
          </div>
        </div>
        <!-- 7 -->
        <div class="col-sm-4">
          <div class="thumbnail">
            <div class="panel panel-default text-center">
              <img src="img/red.png" alt="Kipas" width="400" height="300">
              <p><strong>Merah (44)</strong></p>
              <p>
                <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 2.745.000</a>
              </p>
            </div>
          </div>
        </div>
        <!-- 8 -->
              
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="container-fluid bg-grey">
      <h2 class="text-center">CONTACT</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Bandung, Jawa Barat</p>
          <p><span class="glyphicon glyphicon-phone"></span> +62-838-2533-3678</p>
          <p><span class="glyphicon glyphicon-envelope"></span> yayangfitri10@gmail.com</p>
        </div>
      </div>
      <h6 class="teks">
        <center><b>© Copyright by 18111171_Yayang Fitri Nuraeni_TIFRP18 CID-B</b></center>
      </h4>
    </div>
  </body>
</html>