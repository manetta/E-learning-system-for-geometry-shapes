<?php

require_once('include.php');

dispHeader();
dispBody();

$val_user=$_SESSION['valid_user'];

$school=$_POST['school'];
$level=$_POST['level'];
$level_section=$_POST['level_section'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
<?php
try
{
	if((!filled_out($school))&&(!filled_out($level))&&(!filled_out($level_section)))
	{
		throw new Exception('Δεν έχετε κάποια από τις απαιτούμενες πληροφορίες!');
	}
	
	if((filled_out($school))&&(filled_out($level))&&(filled_out($level_section)))
	{
		modifySchool($val_user,$school,$level,$level_section);
		dispCloseBody();
	}
	elseif((filled_out($school))&&(filled_out($level))&&(!filled_out($level_section)))
	{
		modifySchool($val_user,$school,$level,-1);
		dispCloseBody();
	}
	elseif(filled_out($school)&&(!filled_out($level))&&(!filled_out($level_section)))
	{
		modifySchool($val_user,$school,-1,-1);
		dispCloseBody();
	}
	elseif(!filled_out($school)&&(filled_out($level))&&(!filled_out($level_section)))
	{
		modifySchool($val_user,-1,$level,-1);
		dispCloseBody();
	}
	elseif(!filled_out($school)&&(filled_out($level))&&(filled_out($level_section)))
	{
		modifySchool($val_user,-1,$level,$level_section);
		dispCloseBody();
	}
	elseif(!filled_out($school)&&(!filled_out($level))&&(filled_out($level_section)))
	{
		modifySchool($val_user,-1,-1,$level_section);
		dispCloseBody();
	}
	
}

catch (Exception $e)
{
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		
<?php
	echo $e->getMessage();
?>
</table>
<?php
	dispCloseBody();
	exit();
}
?>
</table>
