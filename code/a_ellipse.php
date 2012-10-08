<?php

require_once('include.php');

dispHeader();
dispBody();

if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx'])) {$x = $_GET['varx'];}
if (isset($_GET['vary'])) {$y = $_GET['vary'];}
if (isset($_GET['varrx'])) {$radius_x = $_GET['varrx'];}
if (isset($_GET['varry'])) {$radius_y = $_GET['varry'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['varp'])) {$perimeter = $_GET['varp'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Έλλειψη</h1></td>
		</tr>
	</table>
	
<?php
if($true==1)
{
	$area=$_POST['area'];
	$right=3.14*$radius_x*$radius_y;

	try
	{
		if(!filled_out($area))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει το εμβαδόν του σχήματος!');
		}	
?>
Παρακάτω εμφανίζεται η έλλειψη που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>	
<?php
		
		if(($area==$right)||((abs($area-$right))<0.000006))
		{
			insertAEllipse($user);
			dispEllipse($x,$y,$radius_x,$radius_y,$c1,$c2,$c3,$area,$perimeter,0);
		}
		else
		{	
			dispEllipse($x,$y,$radius_x,$radius_y,$c1,$c2,$c3,0,$perimeter,1);
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
	$area=3.14*$radius_x*$radius_y;
?>
Παρακάτω εμφανίζεται η έλλειψη που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>	
<?php
	dispEllipse($x,$y,$radius_x,$radius_y,$c1,$c2,$c3,$area,$perimeter,0);
}
?> 
 </table>