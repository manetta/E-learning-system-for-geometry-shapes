<?php

require_once('include.php');

dispHeader();
dispBody();
dispShapes(4);


//dimiourgia suntomwn onomatwn metavlitwn
$x=$_POST['form_x'];
$y=$_POST['form_y'];
$mibase=$_POST['mibase'];
$mebase=$_POST['mebase'];
$height=$_POST['height'];


try
{
	if((!filled_out($x))&&(!filled_out($y)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε επιλέξει το σημείο στο οποίο θα τοποθετηθεί το σχήμα σας!');
	}

	if(!filled_out($mibase))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το μήκος των πλευρών!');
	}
	
	if(!is_num($mibase))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
	
	if(!filled_out($mebase))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το μήκος των πλευρών!');
	}
	
	if(!is_num($mebase))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
	
	if(!filled_out($height))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το μήκος των πλευρών!');
	}
	
	if(!is_num($height))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
	
	dispITrapezio($x,$y,$mibase,$mebase,$height,0,0);
}

catch (Exception $e)
{
	echo $e->getMessage();
	exit();
}
dispCloseBody();
?> 