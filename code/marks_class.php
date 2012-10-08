<?php

require_once('include.php');

dispHeader();
dispBody();


$val_user=$_SESSION['valid_user'];
?>
<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1>Η τάξη μου</h1></td>
		</tr>
	</table>
	

<?php
check_progress_class($val_user);

dispCloseBody();

?> </table>