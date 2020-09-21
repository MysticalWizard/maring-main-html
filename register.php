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
              <input type="text" name="uid" placeholder="Username" value="" maxlength="32">
              <input type="text" name="mail" placeholder="E-Mail" value="">
              <input type="password" name="pwd" placeholder="Password" value="">
              <input type="password" name="pwd-confirm" placeholder="Confirm Password" value="">
              <button type="submit" class="btn" name="signup-submit">Sign Up</button>
              <p>
                Already registered? <a href="login.html">Sign in</a>
              </p>
            </form>
            <div class="jt-svg-polygon">
              <svg height="240px" viewBox="0 0 837 1062" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                  <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z" id="Polygon-1-fill-white" stroke="#007FB2" stroke-width="8" sketch:type="MSShapeGroup"></path>
                  <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z" id="Polygon-2-fill-white" stroke="#EF4A5B" stroke-width="8" sketch:type="MSShapeGroup"></path>
                  <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z" id="Polygon-3-fill-white" stroke="#795D9C" stroke-width="8" sketch:type="MSShapeGroup"></path>
                  <path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z" id="Polygon-4-fill-white" stroke="#F2773F" stroke-width="8" sketch:type="MSShapeGroup"></path>
                  <path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z" id="Polygon-5-fill-white" stroke="#36B455" stroke-width="8" sketch:type="MSShapeGroup"></path>
                </g>
              </svg>
            </div>
            <hr>
          </section>
        </div>
      </div>
    </main>

<?php
  require 'footer.php';
?>
