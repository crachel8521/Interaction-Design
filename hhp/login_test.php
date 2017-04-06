<?php
  if($_SESSION['userType'] == 'parent')
  {?>
    <li>
      <a href=".?action=show_my_pub">Parent</a>
    </li>
<?php }
  if($_SESSION['userType'] == 'admin')
  {?>
    <li>
      <a href=".?action=show_my_admin">Admin</a>
    </li>
<?php } ?>
