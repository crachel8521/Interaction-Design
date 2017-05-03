<?php
include '../view/header.php';
require_once('../model/admin_functions.php');
require_once('../model/db_functions.php');
$events = getEvents();
?>


<br><br><br>
<div class="row">
<div class="adminButton">
  <a class="waves-effect waves-light btn cyan darken-2" href="admin_accounts.php">Delete Account</a>
</div>
</div>
<div class="row">
<div class="adminButton">
  <a class="waves-effect waves-light btn cyan darken-2">Create Build Project</a>
</div>
</div>
<div class="row">
<div class="adminButton">
  <a class="waves-effect waves-light btn cyan darken-2">Delete Build Project</a>
</div>
</div>
<div class="row">
<div class="adminButton">
  <a class="waves-effect waves-light btn cyan darken-2">Create Mentor/Mentee Connection</a>
</div>
</div>
<br>
<br>
