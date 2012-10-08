<?php

session_start();

if(isset($_SESSION['user_type'])) 
	$type=$_SESSION['user_type'];
	
if(isset($_SESSION['valid_user']))
	$val_user=$_SESSION['valid_user'];



require_once('presentation_fns.php');
require_once('valid_fns.php');
require_once('db_fns.php');

?> 