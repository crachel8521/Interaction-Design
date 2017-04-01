<?php
include 'view/header.php';
require_once('model/database.php');
require_once('model/admin_fuctions.php');
require_once('model/db_functions.php');
$events = getEvents();
?>

<div class="row"></div>
<br><br>
  <div class="container">



    <div class="row">

<?php foreach($events as $event) : ?>
      <div class="col s12 m4 l4">
        <div class="card small">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="images/sample2.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?php echo $event['event_name']; ?><i class="material-icons right">more_vert</i></span>
            <p><a href="#">Register Here</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><?php echo $event['event_name']; ?><i class="material-icons right">close</i></span>
            <p><?php echo $event['event_desc']; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>


      </div>
    </div>
</div>

<div class="row" style="height:50px"></div>

<?php include 'view/footer.php'; ?>
