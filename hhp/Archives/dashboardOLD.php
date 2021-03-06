<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');

if ($_SESSION['user_type'] == 'builder'){
  $buildstatus = getBuildStatus($_SESSION['user_id']);
} else {
  $buildstatus = getBuildStatusByRecipient($_SESSION['user_id']);
}

$recipients = getRecipientInfo();

$mentorship_type = getMentorshipType($_SESSION['user_id']);
?>


<br><br>
<div class="row">
        <div class="col s12 m6">
          <div class="card cyan">
            <div class="card-content white-text">
              <span class="card-title">Welcome <?php echo $_SESSION['first_name']; echo '&nbsp'; echo $_SESSION['last_name']; ?></span>
              <?php
              if(isset($_SESSION['user_sname']))
              {?>
                <p>Slack Username: <?php echo $_SESSION['user_sname']; ?></p>
                <?php } else {?>
                  <a class="waves-effect waves-light btn purple">Enter Slack Username</a>
                  <?php } ?>
									<br>
									<a class="waves-effect waves-light btn purple">Settings</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
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
									<p>Slack Username: <?php echo getSlackName($menteeID); ?></p>
                  <?php } else {
                    $mentorID = getMentorID($_SESSION['user_id']);
                    ?>
                    <p>Mentor Name: <?php echo getFirstName($mentorID); echo '&nbsp'; echo getLastName($mentorID);?></p>
										<p>Slack Username: <?php echo getSlackName($mentorID);?></p>
<?php } ?>
                <?php } else {?>
                  <a class="waves-effect waves-light btn purple">Become a Mentor/Mentee</a>
                  <?php } ?>
            </div>
          </div>
        </div>


              <div class="col s12">
                <div class="card cyan darken-1" >
                  <div class="card-content white-text" style=" height:140px;">
                    <span class="card-title">Build</span>
                    <a class="waves-effect waves-light btn purple" href=".?action=show_recipientform">Request a Device</a>
                    <a class="waves-effect waves-light btn purple" href=".?action=show_statusform">Add Build Status</a>
                    <br><br>
                  </div>
					<div class="container timelineContainer">
    		<div class="row">
				<div class="col-md-12" style="padding-right: 0px;padding-left: 0px;">
					<div class="page-header">
					  <span class="card-title" style="color:#fff">Build Status</span>
					</div>
					<div style="display:inline-block;width:100%;overflow-y:auto;">
					<ul class="timeline timeline-horizontal">
						<?php foreach($recipients as $recipient) : ?>
						<li class="timeline-item">
						<div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
						<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 100%;" class="timeline-title"><b><?php echo $recipient['recipient_firstname']; ?>'s Device is requested</b></h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Date: <?php echo $recipient['date_posted']; ?></small></p>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo $recipient['hand_measurement']; ?></small></p>
								</div>
								<div class="timeline-body">
								<img src="images/timeline1.png" style="width: 100%; height: auto;max-width: 120px;max-height: 100px;" />
								</div>
							</div>
						</li>
					 <?php endforeach; ?>

						<?php foreach($buildstatus as $status) : ?>
						<li class="timeline-item">
						<?php if($status['status_id'] == 1)
							{
						echo '<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>';
							}

						 else if($status['status_id'] == 2)
							{
						echo '<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>';
							}

						 else if($status['status_id'] == 3)
							{
						echo '<div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>';
							}

						 else if($status['status_id'] == 4)
							{
						echo '<div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>';
							}
							else
						   {
						echo '<div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>';
							}
						?>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 100%;" class="timeline-title"><b><?php echo $status['status_desc']; ?></b></h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Date: <?php echo $status['date_posted']; ?></small></p>
								</div>
								<div class="timeline-body">
								<img src="images/timeline1.png" style="width: 100%; height: auto;max-width: 120px;max-height: 100px;" />
								</div>
							</div>
						</li>
					 <?php endforeach; ?>
						</ul>
<!--						<li class="timeline-item">
							<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 100%;" class="timeline-title"><b>Hand color selected</b></h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3 days ago via Builder</small></p>
								</div>
								<div class="timeline-body">
								<img src="images/timeline2.jpg" style="width: 100%; height: auto;max-width: 120px;max-height: 100px;" />
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 100%;" class="timeline-title"><b>Motor and other accessories ordered</b></h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>The builder has ordered the accessories required for the extra functionalities of the hand like LED screen and motor.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 100%;" class="timeline-title"><b>Accessories received</b></h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>10 hours ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>Motor and LED screen are received by the builder</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 100%;" class="timeline-title"><b>Build process started</b></h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 6 hours ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>The builder has started the building process of the device and the device is expected to be built in 20 hours.</p>
								</div>
							</div>
						</li> -->
				</div>


<?php foreach($recipients as $recipient) : ?>
	      <div class="row" style="width:100%">
            <div class="col s3 m0 l0">
            </div>
                <div class="col s12 m6 l6">
                  <div class="card">
                    <div class="card-image">
                      <img src="images/sample1.jpg">
                    </div>
                    <div class="card-content">
                      <p style="font-size:.75em"></p>
                      <h6><?php echo $recipient['recipient_firstname']; ?>'s Device is requested</h6>
                      <p>Date: <?php echo $recipient['date_posted']; ?></p>
                      <p><?php echo $recipient['hand_measurement']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
                <?php endforeach; ?>

        <?php foreach($buildstatus as $status) : ?>
          <div class="row" style="width:100%">
            <div class="col s3 m0 l0">
            </div>
                <div class="col s12 m6 l6">
                  <div class="card">
                    <div class="card-image">
                      <img src="images/sample1.jpg">
                    </div>
                    <div class="card-content">
                      <p style="font-size:.75em"></p>
                      <h6><?php echo $status['builder_name']; ?></h6>
                      <p>Date: <?php echo $status['date_posted']; ?></p>
                      <p><?php echo $status['status_desc']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
                <?php endforeach; ?>




				</div>
			</div>
		</div>
                </div>
              </div>
          </div>


<?php include 'view/footer.php'; ?>
