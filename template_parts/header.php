<!doctype html>
<html class="no-js" lang="">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155853964-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155853964-1');
</script>



  <meta charset="utf-8">
  <title><?php echo $page_title ?></title>
  <meta name="description" content="<?php echo $page_description ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3d5567">
  <meta name="msapplication-TileColor" content="#3d5567">
  <meta name="theme-color" content="#eeeeee">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main-v1.css">
  <link rel="stylesheet" media="print" href="css/print.css">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <meta name="theme-color" content="#fafafa">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap" rel="stylesheet">



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>

  <script src="js/jquery.cookie.js"></script>

<script src="js/jquery.cookiecuttr.js"></script>


<script type="text/javascript">
  if (jQuery.cookie('cc_cookie_decline') == "cc_cookie_decline") {
  // do nothing
  } else {
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-155853964-1']);
  _gaq.push(['_trackPageview']);

  (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document. getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  }


  $(document).ready(function () {
    $.cookieCuttr();
  });

</script>


</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an outdated browser. Please upgrade your browser to improve your experience and security.</p>
    <style>
    .browserupgrade {
      text-align: center;
      background-color: #b04431;
      padding: 30px;
      color: #ffffff;
    }
    .banner__logo {
       margin: 32px;
    }
    .navbar-nav{ background-color: #333333; color #fff; }
    .card-\-content {
      margin: 0 30px 0;
    }
    .card-\-home {
      margin: 0 30px 0;
    }
    .navbar-nav a {
      display: inline;
      margin: 0 auto;
      text-align: center;
    }
    .navbar-nav .nav-item:last-child a {
      display: inline;
      margin: 0 auto;
    }
    .navbar-nav .nav-item:first-child {
      display: none;
    }
    .navbar-nav .nav-item:last-child {
      width: 100%;
      text-align: center;
    }
    .container {
      max-width: 90%;
    }
    </style>
  <![endif]-->
<div class="page-wrapper">

<header>
  <div class="banner">


    <?php if (isset($_SERVER['HTTP_USER_AGENT']) && ( (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false ) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) ) ) { ?>
      <!-- is IE 11 or below -->
      <img src="img/banner-s.jpg" class="banner__img" style="width: 383px" width="383" alt="Hyatt Privé Lens – Banner">
    <?php } else { ?>
      <picture>
      <source media="(min-width: 1200px)" srcset="img/banner-l.jpg">
      <source media="(min-width: 700px)" srcset="img/banner.jpg">
      <img src="img/banner-s.jpg" class="banner__img" alt="Hyatt Privé Lens – Banner">
      </picture>
    <?php } ?>



    <div class="banner__overlay">
      <a href="index.php">
        <img src="img/hyatt-prive-logo.png" class="banner__logo" alt="Hyatt Privé Lens – Banner">
      </a>
    </div>
  </div>
  <nav class="navbar navbar--main navbar-expand-lg navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bars open-icon"></i><i class="fas fa-times close-icon"></i> MENU
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index.php">Home</a>
            <a class="dropdown-item" href="welcome.php">Welcome to Hyatt Privé Lens</a>
            <a class="dropdown-item" href="celebrate_park_hyatt.php">Celebrating 40 Years of Park Hyatt</a>
            <a class="dropdown-item" href="alila_sustainability.php">Alila & Sustainability</a>
            <a class="dropdown-item" href="new_hotels.php">Six New and Noteworthy Hotels</a>
            <a class="dropdown-item" href="hyatt_ski_resorts.php">Hit the Slopes at these Top Hyatt Ski Resorts</a>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo $next_page ?>" id="navbarDropdownMenuLink" role="button">
            NEXT <i class="fas fa-arrow-right"></i>
          </a>
        </li>
      </ul>
  </nav>

<div id="alert-banner">

</div>

</header>
