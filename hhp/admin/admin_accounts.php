<?php
include 'view/header.php';
require_once('model/admin_fuctions.php');
require_once('model/db_functions.php');
$users = getUsers();
?>
<br><br>
<div class="containerSmall">
<ul class="collection with-header">
       <li class="collection-header"><h4 id="textCenter">Accounts</h4></li>
       <?php foreach($users as $user) : ?>
         <form action="." method="post">
           <input type="hidden" name="action"
                  value="delete_account">
                     <li class="collection-item avatar">
                       <input type="hidden" name="pub_id"
                              value="<?php echo $user['user_id']; ?>">
         <span class="title"><?php echo $user['user_id']; ?></span>
        <p><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?>
        </p>
        <a href="#!" class="secondary-content"><input type="submit" value="Delete"></a>
      </li>
       <?php endforeach; ?>
     </ul>
   </div>
