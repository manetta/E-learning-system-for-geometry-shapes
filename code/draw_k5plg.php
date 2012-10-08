<?php

require_once('include.php');

dispHeader();
dispBody();
dispShapes(0);


//dimiourgia suntomwn onomatwn metavlitwn
$x=$_POST['form_x'];
$y=$_POST['form_y'];
$length=$_POST['length'];

try
{
	if((!filled_out($x))&&(!filled_out($y)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε επιλέξει το σημείο το οποίο θα είναι το κέντρο του κύκλου σας!');
	}


	if(!filled_out($length))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το μήκος των πλευρών!');
	}
	
	if(!is_num($length))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
	
	disp5Plg($x,$y,$length,0,0,0);
}

catch (Exception $e)
{
	echo $e->getMessage();
	exit();
}
dispCloseBody();
?> 