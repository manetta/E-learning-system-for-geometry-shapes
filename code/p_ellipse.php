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
if (isset($_GET['vara'])) {$area = $_GET['vara'];}
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
	$perimeter=$_POST['perimeter'];
	$right=2*3.14*sqrt(($radius_x*$radius_x+$radius_y*$radius_y)/2);

	try
	{

		if(!filled_out($perimeter))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει την περίμετρο του σχήματος!');
		}	
?>
Παρακάτω εμφανίζεται η έλλειψη που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
		
		if($perimeter==(round($right,2)))
		{
			insertPEllipse($user);
			dispEllipse($x,$y,$radius_x,$radius_y,$c1,$c2,$c3,$area,$perimeter,0);
		}
		else
		{				
			dispEllipse($x,$y,$radius_x,$radius_y,$c1,$c2,$c3,$area,0,2);
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
	$perimeter=2*3.14*sqrt(($radius_x*$radius_x+$radius_y*$radius_y)/2);
?>	
Παρακάτω εμφανίζεται η έλλειψη που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	dispEllipse($x,$y,$radius_x,$radius_y,$c1,$c2,$c3,$area,round($perimeter,2),0);
}
?> 
 </table>