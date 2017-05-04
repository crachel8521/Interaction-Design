<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
$events = getEvents();
?>

<div class="row">
  <div class="container">
<br><br>

<h5 style="text-align:center">Lorem Ipsom</h5>
<p style="text-align:center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies erat ac ullamcorper facilisis. Nulla vel congue leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas elementum libero dui, luctus lobortis turpis lobortis vitae. Ut maximus pretium semper. Maecenas fermentum varius tincidunt. Nullam vel tempor risus. Etiam urna augue, aliquet quis velit non, molestie hendrerit libero. Nulla mi arcu, porta a quam quis, malesuada luctus sem. Phasellus posuere odio ut urna bibendum malesuada. Nullam pulvinar eu leo nec faucibus. Phasellus rutrum leo sed est consectetur porta. Etiam aliquet sodales elit quis tincidunt. Donec nec tortor ex. Nulla ac nisl in magna pretium tincidunt id vel odio.</p>

<br>
</div>
</div>
<a class="waves-effect waves-light btn-large blue lighten-1" style="align-self: center;" href=".?action=show_storiesform">Apply for Mentorship</a>


<div class="row" style="height:50px"></div>

<?php include 'view/footer.php'; ?>
