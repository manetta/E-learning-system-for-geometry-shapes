<?php

require_once('include.php');

dispHeader();
dispBody();


//dimiourgia suntomwn onomatwn metavlitwn
$x1=$_POST['form_x1'];
$y1=$_POST['form_y1'];
$x2=$_POST['form_x2'];
$y2=$_POST['form_y2'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">

	<table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ευθύγραμμό τμήμα</h1></td>
		</tr>
	</table>


	
<?php
try
{
	if((!filled_out($x1))&&(!filled_out($y1)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε επιλέξει τα σημεία του ευθύγραμμου τμήματος!');
	}
	
	if((!filled_out($x2))&&(!filled_out($y2)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε επιλέξει τα σημεία του ευθύγραμμου τμήματος!');
	}
?>
Παρακάτω εμφανίζεται το ευθύγραμμο τμήμα με ακρά τα σημεία που επέλεξες.
<br/><br/>Έχοντας διαβάσει πρώτα την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php	
	dispStraight($x1,$y1,$x2,$y2,0,0,0,0,0);
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
