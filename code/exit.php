<?php

require_once('include.php');

dispHeader();
dispBody(0);

if(isset($_SESSION['valid_user']))
{
	$old_user=$_SESSION['valid_user'];
	
	unset($_SESSION['valid_user']);
	session_destroy();
	?>
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<?php
		echo 'Αποσυνδεθήκατε από το σύστημα.<br/> <br/>Μεταβείται στην ';
		echo '<a href="main.php">Aρχική σελίδα!</a>';
		?>
	</table>
<?php
}
else
{
	dispMain();
}


dispCloseBody();

?> 