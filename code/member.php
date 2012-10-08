<?php

require_once('include.php');

dispHeader();
dispBody(0);

$username=$_POST['username'];
$password=$_POST['password'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		
<?php
try
{
	if(!filled_out($username))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το όνομα συνδεσής σας!');
	}
	
	if(!filled_out($password))
	{
		echo '</br></br>';
		throw new Exception('Δεν έχετε συμπληρώση το κωδικό συνδεσής σας!');
	}
	
	$type=login($username,$password);
	
	//echo $type;
	
	
	//efoson o xristis einai egegramenos pername to onoma toy sti session metavliti valid_user
	$_SESSION['valid_user']=$username;
	$val_user=$_SESSION['valid_user'];

	//elegxoume ton typo tou xristi pou syndethike kai to kataxwroume sti session metabliti user_type
	if($type=='S')
		$type='student';
	else if($type=='T')	
		$type='teacher';
	else
		$type='Admin';

	$_SESSION['user_type']=$type;
	$type=$_SESSION['user_type'];
	
	echo 'Συνδεθήκατε επιτυχώς στο σύστημα! Μεταβείτε στην ';
	echo '<a href="main.php">Αρχική Σελίδα! </a>';
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

<?php
dispCloseBody();
?> 