<?php
include "./components/header.php";
include "./components/dropdown-menu.php";
include "./components/menu.php";
include "./components/socmed.php";
include "./components/footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wasted Archive</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="icon" href="logo_icon.ico">

  <style>
    .menu ul li:nth-child(1) {
      border-bottom: 3px solid #ccc;
    }
  </style>
</head>

<body>
  <div class="container-fluid p-0">

    <?php echo $header ?>
    <?php echo $dropdown ?>
    <?php echo $menu ?>

    <!-- logo spining -->
    <div class="container">
      <div class="row justify-content-center py-5">
        <div class="col-12 col-md-6">
          <div class="h-100 d-flex justify-content-center align-items-center">
            <img src="Assets/logo-3d.png" class="logo-spin w-50" />
          </div>
        </div>
      </div>
      <div class="line"></div>
    </div>

    <!-- slider -->
    <div class="container my-5">
      <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
        <!-- <ol class="carousel-indicators">
          <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active"></li>
          <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1"></li>
          <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <iframe class="w-100" height="400" src="https://www.youtube.com/embed/BN085RJFfVA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <!-- <div class="carousel-item">
            <iframe class="w-100" height="400" src="https://www.youtube.com/embed/aRh10tuTDfQ" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <div class="carousel-item">
            <iframe class="w-100" height="400" src="https://www.youtube.com/embed/CXcSBXHaD90" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe> -->
        </div>
      </div>
      <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a> -->
    </div>

    <?php echo $socmed ?>
    <?php echo $footer ?>

  </div>
</body>

<script src="./js/index.js"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</html>
