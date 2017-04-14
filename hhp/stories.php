<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
$stories = getStories();

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <div class="column"></div>
<br><br>
    <div class="containerSmall">
      <div class="row">

//php loopstart
<?php foreach($stories as $stories) : ?>
        <div class="col s12">
          <div class="card">
            <div class="card-image">
              <img src="images/sample1.jpg">
            </div>
            <div class="card-content">
              <h5>Title</h5>
              <p style="font-size:.75em"><?php echo $stories['story_title']; ?></p>
              <p><?php echo $stories['story_text']; ?></p>
            </div>
            <div class="card-action">
            <div class="row">
              <div class="col s11">
              <a href="#">Like</a>
            </div>
            <div class="col s1">
              23
            </div>
          </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
  //php loopend






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
