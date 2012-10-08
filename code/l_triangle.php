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
//if (isset($_GET['varf'])) {$fill = $_GET['varf'];}
//if (isset($_GET['vars'])) {$stroke = $_GET['vars'];}
if (isset($_GET['varl'])) {$l = $_GET['varl'];}
if (isset($_GET['varl2'])) {$l2 = $_GET['varl2'];}
if (isset($_GET['varl3'])) {$l3 = $_GET['varl3'];}
if (isset($_GET['varp'])) {$perimeter = $_GET['varp'];}
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
	if($l=='ab')
	{
		$side=$_POST['ab'];
		$s='ab';
		$right=sqrt(($x1-$x2)*($x1-$x2)+($y1-$y2)*($y1-$y2));
	}
	elseif($l=='bc')
	{
		$side=$_POST['bc'];
		$s='bc';
		$right=sqrt(($x2-$x3)*($x2-$x3)+($y2-$y3)*($y2-$y3));
	}
	else
	{
		$side=$_POST['ca'];
		$s='ca';
		$right=sqrt(($x1-$x3)*($x1-$x3)+($y1-$y3)*($y1-$y3));
	}

	try
	{
		if(!filled_out($side))
		{
			echo '</br></br>';
			throw new Exception('Δεν έχετε συμπληρώσει το μήκος της πλευράς!');
		}	
?>	
Παρακάτω εμφανίζεται το τυχαίο τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
		 
		if($side==round($right,2))
		{
			if($l=='ab')
			{
				insertLSkalino($user,$s);
				dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$side,$l2,$l3,$c1,$c2,$c3,$perimeter,0);
				//dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$fill,$stroke,$side,$l2,$l3,$perimeter,0);
			}	
			elseif($l=='bc')
			{
				insertLSkalino($user,$s);
				dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l2,$side,$l3,$c1,$c2,$c3,$perimeter,0);
			}
			else
			{
				insertLSkalino($user,$s);
				dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l2,$l3,$side,$c1,$c2,$c3,$perimeter,0);
			}
		}
		else
		{	
			if($l=='ab')
				dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,0,$l2,$l3,$c1,$c2,$c3,$perimeter,1);
			elseif($l=='bc')
				dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l2,0,$l3,$c1,$c2,$c3,$perimeter,2);
			else
				dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l2,$l3,0,$c1,$c2,$c3,$perimeter,3);
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
	if($l=='ab')
	{
		$s='ab';
		$side=sqrt(($x1-$x2)*($x1-$x2)+($y1-$y2)*($y1-$y2));
	}
	elseif($l=='bc')
	{
		$s='bc';
		$side=sqrt(($x2-$x3)*($x2-$x3)+($y2-$y3)*($y2-$y3));
	}
	else
	{
		$s='ca';
		$side=sqrt(($x1-$x3)*($x1-$x3)+($y1-$y3)*($y1-$y3));
	}
	?>	
Παρακάτω εμφανίζεται το τυχαίο τρίγωνο που δημιούργησες.
<br/><br/>Έχοντας διαβάσει την θεωρία προσπάθησε να κάνεις τις ασκήσεις που ακολουθούν.<br/><br/>
<?php
	if($l=='ab')
	{
		dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,round($side,2),$l2,$l3,$c1,$c2,$c3,$perimeter,0);
	}	
	elseif($l=='bc')
	{
		dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l2,round($side,2),$l3,$c1,$c2,$c3,$perimeter,0);
	}
	else
	{
		dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l2,$l3,round($side,2),$c1,$c2,$c3,$perimeter,0);
	}
	
}

?> 

</table>