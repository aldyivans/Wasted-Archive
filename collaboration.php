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
  <title>Wasted Archive - About</title>
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

    <!-- collaboration -->
    <div class="container">
      <div class="text-center my-5">
        <h4 class="font-weight-bold m-0">WASTED X EVOLVED EXTND X DEMARKASI</h4>
        <h2 class="font-weight-bold">"DESIGN CHALLENGE"</h2>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 my-2">
          <img src="Assets/collaboration/collab1.jpg" class="w-100" />
        </div>
        <div class="col-12 col-md-4 my-2">
          <img src="Assets/collaboration/collab2.jpg" class="w-100" />
        </div>
        <div class="col-12 col-md-4 my-2">
          <img src="Assets/collaboration/collab3.jpg" class="w-100" />
        </div>
        <div class="col-12 col-md-4 my-2">
          <img src="Assets/collaboration/collab4.jpg" class="w-100" />
        </div>
        <div class="col-12 col-md-4 my-2">
          <img src="Assets/collaboration/collab5.jpg" class="w-100" />
        </div>
        <div class="col-12 col-md-4 my-2">
          <img src="Assets/collaboration/collab6.jpg" class="w-100" />
        </div>
      </div>

      <div class="text-center my-5">
        <h6 class="font-weight-bold">
          In addition to my 3K Instagram followers, I will share a special edtion bundle pack which I made as a present yesterday in the 2020 Wasted challenge,
          congratullations on getting a gift from me, support me.<br />
          Download, and you will get a QR barcode to download the file There will be 50+ Special Bundle pack PNG, Consisting of Paper Texture, Dust Tape,
          Plastic Texture, Foil, Sticker Tape, giftcard, Art Print on paper, *ect.<br />
          150+ Element template vol.2 x @demarkasi_ bundle edition
        </h6>
      </div>
    </div>

    <?php echo $socmed ?>
    <?php echo $footer ?>

  </div>
</body>

<script src="./js/index.js"></script>

<script>
  const currentHost = "/collaboration";
  const index = 4;
</script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</html>
