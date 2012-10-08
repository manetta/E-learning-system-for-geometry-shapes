<?php

require_once('include.php');

dispHeader();
dispBody();


if (isset($_GET['student'])) {$student = $_GET['student'];}

check_my_progress($student,1);


dispCloseBody();

?> 