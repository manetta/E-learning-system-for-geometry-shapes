<?php

require_once('include.php');

dispHeader();
dispBody();


if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx'])) {$x = $_GET['varx'];}
if (isset($_GET['vary'])) {$y = $_GET['vary'];}
if (isset($_GET['varmi'])) {$mibase = $_GET['varmi'];}
if (isset($_GET['varme'])) {$mebase = $_GET['varme'];}
if (isset($_GET['varh'])) {$height = $_GET['varh'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Τραπέζιο</h1></td>
		</tr>
	</table>
	
<?php

if($true==1)
{
	$area=$_POST['area'];
	$right=($mibase+$mebase)*$height/2;

	try
	{
		if(!filled_out($area))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει το εμβαδόν του σχήματος!');
		}	
?>
Παρακάτω εμφανίζεται το τραπέζιο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
	
<?php
		 
		if($area==$right)
		{
			insertATrapezio($user);
			dispTrapezio($x,$y,$mibase,$mebase,$height,$c1,$c2,$c3,$area,0);
		}
		else
		{	
			dispTrapezio($x,$y,$mibase,$mebase,$height,$c1,$c2,$c3,0,1);
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
		exit();
		
	}
}
else
{
	$area=($mibase+$mebase)*$height/2;
?>
Παρακάτω εμφανίζεται το τραπέζιο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
	
<?php
	dispTrapezio($x,$y,$mibase,$mebase,$height,$c1,$c2,$c3,$area,0);
}
?> 
 </table>