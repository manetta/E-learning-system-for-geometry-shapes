<?php

require_once('include.php');

dispHeader();
dispBody();


//dimiourgia suntomwn onomatwn metavlitwn
$x=$_POST['form_x'];
$y=$_POST['form_y'];
$length=$_POST['length'];
$width=$_POST['width'];
$gonia=$_POST['gonia'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1> Πλάγιο παραλληλόγραμμο</h1></td>
		</tr>
	</table>
	
<?php

try
{
	if((!filled_out($x))&&(!filled_out($y)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε επιλέξει το σημείο στο οποίο θα τοποθετηθεί το σχήμα σας!');
	}

	if(!filled_out($length))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το μήκος ττου παραλληλογράμμου!');
	}
	
	if(!is_num($length))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος του παραλληλογράμμου θα πρέπει να είναι ένας αριθμός!');
	}
	
	if(!filled_out($width))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το πλάτος του παραλληλογράμμου!');
	}
	
	if(!is_num($width))
	{
		echo '</br></br>';
		throw new Exception('Το πλάτος του παραλληλογράμμου θα πρέπει να είναι ένας αριθμός!');
	}
	
	if(!filled_out($gonia))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το πλάτος του παραλληλογράμμου!');
	}
	
	if(!is_num($gonia))
	{
		echo '</br></br>';
		throw new Exception('Το πλάτος του παραλληλογράμμου θα πρέπει να είναι ένας αριθμός!');
	}
?>
Παρακάτω εμφανίζεται το τετράγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	dispRect11($x,$y,$length,$width,$gonia,0,0,0,0,0,0);
}

catch (Exception $e)
{
?>

	<table width="740" border="0" align="right" cellpadding="0" cellspacing="0">
		<tr>
			<td><?php	echo $e->getMessage();?></td>
		</tr>
	</table>
<?php
	dispCloseBody();
	exit();
}
?> 
</table>