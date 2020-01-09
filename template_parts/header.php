<!doctype html>
<html class="no-js" lang="">

<head>
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
  <link rel="stylesheet" href="css/main.css">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <meta name="theme-color" content="#fafafa">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap" rel="stylesheet">

</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
<div class="page-wrapper">

<header>
  <div class="banner">
    <picture>
      <source media="(min-width: 1200px)" srcset="img/banner-l.jpg">
        <source media="(min-width: 700px)" srcset="img/banner.jpg">
      <img src="img/banner-s.jpg" class="banner__img" alt="Hyatt Privé Lense – Banner">
    </picture>



    <div class="banner__overlay">
      <a href="index.php">
        <img src="img/hyatt-prive-logo.png" class="banner__logo" alt="Hyatt Privé Lense – Banner">
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


</header>
