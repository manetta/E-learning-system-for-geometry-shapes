<?php

require_once('include.php');

dispHeader();
dispBody();

if(isset($_SESSION['valid_user'])) {$user=$_SESSION['valid_user'];}

if (isset($_GET['varx'])) {$x = $_GET['varx'];}
if (isset($_GET['vary'])) {$y = $_GET['vary'];}
if (isset($_GET['varl'])) {$length = $_GET['varl'];}
if (isset($_GET['varc1'])) {$c1 = $_GET['varc1'];}
if (isset($_GET['varc2'])) {$c2 = $_GET['varc2'];}
if (isset($_GET['varc3'])) {$c3 = $_GET['varc3'];}
if (isset($_GET['vara'])) {$area = $_GET['vara'];}
if (isset($_GET['varp'])) {$perimeter = $_GET['varp'];}
if (isset($_GET['vart'])) {$true = $_GET['vart'];}
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Ισόπλευρο τρίγωνο</h1></td>
		</tr>
	</table>
	
<?php
if($true==1)
{
	$height=$_POST['height'];
	$right=sqrt($length*$length-(($length/2)*($length/2)));

	try
	{
		if(!filled_out($height))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει το ύψος του τριγώνου!');
		}
?>
Παρακάτω εμφανίζεται το τετράγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php		
		 
		if($height==round($right,2))
		{
			insertHIsopleuro($user);
			dispTriangleIspl($x,$y,$length,$c1,$c2,$c3,$height,$area,$perimeter,0);
		}
		else
		{	
			dispTriangleIspl($x,$y,$length,$c1,$c2,$c3,0,$area,$perimeter,3);
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
	$height=round(sqrt($length*$length-(($length/2)*($length/2))),2);
	?>
Παρακάτω εμφανίζεται το τετράγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	dispTriangleIspl($x,$y,$length,$c1,$c2,$c3,$height,$area,$perimeter,0);
}
?> 
</table>