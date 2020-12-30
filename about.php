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
</head>

<body>
  <div class="container-fluid p-0">

    <?php echo $header ?>
    <?php echo $dropdown ?>
    <?php echo $menu ?>

    <!-- about -->
    <div class="container my-5">
      <div class="row align-items-center">
        <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-start">
          <div class="photo">
            <img src="./Assets/profile-pic.jpg" />
          </div>
        </div>
        <div class="col-12 col-md-4 my-5 my-md-0 d-flex justify-content-center">
          <img src="Assets/wasted-font.png" width="200" />
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-end">
          <img src="./Assets/logo-icon-white.png" width="200" height="200" />
        </div>
      </div>

      <div class="px-0 px-md-5">
        <h6 class="text-center">
          Wasted Archives®️<br />
          <br />
          Wasted Archive / is a freelance illustrator whose branding was built by Rechall Radhika Z,
          from Sukabumi, Indonesia.<br />
          <br />
          Over the past 10 years, Rechall has worked in Streetwear culture and brands / clothing and the
          music scene creating everything from album covers, branding and screen prints to new interpretations
          of posters and designs for new brands to brands that have been in the Streetwear industry for a long time.
          Rechall to the use of productive addictive substances, which he often did as illustrations for client
          branding, and character / tagline identities, Trying to straddle Duality, Reality and Fantasy,
          Rechall was able to create peepholes into alternative realms and strange scenes that carried the
          connoisseurs into the hallucinogenic state of mind. The energy between natural life forms and
          technology is revived when it transcends between alien landscapes that are shrouded in a free
          and savage, aura of life that is juxtaposed with dreams such as science fiction.
          Rechall's preoccupation with opening his subconscious mind is reflected in his style.<br />
          <br />
          Its clients include Outcore Storage, Microzide, Summerlane, R.E.P, Hellwind, WHSTL, NYXX,
          My Beloved Enemy, and many bands and brands from around the world.<br />
          <br />
          Rechall also created a forum for artists to work on the Marketplace it built,<br />
          "USELESS COLLECTIVE STUDIO" ©️ 2020<br />
          <!-- <br />
          Email: wstdproject@gmail.com<br />
          <br />
          You can follow Wasted on, Instagram, Bigcartel, Gumroad, Youtube, Behance, Giphy and Facebook.<br />
          <br />
          Sign up for the newsletter for updates on other print and Infi releases. -->
        </h6>
      </div>

      <div class="w-100">
        <img src="./Assets/logo-master.png" class="w-100" alt="LOGO MASTER" />
      </div>
    </div>

    <?php echo $footer;
    echo $_SERVER['REQUEST_URI'];
    ?>

  </div>
</body>

<script src="./js/index.js"></script>

<script>
  const currentHost = "/wasted-archive/about.php";
  const index = 5;
</script>
<script src="js/activeNav.js"></script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>

</html>
