<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

<br><br>
 <div class="row">
     <form class="col s12">
       <div class="row">
         <div class="input-field col s6">
           <input placeholder="First Name" id="first_name" type="text" class="validate">
           <label for="first_name">First Name</label>
         </div>
         <div class="input-field col s6">
           <input placeholder="Last Name" id="last_name" type="text" class="validate">
           <label for="last_name">Last Name</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <input placeholder="Password" id="password" type="password" class="validate">
           <label for="password">Password</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <input placeholder="E-Mail" id="email" type="email" class="validate">
           <label for="email">Email</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12">
           <select>
       <option value="" disabled selected>Select An Option</option>
       <option value="1">Mentor</option>
       <option value="2">Mentee</option>
           </select>
     <label>I Am Looking For A:</label>
         </div>
       </div>
       <div class="row">
         <div class="col s12">
           This is an inline input field:
           <div class="input-field inline">
             <input id="text" type="textarea" class="validate">
             <label for="email" data-error="wrong" data-success="right">About Me</label>
           </div>
         </div>
       </div>
     </form>
   </div>
</body>

<div class="input-field col s12">
             <br><br>
             <a href="dashboard.html"><button type="submit" class="btn cyan darken-2">
             <a href="dashboard.html"><button type="submit" onclick="return validate()" value="submit" class="btn cyan darken-2">
               Submit
             </button>
           </div>


 <div class="row" style="height:50px"></div>

<?php include 'view/footer.php'; ?>
