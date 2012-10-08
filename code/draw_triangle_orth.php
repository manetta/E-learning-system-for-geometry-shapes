<?php

require_once('include.php');

dispHeader();
dispBody();


//dimiourgia suntomwn onomatwn metavlitwn
$x=$_POST['form_x'];
$y=$_POST['form_y'];
$length1=$_POST['length1'];
$length2=$_POST['length2'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ορθογώνιο τρίγωνο</h1></td>
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

	if(!filled_out($length1))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το μήκος της πρώτης κάθετης πλευράς!');
	}
	
	if(!is_num($length1))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
	
	if(!filled_out($length2))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το μήκος της δεύτερης κάθετης πλευράς!');
	}
	
	if(!is_num($length2))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
?>
Παρακάτω εμφανίζεται το τετράγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	dispTriangleOrth($x,$y,$length1,$length2,0,0,0,0,0,0,0);
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