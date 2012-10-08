<?php

require_once('include.php');

dispHeader();
dispBody();


//dimiourgia suntomwn onomatwn metavlitwn
$x=$_POST['form_x'];
$y=$_POST['form_y'];
$length=$_POST['length'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ορθογώνιο Ισοσκελές τρίγωνο</h1></td>
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
		throw new Exception('Δεν έχετε συμπληρώση το μήκος των πλευρών!');
	}
	
	if(!is_num($length))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
?>
Παρακάτω εμφανίζεται το ορθογώνιο ισσοσκελές τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	dispTriangleOrthIsk($x,$y,$length,0,0,0,0,0,0,0);
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