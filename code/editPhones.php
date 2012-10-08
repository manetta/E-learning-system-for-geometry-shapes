<?php

require_once('include.php');

dispHeader();
dispBody();

$val_user=$_SESSION['valid_user'];

$new_phone=$_POST['new_phone'];
$new_mobile=$_POST['new_mobile'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
	
<?php
try
{

	if((!filled_out($new_phone))&&(!filled_out($new_mobile)))
	{
		throw new Exception('Δεν έχετε συμπληρώσει κάποιο νέο αριθμό τηλεφώνου!');
	}
	
	if(filled_out($new_phone))
	{
		if(!is_num($new_phone))
		{
		
			throw new Exception('Δεν έχετε δώσει έναν έγκυρο αριθμό σταθερού τηλεφώνου!');

		}
		if(strlen($new_phone)!=10)
		{
			throw new Exception('Ο αριθμός σταθερού τηλεφώνου θα πρέπει να αποτελείται από 10 ψηφία!');
		}
	}
	
	if(filled_out($new_mobile))
	{
		if(!is_num($new_mobile))
		{
			throw new Exception('Δεν έχετε δώσει έναν έγκυρο αριθμό κινητού τηλεφώνου!');
		}
		if(strlen($new_mobile)!=10)
		{
			throw new Exception('Ο αριθμός κινητού τηλεφώνου θα πρέπει να αποτελείται από 10 ψηφία!');
		}
	}
	
	if((filled_out($new_phone))&&(filled_out($new_mobile)))
	{
		modifyPhones($val_user,$new_phone,$new_mobile);
		dispCloseBody();
	}
	elseif(filled_out($new_phone))
	{
		modifyPhones($val_user,$new_phone,-1);
		dispCloseBody();
	}
	elseif(filled_out($new_mobile))
	{
		modifyPhones($val_user,-1,$new_mobile);
		dispCloseBody();
	}
		
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

