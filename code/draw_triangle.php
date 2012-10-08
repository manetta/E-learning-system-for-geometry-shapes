<?php

require_once('include.php');

dispHeader();
dispBody();


//dimiourgia suntomwn onomatwn metavlitwn
$x1=$_POST['form_x1'];
$y1=$_POST['form_y1'];
$x2=$_POST['form_x2'];
$y2=$_POST['form_y2'];
$x3=$_POST['form_x3'];
$y3=$_POST['form_y3'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Σκαλινό τρίγωνο</h1></td>
		</tr>
	</table>
	
<?php


try
{	if((!filled_out($x1))&&(!filled_out($y1)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε επιλέξει το σημείο στο οποίο θα τοποθετηθεί το σχήμα σας!');
	}
	if((!filled_out($x2))&&(!filled_out($y2)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε δώσει τα τρία σημεία που είναι απαραίτητα για τη δημιουργία του τριγώνου!');
	}
	if((!filled_out($x3))&&(!filled_out($y3)))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε δώσει τα τρία σημεία που είναι απαραίτητα για τη δημιουργία του τριγώνου!');
	}
?>	
Παρακάτω εμφανίζεται το τυχαίο τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php	
	dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,0,0,0,0,0,0,0,0,0,0);
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