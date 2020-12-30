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

    <!-- map -->
    <div class="container">
      <div class="container my-5">
        <h3 class="text-grey">Address</h3>
        <div class="row">
          <div class="col-12 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15847.10668075914!2d106.75965!3d-6.7970043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa96fbd4c358f83f5!2sWasted%20project!5e0!3m2!1sen!2sid!4v1609224218960!5m2!1sen!2sid" class="w-100" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="col-12 col-md-6 mt-3 mt-md-0">
            <p>
              Contact:<br />
              <a href="https://api.whatsapp.com/message/AIPCZSIPP3GRH1" target="_blank">085974448879</a><br />
              <a href="mailto:wstdproject@gmail.com" target="_blank">wstdproject@gmail.com</a><br />
              <a href="https://www.behance.net/wastedarchive" target="_blank">be.net/wstdproject</a>
            </p>
            <p>
              Jl. Raya Cidahu, Pondokaso Tonggoh, RT07 RW02, Sukabumi Regency, Jawa Barat 43358
            </p>
            <p>
              Operational Hours:<br />
              Monday-Thursday (12PM-10PM)<br />
              Saturday-Sunday (Closed)
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php echo $socmed ?>
    <?php echo $footer ?>

  </div>
</body>

<script src="./js/index.js"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</html>
