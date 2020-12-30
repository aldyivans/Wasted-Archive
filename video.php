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
  <title>Wasted Archive - Contact</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/about.css">
  <link rel="icon" href="logo_icon.ico">

  <style>
    .menu ul li:nth-child(7) {
      border-bottom: 3px solid #ccc;
    }
  </style>
</head>

<body>
  <div class="container-fluid p-0">

    <?php echo $header ?>
    <?php echo $dropdown ?>
    <?php echo $menu ?>

    <!-- youtube update -->
    <div class="container my-5">
      <div class="text-center">
        <h3 class="text-grey">Tutorials</h3>
      </div>
      <div class="row my-5">
        <div class="col-12 col-md-4">
          <iframe class="w-100" height="300" src="https://www.youtube.com/embed/BN085RJFfVA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-4">
          <iframe class="w-100" height="300" src="https://www.youtube.com/embed/aRh10tuTDfQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-4">
          <iframe class="w-100" height="300" src="https://www.youtube.com/embed/CXcSBXHaD90" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <?php echo $socmed ?>
    <?php echo $footer ?>

  </div>
</body>

<script src="./js/index.js"></script>

<script>
  const currentHost = "/contact";
  const index = 6;
</script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</html>
