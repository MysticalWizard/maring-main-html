<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta http-equiv="Content-Type" charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Maring Network main website." />
  <title>Maring Network</title>

  <script async src='https://www.google-analytics.com/analytics.js'></script>
  <!-- Bootstrap core CSS -->
  <link href="stylesheets/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="stylesheets/jumbotron.css" rel="stylesheet">

  <!-- Global styles -->
  <link rel="stylesheet" type="text/css" href="style.css" />

  <!-- Local styles -->
  <link rel="stylesheet" type="text/css" href="index_style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/maring-main-html/favicon/favicon.ico" type="favicon.ico" />
  <link rel="icon" href="/maring-main-html/favicon/favicon.ico" type="favicon.ico" />
  <link rel="apple-touch-icon" sizes="57x57" href="/maring-main-html/favicon/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="/maring-main-html/favicon/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/maring-main-html/favicon/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="/maring-main-html/favicon/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/maring-main-html/favicon/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="/maring-main-html/favicon/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="/maring-main-html/favicon/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="/maring-main-html/favicon/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/maring-main-html/favicon/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="/maring-main-html/favicon/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/maring-main-html/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="/maring-main-html/favicon/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/maring-main-html/favicon/favicon-16x16.png" />
  <link rel="manifest" href="/maring-main-html/favicon/manifest.json" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="/maring-main-html/favicon/ms-icon-144x144.png" />
  <meta name="theme-color" content="#ffffff" />
</head>

<body>
  <header id="main-header">
    <div class="navigation">
      <div class="nav-header">
        <nav class="nav-header-container navbar-expand-sm">
          <div class="nav-logo-container">
            <a href="index.html">
              <img class="nav-header-logo" src="images/mystWiz-sat.jpg" alt="logo">
            </a>
            <a class="nav-header-logo-text" href="index.html">
              <img class="nav-header-logo-text" src="images/mysticalWizard-font-header.jpg" alt="Mystical Wizard">
            </a>
          </div>
          <div class="nav-tools-container">
            <a class="nav-account nav-pills justify-content-end" href="#"><i class="far fa-user-circle"></i></a>
            <div class="nav-login nav-pills justify-content-end">
              <a class="btn btn-primary" href="login.html" role="button">
                <p class="nav-tools-login">Log In</p>
              </a>
              <form id="log-out" class="nav-pills" action="includes/logout.inc.php" method="post">
                <button class="nav-logout-button btn btn-secondary" type="submit" name="logout-submit">Log Out</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
      <div class="sub-nav">
        <div class="sub-nav-container">
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#"><i class="far fa-compass"></i> Navbar</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="jsClockDark.html">JS Clock</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Lib.html">Libraries</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Terms and Definitions</a>
                  <div class="dropdown-menu">
                    <a href="school/terms-and-defs.html" class="dropdown-item">Page 1</a>
                    <a href="school/terms-and-defs-2.html" class="dropdown-item">Page 2</a>
                    <a href="school/terms-and-defs-3.html" class="dropdown-item">Page 3</a>
              </ul>

              <form class="form-inline my-2 my-lg-0">
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
              </form>
            </div>
          </nav>
        </div>
      </div>
      <div class="back-to-top">
        <a class="back-to-top-button" href="#"> <i class="fas fa-arrow-up"></i> </a>
      </div>
    </div>
  </header> <!-- /header -->
