<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <div class="column"></div>
<br><br>
    <div class="containerSmall">
      <div class="row">


        <div class="row" style="width:60%">
          <div class="col s8 offset-s2">

          <form action="stories.php" method="POST">


          <div class="input-field">
            <input placeholder="Story Title" name="story_title" id="story_title" type="text" class="validate">
            <label for="story_title">Title</label>
          </div>


          <div class="input-field">
            <input placeholder="Story Text" name="story_text" id="story_text" type="text" class="validate">
            <label for="story_text">Story Text</label>
          </div>


        <div class="input-field">
          <input placeholder="Username" name="username" id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>

        <br><br>

        <div class="input-field">
              <br><br>
              <a href="stories.html"><button type="submit" onclick="return validate()" value="submit" class="btn cyan darken-2">
  							Submit
  						</button>
            </div>

      </form>
    </div>
    </div>

</div>
</div>

<div class="column" style="height:50px"></div>







    <footer class="page-footer cyan">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Help the Helping Hand Project Grow</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Connect</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Google+</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Slack</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
  </body>
  </html>
