<?php

require_once('include.php');

dispHeader();
dispBody();


$val_user=$_SESSION['valid_user'];

$type=get_user_type($val_user);

//sunartisi emfanisis selidas profil analoga me to xristi
dispProfil($type);

dispCloseBody();
?> 