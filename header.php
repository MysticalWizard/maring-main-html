<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta http-equiv="Content-Type" charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Maring Network main website." />
  <title>Maring Network</title>

  <script async src='https://www.google-analytics.com/analytics.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/jumbotron.css" rel="stylesheet">

  <!-- Global styles -->
  <link rel="stylesheet" type="text/css" href="style.css" />

  <!-- Local styles -->
  <link rel="stylesheet" type="text/css" href="index_style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon/favicon.ico" type="favicon.ico" />
  <link rel="icon" href="favicon/favicon.ico" type="favicon.ico" />
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
  <link rel="manifest" href="favicon/manifest.json" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png" />
  <meta name="theme-color" content="#ffffff" />
</head>

<body>
  <header id="main-header">
    <div class="navigation">
      <div class="nav-header">
        <nav class="nav-header-container navbar-expand-sm">
          <div class="nav-logo-container">
            <a href="index.php">
              <img class="nav-header-logo" src="images/mystWiz-sat.jpg" alt="logo">
            </a>
            <a class="nav-header-logo-text" href="index.php">
              <img class="nav-header-logo-text" src="images/mysticalWizard-font-header.jpg" alt="Mystical Wizard">
            </a>
          </div>
          <div class="nav-tools-container">
            <?php
              if (isset($_SESSION['userId'])) {
              ?> <!-- IF Logged In -->
                <a class="nav-account nav-pills nav-acc-btn justify-content-end" href="account.php"><i class="far fa-user-circle"></i></a>
                <div class="nav-logout nav-pills justify-content-end">
                  <form id="log-out" class="nav-pills" action="includes/logout.inc.php" method="post">
                    <button class="nav-logout-button btn btn-secondary" type="submit" name="logout-submit">Log Out</button>
                  </form>
                </div>
              <?php } else { ?> <!-- IF Logged Out -->
                <button class="nav-account nav-pills nav-acc-btn justify-content-end" data-toggle="modal" data-target="#accNotLoggedIn"><i class="far fa-user-circle"></i></button>
                <div class="nav-login nav-pills justify-content-end">
                  <a class="btn btn-primary" href="login.php" role="button">
                    <p class="nav-tools-login">Log In</p>
                  </a>
                </div>
              <?php
              }
            ?>
          </div>
        </nav>
      </div>
      <div class="sub-nav">
        <div class="sub-nav-container">
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#"><i class="far fa-compass"></i> Main</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="jsClockDark.html">JS Clock</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Lib.html">Libraries</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Internet</a>
                  <div class="dropdown-menu">
                    <a href="internet/internet-definitions.html" class="dropdown-item">About the Internet</a>
                    <a href="internet/internet-definitions.html" class="dropdown-item">History of the Internet</a>
                    <a href="internet/internet-definitions.html" class="dropdown-item">Internet Terms and Definitions</a>
                    <a href="internet/internet-definitions.html" class="dropdown-item">Data Transmission Terms and Definitions</a>
                    <a href="internet/internet-definitions.html" class="dropdown-item">Gaining access to the Internet</a>
                    <a href="internet/internet-definitions.html" class="dropdown-item">How HTTPS works</a>
                  </div>
                </li>
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
    <div class="modal" id="accNotLoggedIn">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Reminder</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Please Sign In first before accessing the account page.
            <br>Thank you!
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Got it!</button>
          </div>
        </div>
      </div>
    </div>

  </header> <!-- /header -->
