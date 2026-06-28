<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$pageTitles = [
    "index.php" => "Home - Ayu Venture",
    "what_we_do.php" => "What We Do - Ayu Venture",
    "our_partners.php" => "Our Partners - Ayu Venture",
    "contact.php" => "Contact Us - Ayu Venture",
    "management.php" => "Management - Ayu Venture",

    "dushyanta_basnayake.php" => "Dushyanta Basnayake - Ayu Venture"
];

// Default title
$title = $pageTitles[$currentPage] ?? "Ayu Venture";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $title; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="assets/img/icon.jpg">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="contact-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="mailto:info@ayuventures.com">info@ayuventures.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+94 711 300 8888</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#!" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#!" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#!" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/logo.png" alt="">
          
        </a>

        <nav id="navmenu" class="navmenu">
  <ul>
    <li>
      <a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : ''; ?>">
        Home
      </a>
    </li>

    <li>
      <a href="what_we_do.php" class="<?= ($currentPage == 'what_we_do.php') ? 'active' : ''; ?>">
        What We Do
      </a>
    </li>

    <li>
      <a href="our_partners.php" class="<?= ($currentPage == 'our_partners.php') ? 'active' : ''; ?>">
        Our Partners
      </a>
    </li>

    <li>
      <a href="management.php" class="<?= ($currentPage == 'management.php') ? 'active' : ''; ?>">
        Management
      </a>
    </li>

    <li>
      <a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : ''; ?>">
        Contact
      </a>
    </li>
  </ul>

  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>


      </div>

    </div>

  </header>