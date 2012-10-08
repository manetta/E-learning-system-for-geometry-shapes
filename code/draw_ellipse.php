<?php

require_once('include.php');

dispHeader();
dispBody();


//dimiourgia suntomwn onomatwn metavlitwn
$x=$_POST['form_x'];
$y=$_POST['form_y'];
$radius_x=$_POST['radius_x'];
$radius_y=$_POST['radius_y'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Έλλειψη</h1></td>
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

	if(!filled_out($radius_x))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση την ακτίνα του μεγάλου άξονα!');
	}
	
	if(!is_num($radius_x))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
	
	if(!filled_out($radius_y))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση την ακτίνα του μικρού άξονα!');
	}
	
	if(!is_num($radius_y))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
	?>
	
Παρακάτω εμφανίζεται η έλλειψη που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
	
	<?php
	dispEllipse($x,$y,$radius_x,$radius_y,0,0,0,0,0,0);
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