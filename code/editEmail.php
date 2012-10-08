<?php

require_once('include.php');

dispHeader();
dispBody();

$val_user=$_SESSION['valid_user'];

$new_email=$_POST['new_email'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1></h1></td>
		</tr>
	</table>
<?php

try
{
	if(!filled_out($new_email))
	{
		throw new Exception('Δεν έχετε συμπληρώσει το νέο σας e-mail!');
	}
	
	//echo "<br/>ΕΛΕΓΧΟΣ ΓΙΑ ΣΩΣΤΟ ΕΜΑΙΛ<br/><br/><br/>";
	modifyEmail($val_user,$new_email);
	dispCloseBody();
	

}

catch (Exception $e)
{
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		
<?php

	echo $e->getMessage();
?>
</table>
<?php
	dispCloseBody();
	exit();
}
?>

</table>

