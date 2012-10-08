<?php

require_once('include.php');

dispHeader();
dispBody();
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ρόμβος</h1></td>
		</tr>
	</table>
	
<?php

if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx'])) {$x = $_GET['varx'];}
if (isset($_GET['vary'])) {$y = $_GET['vary'];}
if (isset($_GET['varl'])) {$length = $_GET['varl'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['vard1'])) {$d1 = $_GET['vard1'];}
if (isset($_GET['vard2'])) {$d2 = $_GET['vard2'];}
if (isset($_GET['vard'])) {$degrees = $_GET['vard'];}
if (isset($_GET['varp'])) {$perimeter = $_GET['varp'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
<?php


if($true==1)
{
	$area=$_POST['area'];
	$right=$d1*$d2/2;

	try
	{
		if(!filled_out($area))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει το εμβαδόν του ρόμβου!');
		}	
?>
Παρακάτω εμφανίζεται ο ρόμβος που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
		if($area==round($right,2))
		{
			insertARhombus($user);
			dispRhombus($x,$y,$length,$c1,$c2,$c3,$degrees,$area,$perimeter,0);
		}
		else
		{	
			dispRhombus($x,$y,$length,$c1,$c2,$c3,$degrees,0,$perimeter,1);
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
	$area=$d1*$d2/2;
?>
Παρακάτω εμφανίζεται ο ρόμβος που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php	
	dispRhombus($x,$y,$length,$c1,$c2,$c3,$degrees,round($area,2),$perimeter,0);
}
?> 
 </table>