<?php
include '../view/adminHeader.php';
require_once('../model/admin_fuctions.php');
require_once('../model/db_functions.php');
$users = getUsers();
?>

<ul class="collection with-header">
       <li class="collection-header"><h4>Accounts</h4></li>
       <?php foreach($users as $user) : ?>
         <form action="." method="post">
         <li class="collection-item avatar">
        <span class="title"><?php echo $user['user_id']; ?></span>
        <p><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?>
        </p>
        <a href="#!" class="secondary-content"><input type="submit" value="Delete"></a>
      </li>
       <?php endforeach; ?>
     </ul>


     <?php foreach($pubs as $p) { ?>
         <tr>
             <td><?php echo $p['pubName'];?></td>
             <td><form action="." method="post">
                 <input type="hidden" name="action"
                        value="delete_pub">
                 <input type="hidden" name="pub_id"
                        value="<?php echo $p['pubID']; ?>">
                 <input type="submit" value="Delete">
             </form></td>
         </tr>
     <?php
     } ?>
