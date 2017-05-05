<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
$stories = getStory();

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <div class="column"></div>
<br><br>


<br>
<br>
<div class="row">
    <div class="input-field col s4 offset-s4">
      <input value="Search" id="Search" type="text" class="validate">
      <label class="active" for="first_name2">Search</label>
    </div>
    <div class="col s3 offset-s1">
    <a class="waves-effect waves-light btn-large blue lighten-1" style="align-self: center;" href=".?action=show_storiesform">Share Your Experience</a>
</div>
  </div>
<div class="row">
  <div class="col s4 offset-s4">
<div class="chip">
    Tag
    <i class="close material-icons">close</i>
  </div>
  <div class="chip">
    Tag
    <i class="close material-icons">close</i>
  </div>
  <div class="chip">
    Tag
    <i class="close material-icons">close</i>
  </div>
  <div class="chip">
    Tag
    <i class="close material-icons">close</i>
  </div>
</div>
</div>


<?php foreach($stories as $story) : ?>
  <div class="row" style="width:100%">
    <div class="col s3 m0 l0">
    </div>
        <div class="col s12 m6 l6">
          <div class="card">
            <div class="card-image">
              <img src="images/sample1.jpg">
            </div>
            <div class="card-content">
              <h5><?php echo $story['story_title']; ?></h5>
              <p style="font-size:.75em"></p>
              <h6><?php echo $story['user_name']; ?></h6>
              <p>Date: <?php echo $story['date_posted']; ?></p>
              <p><?php echo $story['story_text']; ?></p>
            </div>
            <div class="card-action">
            <div class="row">
              <div class="col s11">
              <a href="#">Like</a>
            </div>
            <div class="col s1">
              <?php echo $story['likes']; ?>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
        <?php endforeach; ?>




<div class="column" style="height:50px"></div>

<?php include 'view/footer.php'; ?>
