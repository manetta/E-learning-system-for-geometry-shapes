<?php

require_once('include.php');

dispHeader();
dispBody();

if (isset($_GET['username'])) {$username = $_GET['username'];}

UserData($username);

dispModifyDataForm();



dispCloseBody();
?> 