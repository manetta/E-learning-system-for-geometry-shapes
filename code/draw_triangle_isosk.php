<?php

require_once('include.php');

dispHeader();
dispBody();


//dimiourgia suntomwn onomatwn metavlitwn
$x=$_POST['form_x'];
$y=$_POST['form_y'];
$length=$_POST['length'];
//oi moires twn proskeimenwn gwnivn tha einai to poly 89 moires
$moires=$_POST['moires'];

?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ισοσκελές τρίγωνο</h1></td>
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
	
	if(!filled_out($moires))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση τη προσκείμενη γωνία!');
	}
	
	if(!is_num($length))
	{
		echo '</br></br>';
		throw new Exception('Το μήκος των πλευρών θα πρέπει να είναι ένας αριθμός!');
	}
	
	if(($moires<0) || ($moires>=90))
	{
			echo '</br></br>';
			throw new Exception('Οι μοίρες που έχετε δώσει δεν είναι σωστές!');
	}
?>
Παρακάτω εμφανίζεται το ισοσκελές τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	dispTriangleIskl($x,$y,$length,0,0,0,$moires,0,0,0,0,0,0);
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