<?php
  require 'nav.php';
?>

  <div class="login-box">
    <div class="box">
      <h1>Login</h1>
      <div id="login-error-msg-holder">
        <p id="login-error-msg">Invalid username or password</span></p>
      </div>
      <form id="login-form" action="includes/login.inc.php" method="post">
        <div class="textbox" id="username-field">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Username" name="mailuid">
        </div>

        <div class="textbox" id="password-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="pwd">
        </div>

        <input class="btn login-button" type="submit" value="Sign in" name="login-submit">
      </form>
      <div class="button-left">
        <a href="register.php">Sign Up</a>
      </div>
      <div class="button-right">
        <a href="findPassword.php">Find Password</a>
      </div>
    </div>
    <div class="box-bottom">
      <div class="button-left">
        <button class="go-back" onclick="goBack()">&lt; Go Back</button>
      </div>
    </div>
  </div>

  <script>
  function goBack() {
    window.history.back();
  }
  </script>
  <!-- =======================================
  Bootstrap core JavaScript - don't touch! -->

  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>

</html>
