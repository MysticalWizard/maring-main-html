<?php
  require 'header.php';

  require 'includes/dbh.inc.php';
?>

<div id="content">
  <div class="main">
    <p><a href="index.php">index.php</a></p>
    <br><br><br>
    <main role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron img-banner">
        <div class="container">

          <?php
            if (isset($_SESSION['userId'])) {
            ?> <!-- IF Logged In -->
              <div class="d-flex flex-row justify-content-between">
                <div class="jt-l">
                  <h1 class="display-3">Hello there, <?php echo($_SESSION['userUid']) ?>!</h1>
                  <p>You are logged in as <a href="account.php" target="_blank"><?php echo$_SESSION['userUid']?></a>, Have a nice day.</p>
                  <div class="sign-display">
                    <form id="log-out" class="nav-pills" action="includes/logout.inc.php" method="post">
                      <button class="btn btn-primary btn-lg" type="submit" name="logout-submit">Sign Out »</button>
                    </form>
                  </div>
                </div>
                <div class="jt-r flex-row-reverse">
                  <div class="jt-svg-polygon">
                    <svg height="240px" viewBox="0 0 837 1062" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z" id="Polygon-1" stroke="#007FB2" stroke-width="8" sketch:type="MSShapeGroup"></path>
                        <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z" id="Polygon-2" stroke="#EF4A5B" stroke-width="8" sketch:type="MSShapeGroup"></path>
                        <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z" id="Polygon-3" stroke="#795D9C" stroke-width="8" sketch:type="MSShapeGroup"></path>
                        <path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z" id="Polygon-4" stroke="#F2773F" stroke-width="8" sketch:type="MSShapeGroup"></path>
                        <path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z" id="Polygon-5" stroke="#36B455" stroke-width="8" sketch:type="MSShapeGroup"></path>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            <?php } else { ?> <!-- IF Logged Out -->
              <div class="d-flex flex-row justify-content-between">
                <div class="jt-l">
                  <h1 class="display-3">Hello there!</h1>
                  <p>Please sign in to gain full access to the page. <br>Thank you, Have a nice day.</p>
                  <div class="sign-display">
                    <a class="btn btn-primary btn-lg" href="login.php" type="button">Sign In »</a>
                    <a class="btn btn-primary btn-lg" href="register.php" type="button">Sign Up »</a>
                  </div>
                </div>
                <div class="jt-r flex-row-reverse">
                  <div class="jt-svg-polygon">
                    <svg height="240px" viewBox="0 0 837 1062" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z" id="Polygon-1-fill-grey" stroke="#007FB2" stroke-width="8" sketch:type="MSShapeGroup"></path>
                        <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z" id="Polygon-2-fill-grey" stroke="#EF4A5B" stroke-width="8" sketch:type="MSShapeGroup"></path>
                        <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z" id="Polygon-3-fill-grey" stroke="#795D9C" stroke-width="8" sketch:type="MSShapeGroup"></path>
                        <path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z" id="Polygon-4-fill-grey" stroke="#F2773F" stroke-width="8" sketch:type="MSShapeGroup"></path>
                        <path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z" id="Polygon-5-fill-grey" stroke="#36B455" stroke-width="8" sketch:type="MSShapeGroup"></path>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
            <?php
            }
          ?>
        </div>
      </div>
      <div class="container">

        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4 greet-card">
            <h2>About the Internet</h2>
            <p>Page about the Internet.</p>
            <p><a class="btn btn-secondary" href="internet/about-internet.html" role="button">View details »</a></p>
          </div>
          <div class="col-md-4 greet-card yk-app">
            <h2>YK appreciation club</h2>
            <a href="https://www.google.com/search?q=what+is+the+meaning+of+life%3F" target="_blank">
              <p>YK is God</p>
            </a>
            <img class="rickrolled" src="images/rickrolled.gif" data-toggle="modal" data-target="#rick" alt="">
            <div class="modal" id="rick">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">In Development...</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    Hey, this feature is not ready yet...
                    <br>Sorry for the inconvenience.
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Got it!</button>
                  </div>
                </div>
              </div>
            </div>
            <p><a class="btn btn-secondary" href="http://192.168.192.69:3000/main_page.html" role="button">Attain Enlightenment »</a></p>
          </div>
          <div class="col-md-4 greet-card">
            <h2>Raynor's CS Projects</h2>
            <p>To connect, you need <a href="zerotier.html">Zerotier</a>, contact <a href="mailto:23r.he@dulwich-shanghai.cn">Raynor</a> after installing <a href="zerotier.html">Zerotier</a> for more information.</p><br>
            <p><b>Current Status:</b></p>
            <p>Checking...</p>
            <!-- <p>Offline</p> -->
            <!-- <p>Online</p> -->
            <!-- <img class="load-fail" src="http://192.168.192.63:3000/imgs/favicon.ico" alt="" onload="pageOnline()" onerror="pageOffline()"> -->

            <p id="raynor-port3000"></p>
            <p id="raynor-port8888"></p>

            <br>
            <div class="button-gap">
              <p><a class="btn btn-secondary" href="zerotier.html" role="button">Zerotier »</a> <a class="btn btn-secondary" href="mailto:23r.he@dulwich-shanghai.cn" role="button">Contact »</a></p>
              <p><a class="btn btn-secondary " href="http://192.168.192.67:8888/Main_Page.html" role="button">Visit »</a></p>
            </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">About Internet</h4>
            <p class="card-text">Page about the internet. Made for school project.</p>
            <a href="internet/about-internet.html" class="btn btn-outline-primary">View details »</a>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            <b>Useful</b>
          </div>
          <div class="card-body">
            <h4 class="card-title">School Timetable</h4>
            <p class="card-text">Provided by <a href="https://dcspd.fireflycloud.net.cn/ss-students">Firefly</a>.</p>
            <div class="sch-timetable-show-btn">
              <div class="row-btn-group list-group mb-4" id="list-tab" role="tablist">
                <button class="row-btn btn btn-primary d-block list-group-item list-group-item-action active" id="t-wA-btn" href="#t-wA" data-toggle="list">Week A</button>
                <button class="row-btn btn btn-primary d-block list-group-item list-group-item-action" id="t-wB-btn" href="#t-wB" data-toggle="list">Week B</button>
              </div>
            </div>
            <div class="sch-timetable-img">
              <div class="tab-content" id="nav-tabContent">
                <div class="collapse mb-5 show active" id="t-wA">
                  <div class="card">
                    <div class="card-body">
                      <div class="t-wA">
                        <img class="t-wA-img" src="images/wA.jpg" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse mb-5" id="t-wB">
                  <div class="card">
                    <div class="card-body">
                      <div class="t-wB">
                        <img class="t-wB-img" src="images/wB.jpg" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br><br>
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">JavaScript Clock</h4>
            <p class="card-text">Analog clock using JavaScript.</p>
            <a href="jsClockDark.html" class="btn btn-outline-primary">See</a>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-body">
            <p>YaukDaPro</p>
          </div>
        </div>
        <br>
        <hr> <!-- This tag is a thematic break (and styled to display a line)-->
        <br>
        <!-- Example row of columns -->
        <div class="social-media">

        </div>

      </div> <!-- /container -->
    </main>
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">In Development...</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Hey, this feature is not ready yet...
            <br>Sorry for the inconvenience.
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Got it!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /#content -->
<script>
  function pageOnline() {
    document.getElementById("raynor-port3000").innerHTML = "Online";
  }

  function pageOffline() {
    document.getElementById("raynor-port3000").innerHTML = "Offline";
  }
</script>
<?php
  require 'footer.php';
?>
