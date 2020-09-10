<?php
  require 'header.php';
?>

    <main>
      <div id="content">
        <div class="wrapper">
          <section>
            <br><br><br><br><br><br>
            <h1>Register</h1>
            <form class="signup-form" action="includes/register.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username" value="">
              <input type="text" name="mail" placeholder="E-Mail" value="">
              <input type="password" name="pwd" placeholder="Password" value="">
              <input type="password" name="pwd-confirm" placeholder="Confirm Password" value="">
              <button type="submit" class="btn" name="signup-submit">Sign Up</button>
              <p>
                Already registered? <a href="login.html">Sign in</a>
              </p>
            </form>
            <hr>
          </section>
        </div>
      </div>
    </main>

<?php
  require 'footer.php';
?>
