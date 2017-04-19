<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <div class="column"></div>
<br><br>
    <div class="containerSmall">
      <div class="row">


        <div class="row" style="width:60%">
          <div class="col s8 offset-s2">

          <form action="stories.php" method="POST">


          <div class="input-field">
            <input placeholder="Story Title" name="story_title" id="story_title" type="text" class="validate">
            <label for="story_title">Title</label>
          </div>


          <div class="input-field">
            <input placeholder="Story Text" name="story_text" id="story_text" type="text" class="validate">
            <label for="story_text">Story Text</label>
          </div>


        <div class="input-field">
          <input placeholder="Username" name="username" id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>

        <br><br>

        <div class="input-field">
              <br><br>
              <a href="stories.html"><button type="submit" onclick="return validate()" value="submit" class="btn cyan darken-2">
  							Submit
  						</button>
            </div>

      </form>
    </div>
    </div>

</div>
</div>

<div class="column" style="height:50px"></div>


<?php include 'view/footer.php'; ?>
