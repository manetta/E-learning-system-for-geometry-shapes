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
if (isset($_GET['varb'])) {$base= $_GET['varb'];}
if (isset($_GET['varh'])) {$height = $_GET['varh'];}
if (isset($_GET['vara'])) {$area = $_GET['vara'];}
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
	$perimeter=$_POST['perimeter'];

	if($base==0)
	{		
		try
		{
			throw new Exception('Θα πρέπει πρώτα να βρείτε την βάση του τριγώνου ώστε στη συνέχεια να βρείτε την περίμετρο');
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
		$right=2*$length+$base;
		
		try
		{
			if(!filled_out($perimeter))
			{
				echo '</br></br>';
				throw new Exception('Δεν έχετε συμπληρώσει την περίμετρο του σχήματος!');
			}
?>
Παρακάτω εμφανίζεται το ισοσκελές τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php			
			 
			if($perimeter==$right)
			{
				insertPIsoskeles($user);
				dispTriangleIskl($x,$y,$length,$c1,$c2,$c3,$moires,$mk,$base,$height,$area,$perimeter,0);
			}
			else
			{	
				dispTriangleIskl($x,$y,$length,$c1,$c2,$c3,$moires,$mk,$base,$height,$area,0,2);
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
}
else
{
	if($base==0)
	{
		try
		{
			throw new Exception('Θα πρέπει πρώτα να βρείτε την βάση του τριγώνου ώστε στη συνέχεια να βρείτε την περίμετρο');
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
		$perimeter=2*$length+$base;
?>
Παρακάτω εμφανίζεται το ισοσκελές τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
		dispTriangleIskl($x,$y,$length,$c1,$c2,$c3,$moires,$mk,$base,$height,$area,$perimeter,0);
	}
}
?> 
</table>