<?php

require_once('include.php');

dispHeader();
dispBody();


$val_user=$_SESSION['valid_user'];


UserData($val_user);

dispModifyDataForm();


dispCloseBody();
?> 