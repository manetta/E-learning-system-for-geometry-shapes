<?php

require_once('include.php');

dispHeader();
dispBody();


$val_user=$_SESSION['valid_user'];

check_my_progress($val_user,0);

dispCloseBody();

?> 