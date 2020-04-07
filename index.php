<!DOCTYPE html>
<html lang="en">
<head>
  <title>Selamat Datang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 690px;
  }
  .carousel-caption h3{
    margin-top: -340px;
    font-size: 90px;
    font-family: "Font Sevory";
  }

  .btn{
    width: 100px;
  }
  @font-face {
         font-family: "Font Sevory";
         src: url('font/beyond_the_mountains-webfont.woff');
  }

  p{
    margin-top: -20px;
    font-size: 20px;
  }

  button a{
    color: white;
    text-decoration: none;
  }

  button a:hover{
    color: white;
    text-decoration: none;
  }

  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="surya.jpg" >
      <div class="carousel-caption">
        <h3>Sevory</h3>
        <p>Skensa Inventory</p>
        <button type="button" class="btn btn-outline-dark"><a href="login/index.php">Mulai</a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="surya.jpg"  >
      <div class="carousel-caption">
        <h3>Sevory</h3>
        <p>Skensa Inventory</p>
        <button type="button" class="btn btn-outline-dark"><a href="login/index.php">Mulai</a></button>
      </div>
    </div>
    <div class="surya.jpg" >
      <div class="carousel-caption">
        <h3>Sevory</h3>
        <p>Skensa Inventory</p>
        <button type="button" class="btn btn-outline-dark"><a href="login/index.php">Mulai</a></button>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>