<?php

require_once('include.php');

dispHeader();
dispBody();


//dimiourgia suntomwn onomatwn metavlitwn
$x=$_POST['form_x'];
$y=$_POST['form_y'];
$radius=$_POST['radius'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Κύκλος</h1></td>
		</tr>
	</table>
	
<?php
try
{
	if((!filled_out($x))&&(!filled_out($y)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε επιλέξει το σημείο το οποίο θα είναι το κέντρο του κύκλου σας!');
	}


	if(!filled_out($radius))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση την ακτίνα του κύκλου!');
	}
	
	if(!is_num($radius))
	{
		echo '</br></br>';
		throw new Exception('Η ακτίνα του κύκλου θα πρέπει να είναι ένας αριθμός!');
	}
	?>
	
Παρακάτω εμφανίζεται ο κύκλος που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
	
	<?php
	dispCircle($x,$y,$radius,0,0,0,0,0,0,0);
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