<?php

require_once('include.php');

dispHeader();
dispBody();

if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx'])) {$x = $_GET['varx'];}
if (isset($_GET['vary'])) {$y = $_GET['vary'];}
if (isset($_GET['varr'])) {$radius = $_GET['varr'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['vara'])) {$area = $_GET['vara'];}
if (isset($_GET['varp'])) {$perimeter = $_GET['varp'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Κύκλος</h1></td>
		</tr>
	</table>	
	
<?php
if($true==1)
{
	$diameter=$_POST['diameter'];
	$right=2*$radius;

	try
	{
		if(!filled_out($diameter))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει την διάμετρο του κύκλου!');
		}	
	?>
	
Παρακάτω εμφανίζεται ο κύκλος που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
	
	<?php
		 
		if($diameter==$right)
		{
			insertDCircle($user);
			dispCircle($x,$y,$radius,$c1,$c2,$c3,$diameter,$area,$perimeter,0);
		}
		else
		{	
			dispCircle($x,$y,$radius,$c1,$c2,$c3,0,$area,$perimeter,3);
		}
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
}
else
{
	$diameter=2*$radius;
		?>
Παρακάτω εμφανίζεται ο κύκλος που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
	
	<?php
	dispCircle($x,$y,$radius,$c1,$c2,$c3,$diameter,$area,$perimeter,0);
}
?> 
</table>