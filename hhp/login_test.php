<?php
  echo $_SESSION['user_name'];
  echo $_SESSION['user_id'];
  echo $_SESSION['usertype'];


  if($_SESSION['usertype'] == 'parent')
  {?>
    <li>
      <a href=".?action=show_my_pub">Parent</a>
    </li>
<?php }
  if($_SESSION['usertype'] == 'admin')
  {?>
    <li>
      <a href=".?action=show_my_admin">Admin</a>
    </li>
<?php } ?>
