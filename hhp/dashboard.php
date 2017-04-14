<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
$events = getEvents();
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
              if(isset($_SESSION['user_sname']))
              {?>
                <p>Slack Username: <?php echo $_SESSION['user_sname']; ?></p>
                <?php } else {?>
                  <a class="waves-effect waves-light btn">Enter Slack Username</a>
                  <?php } ?>
              <p>Mentor: </p>
              <p>Mentee: </p>
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
