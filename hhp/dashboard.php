<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
$mentorship_type = getMentorshipType($_SESSION['user_id']);
?>

<br><br>
<div class="row">
        <div class="col s6">
          <div class="card cyan">
            <div class="card-content white-text">
              <span class="card-title">Welcome <?php echo $_SESSION['first_name']; echo '&nbsp'; echo $_SESSION['last_name']; ?></span>
              <?php
              if(isset($_SESSION['user_sname']))
              {?>
                <p>Slack Username: <?php echo $_SESSION['user_sname']; ?></p>
                <?php } else {?>
                  <a class="waves-effect waves-light btn">Enter Slack Username</a>
                  <?php } ?>
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="card cyan darken-1">
            <div class="card-content white-text">
              <span class="card-title">Mentoring</span>
              <?php
              if(isset($mentorship_type))
              {?>

                <?php
                if($mentorship_type == 'mentor')
                {
                  $menteeID = getMenteeID($_SESSION['user_id']);
                  ?>
                  <p>Mentee Name: <?php echo getFirstName($menteeID); echo '&nbsp'; echo getLastName($menteeID);?></p>
                  <?php } else {
                    $mentorID = getMentorID($_SESSION['user_id']);
                    ?>
                    <p>Mentor Name: <?php echo getFirstName($mentorID); echo '&nbsp'; echo getLastName($mentorID);?></p>
<?php } ?>
                <?php } else {?>
                  <a class="waves-effect waves-light btn">Enter Slack Username</a>
                  <?php } ?>
            </div>
          </div>
        </div>


              <div class="col s12">
                <div class="card cyan darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">Build</span>
                    <p>Request a Device</p>
                  </div>
                </div>
              </div>
          </div>


<?php include 'view/footer.php'; ?>
