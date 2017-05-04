<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
$builders = getBuilders();
?>

<div class="row"></div>
<br><br>




    <div class="row">
      <div class="col s10 offset-s1">
<?php foreach($builders as $builder) : ?>
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src="images/selfiesample.jpg">
        </div>
        <div class="card-content" style="height: 120px">
          <p><?php echo getUserName($builder['user_id']);?></p>
          <p><?php echo $builder['description'];?></p>
        </div>
        <div class="card-action">
          <img src="images/rating.png" style="width:250px">
        </div>
      </div>
    </div>
      <?php endforeach; ?>

</div>
      </div>



<div class="row" style="height:50px"></div>

<?php include 'view/footer.php'; ?>
