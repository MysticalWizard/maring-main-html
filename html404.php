<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Maring Network: 404" />
    <title>404 : Page not found</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">

    <!-- Global styles -->
    <link rel="stylesheet" type="text/css" href="/style.css" />

    <!-- Local styles -->
    <link rel="stylesheet" href="/css/html404.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon/favicon.ico" type="favicon.ico" />
    <link rel="icon" href="/favicon/favicon.ico" type="favicon.ico" />
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  </head>
  <body>
    <header id="main-header">
      <div class="navigation">
        <div class="nav-header">
          <nav class="nav-header-container navbar-expand-sm">
            <div class="nav-logo-container">
              <a href="index.php">
                <img class="nav-header-logo" src="/images/mystWiz-sat.jpg" alt="logo">
              </a>
              <a class="nav-header-logo-text" href="index.php">
                <img class="nav-header-logo-text" src="/images/mysticalWizard-font-header.jpg" alt="Mystical Wizard">
              </a>
            </div>
            <div class="nav-tools-container">
              <?php
                if (isset($_SESSION['userId'])) {
                ?> <!-- IF Logged In -->
                  <a class="nav-account nav-pills nav-acc-btn justify-content-end" href="/account.php"><i class="far fa-user-circle"></i></a>
                  <div class="nav-logout nav-pills justify-content-end">
                    <form id="log-out" class="nav-pills" action="/includes/logout.inc.php" method="post">
                      <button class="nav-logout-button btn btn-secondary" type="submit" name="logout-submit">Log Out</button>
                    </form>
                  </div>
                <?php } else { ?> <!-- IF Logged Out -->
                  <button class="nav-account nav-pills nav-acc-btn justify-content-end" data-toggle="modal" data-target="#accNotLoggedIn"><i class="far fa-user-circle"></i></button>
                  <div class="nav-login nav-pills justify-content-end">
                    <a class="btn btn-primary" href="/login.php" role="button">
                      <p class="nav-tools-login">Log In</p>
                    </a>
                  </div>
                <?php
                }
              ?>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div id="content">
      <div class="container">
        <svg width="380px" height="500px" viewBox="0 0 837 1045" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z" id="Polygon-1" stroke="#007FB2" stroke-width="6" sketch:type="MSShapeGroup"></path>
                <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z" id="Polygon-2" stroke="#EF4A5B" stroke-width="6" sketch:type="MSShapeGroup"></path>
                <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z" id="Polygon-3" stroke="#795D9C" stroke-width="6" sketch:type="MSShapeGroup"></path>
                <path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z" id="Polygon-4" stroke="#F2773F" stroke-width="6" sketch:type="MSShapeGroup"></path>
                <path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z" id="Polygon-5" stroke="#36B455" stroke-width="6" sketch:type="MSShapeGroup"></path>
            </g>
        </svg>
        <div class="message-box">
          <h1>404</h1>
          <p>Page not found!</p>
          <div class="buttons-con">
            <div class="action-link-wrap">
              <a onclick="history.back(-1)" class="link-button link-back-button">Go Back</a>
              <a href="/index.php" class="link-button">Go to Home Page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =======================================
    Bootstrap core JavaScript - don't touch! -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
