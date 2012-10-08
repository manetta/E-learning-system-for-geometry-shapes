<?php

require_once('include.php');

dispHeader();
dispBody();

if(isset($_SESSION['valid_user'])) {$val_user=$_SESSION['valid_user'];}
?>
<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Αλλαγή κωδικού</h1></td>
		</tr>
	</table>
	
<?php


$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];
$new_pass1=$_POST['new_pass1'];

try
{
	if(!filled_out($old_pass))
	{
		throw new Exception('Δεν έχετε συμπληρώσει τον παλίο κωδικό σας!');
	}
	if(!filled_out($new_pass))
	{
		throw new Exception('Δεν έχετε συμπληρώσει τον νέο κωδικό σας!');
	}
	if(!filled_out($new_pass1))
	{
		throw new Exception('Δεν έχετε συμπληρώσει την επαλήθευση του νέου κωδικού σας!');
	}
	if((strlen($new_pass))<4)
	{
		throw new Exception('Ο κωδικός σας πρέπει να έχει μήκος τουλάχιστον 4 χαρακτήρες !');
	}
	if($new_pass!=$new_pass1)
	{
		throw new Exception('Οι κωδικοί που έχετε δώσει δεν ταιριάζουν μεταξύ τους!');
	}
	
	$pass=get_pass($val_user);
	
	if($pass!=sha1($old_pass))
	{
		throw new Exception('Ο παλίος σας κωδικός που έχετε δώσει δεν είιναι σωστός');
	}
	
	modifyPassword($val_user,$new_pass);
	dispCloseBody();	
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
?>
</table>
<?php

?> 