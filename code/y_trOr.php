<?php

require_once('include.php');

dispHeader();
dispBody();

if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx'])) {$x = $_GET['varx'];}
if (isset($_GET['vary'])) {$y = $_GET['vary'];}
if (isset($_GET['varl1'])) {$length1 = $_GET['varl1'];}
if (isset($_GET['varl2'])) {$length2 = $_GET['varl2'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['vara'])) {$area = $_GET['vara'];}
if (isset($_GET['varp'])) {$perimeter = $_GET['varp'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ορθογώνιο τρίγωνο</h1></td>
		</tr>
	</table>
	
<?php
if($true==1)
{
	$ypot=$_POST['ypot'];
	$right=sqrt($length1*$length1+$length2*$length2);

	try
	{
		if(!filled_out($ypot))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει την υποτείνουσα του τριγώνου!');
		}	
		?>
Παρακάτω εμφανίζεται το τετράγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
		 
		if($ypot==round($right,2))
		{
			insertYOrthogwniou($user);
			dispTriangleOrth($x,$y,$length1,$length2,$c1,$c2,$c3,$ypot,$area,$perimeter,0);
		}
		else
		{	
			dispTriangleOrth($x,$y,$length1,$length2,$c1,$c2,$c3,0,$area,$perimeter,3);
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
	$ypot=sqrt($length1*$length1+$length2*$length2);
	?>
Παρακάτω εμφανίζεται το τετράγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	dispTriangleOrth($x,$y,$length1,$length2,$c1,$c2,$c3,round($ypot,2),$area,$perimeter,0);
}
?> 
</table>