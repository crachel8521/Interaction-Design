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
<a class="waves-effect waves-light btn-large cyan darken-1" style="align-self: center;" href="storiesform.php">Tell Your Story</a>    
    <div class="containerSmall">
           <div class="row">

	  
<?php foreach($stories as $story) : ?>
        <div class="col s12">
          <div class="card">
            <div class="card-image">
              <img src="images/sample1.jpg">
            </div>
            <div class="card-content">
              <h5><?php echo $story['story_title']; ?></h5>
              <p style="font-size:.75em"></p>
              <h6><?php echo $story['user_name']; ?></h6>
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
        <?php endforeach; ?>

</div>
</div>

<div class="column" style="height:50px"></div>

<?php include 'view/footer.php'; ?>
