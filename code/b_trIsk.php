<?php

require_once('include.php');

dispHeader();
dispBody();

if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx'])) {$x = $_GET['varx'];}
if (isset($_GET['vary'])) {$y = $_GET['vary'];}
if (isset($_GET['varl'])) {$length = $_GET['varl'];}
if (isset($_GET['varm'])) {$moires = $_GET['varm'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['varmk'])) {$mk = $_GET['varmk'];}
if (isset($_GET['varh'])) {$height = $_GET['varh'];}
if (isset($_GET['vara'])) {$area = $_GET['vara'];}
if (isset($_GET['varp'])) {$perimeter = $_GET['varp'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ισοσκελές τρίγωνο</h1></td>
		</tr>
	</table>
	
<?php
if($true==1)
{
	$base=$_POST['base'];

	if($mk!=0)
	{
		$a=$mk/2*3.14/180;
		$right=sin($a)*$length*2;
	}
	else
	{
		$a=$moires*3.14/180;
		$right=cos($a)*$length*2;
	}
		
	try
	{
		if(!filled_out($base))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει το μήκος της βάσης του τριγώνου!');
		}	
?>
Παρακάτω εμφανίζεται το ισοσκελές τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
		 
		if($base==round($right,2))
		{
			insertBIsoskeles($user);
			dispTriangleIskl($x,$y,$length,$c1,$c2,$c3,$moires,$mk,$base,$height,$area,$perimeter,0);
		}
		else
		{	
			dispTriangleIskl($x,$y,$length,$c1,$c2,$c3,$moires,$mk,0,$height,$area,$perimeter,4);
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
	
	if($mk!=0)
	{
		$a=$mk/2*3.14/180;
		$base=sin($a)*$length*2;
	}
	else
	{
		$a=$moires*3.14/180;
		$base=cos($a)*$length*2;
	}
	$b=round($base,2);
?>
Παρακάτω εμφανίζεται το ισοσκελές τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	
	dispTriangleIskl($x,$y,$length,$c1,$c2,$c3,$moires,$mk,$b,$height,$area,$perimeter,0);
}
?> 
</table>