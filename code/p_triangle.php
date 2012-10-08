<?php

require_once('include.php');

dispHeader();
dispBody();

if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx1'])) {$x1 = $_GET['varx1'];}
if (isset($_GET['vary1'])) {$y1 = $_GET['vary1'];}
if (isset($_GET['varx2'])) {$x2 = $_GET['varx2'];}
if (isset($_GET['vary2'])) {$y2 = $_GET['vary2'];}
if (isset($_GET['varx3'])) {$x3 = $_GET['varx3'];}
if (isset($_GET['vary3'])) {$y3 = $_GET['vary3'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['varl1'])) {$l1 = $_GET['varl1'];}
if (isset($_GET['varl2'])) {$l2 = $_GET['varl2'];}
if (isset($_GET['varl3'])) {$l3 = $_GET['varl3'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">

	<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Σκαλινό τρίγωνο</h1></td>
		</tr>
	</table>
	
<?php
if($true==1)
{
	$perimeter=$_POST['perimeter'];

	if($l1==0 || $l2==0 || $l3==0)
	{
		try
		{
			throw new Exception('Θα πρέπει πρώτα να βρείτε τα μήκη των τριών πλευρών του τριγώνου ώστε στη συνέχεια να βρείτε την περίμετρο.');
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
		$right=$l1+$l2+$l3;

		try
		{
			if(!filled_out($perimeter))
			{
				echo '</br></br>';
				throw new Exception('Δεν έχετε συμπληρώσει την περίμετρο του σχήματος!');
			}	
?>	
Παρακάτω εμφανίζεται το τυχαίο τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
			 
			if($perimeter==$right)
			{
				insertPSkalino($user);
				dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l1,$l2,$l3,$c1,$c2,$c3,$perimeter,0);
			}
			else
			{	
				dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l1,$l2,$l3,$c1,$c2,$c3,0,4);
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
	if($l1==0 || $l2==0 || $l3==0)
	{
	try
		{
			throw new Exception('Θα πρέπει πρώτα να βρείτε τα μήκη των τριών πλευρών του τριγώνου ώστε στη συνέχεια να βρείτε την περίμετρο.');
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
		$perimeter=$l1+$l2+$l3;
		?>	
Παρακάτω εμφανίζεται το τυχαίο τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
		dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l1,$l2,$l3,$c1,$c2,$c3,$perimeter,0);
	}
}
?> 
</table>