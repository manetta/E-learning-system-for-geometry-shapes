<?php

require_once('include.php');

dispHeader();
dispBody();

if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx1'])) {$x1 = $_GET['varx1'];}
if (isset($_GET['vary1'])) {$y1 = $_GET['vary1'];}
if (isset($_GET['varx2'])) {$x2 = $_GET['varx2'];}
if (isset($_GET['vary2'])) {$y2 = $_GET['vary2'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>
	<table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ευθύγραμμό τμήμα</h1></td>
			
		</tr>
	</table>
<?php
if($true==1)
{
?>

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	<tr>

<?php
	$length=$_POST['length'];

	$right=round(sqrt(pow(($x1-$x2),2)+pow(($y1-$y2),2)),2);
		
	try
	{
		if(!filled_out($length))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει το μήκος του ευθύγραμμου τμήματος!');
		}	
		 
?>
Παρακάτω εμφανίζεται το ευθύγραμμο τμήμα με ακρά τα σημεία που επέλεξες.
<br/><br/>Έχοντας διαβάσει πρώτα την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
		if($length==$right)
		{
			insertMStraight($user);
			dispStraight($x1,$y1,$x2,$y2,$c1,$c2,$c3,$length,0);
			//dispCloseBody();
		}
		else
		{	
			dispStraight($x1,$y1,$x2,$y2,$c1,$c2,$c3,0,2);
			//dispCloseBody();
		}
	}

	catch (Exception $e)
	{
	?>

	<table width="740" border="0" align="right" cellpadding="0" cellspacing="0">
		<tr>
			<td><?php	echo $e->getMessage(); ?></td>
		</tr>
	</table>
	<?php
		dispCloseBody();
		exit();	
	}
	?>
	</tr>
</table>
<?php
}
else
{
	$length=round(sqrt(pow(($x1-$x2),2)+pow(($y1-$y2),2)),2);
	
?>
Παρακάτω εμφανίζεται το ευθύγραμμο τμήμα με ακρά τα σημεία που επέλεξες.
<br/><br/>Έχοντας διαβάσει πρώτα την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	dispStraight($x1,$y1,$x2,$y2,$c1,$c2,$c3,$length,0);

}
?> 
