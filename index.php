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
      <div class="jumbotron">
        <div class="container">

          <?php
            if (isset($_SESSION['userId'])) {
            ?> <!-- IF Logged In -->
              <h1 class="display-3">Hello there, <?php echo($_SESSION['userUid']) ?>!</h1>
              <p>You are logged in as <a href="account.php" target="_blank"><?php echo$_SESSION['userUid']?></a>, Have a nice day.</p>


            <?php } else { ?> <!-- IF Logged Out -->
              <h1 class="display-3">Hello there!</h1>
              <p>Please sign in to gain full access to the page. <br>Thank you, Have a nice day.</p>
              <div class="sign-display">
                <a class="btn btn-primary btn-lg" href="login.php" type="button">Sign In »</a>
                <a class="btn btn-primary btn-lg" href="register.php" type="button">Sign Up »</a>
              </div>
            <?php
            }
          ?>
        </div>
      </div>
      <div class="container">

        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Terms & Definitions</h2>
            <p>Page with a handful of CS terms.</p>
            <p><a class="btn btn-secondary" href="school/terms-and-defs.html" role="button">View details »</a></p>
          </div>
          <div class="col-md-4 yk-app">
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
          <div class="col-md-4">
            <h2>Raynor's CS Projects</h2>
            <p>To connect, you need <a href="zerotier.html">Zerotier</a>, contact <a href="mailto:23r.he@dulwich-shanghai.cn">Raynor</a> after installing <a href="zerotier.html">Zerotier</a> for more information.</p><br>
            <p><b>Current Status:</b></p>

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
