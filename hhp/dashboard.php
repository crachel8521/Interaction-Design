<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
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
                  <?php } else {
                    $mentorID = getMentorID($_SESSION['user_id']);
                    ?>
                    <p>Mentor Name: <?php echo getFirstName($mentorID); echo '&nbsp'; echo getLastName($mentorID);?></p>
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
                    <a class="waves-effect waves-light btn purple">Request a Device</a>
                    <a class="waves-effect waves-light btn purple">Build a Device</a>
                    <br><br>
                    <span class="card-title">Project</span>
                  </div>
					<div class="container">
    		<div class="row">
				<div class="col-md-12" style="padding-right: 0px;padding-left: 0px;">
					<div class="page-header">
					  <h4 style="line-height: 0%;color:white;">Build Status</h4>
					</div>
					<div style="display:inline-block;width:100%;overflow-y:auto;">
					<ul class="timeline timeline-horizontal">
						<li class="timeline-item">
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 15%;" class="timeline-title">Mussum ipsum cacilds 1</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5 days ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 15%;" class="timeline-title">Mussum ipsum cacilds 2</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3 days ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 15%;" class="timeline-title">Mussum ipsum cacilds 3</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipisci. Mé faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 15%;" class="timeline-title">Mussum ipsum cacilds 4</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>10 hours ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 15%;" class="timeline-title">Mussum ipsum cacilds 5</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 6 hours ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 style="font-size: 1.28rem;line-height: 15%;" class="timeline-title">Mussum ipsum cacilds 6</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3 hours ago via Builder</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				</div>
			</div>
		</div>
                </div>
              </div>
          </div>


<?php include 'view/footer.php'; ?>
