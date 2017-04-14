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
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="card cyan darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>


              <div class="col s12">
                <div class="card cyan darken-1">
                  <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                  </div>
                </div>
              </div>
          </div>


<?php include 'view/footer.php'; ?>
