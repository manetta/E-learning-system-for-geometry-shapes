<?php
/*****************************************************************************
* arxeio gia ton elenxo twn stoixeiwn pou dinei o xristis sti forma eggrafis *
*****************************************************************************/

require_once('include.php');

dispHeader();
dispBody(0);


$name=$_POST['name'];
$surname=$_POST['surname'];
$username=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$school=$_POST['school'];
$level=$_POST['level'];
$level_section=$_POST['level_section'];
$email=$_POST['email'];
$home=$_POST['home'];
$mobile=$_POST['mobile'];
?>

<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		
<?php
try
{
	//elenxos sumplirwsis tou onomatos xristi
	if(!filled_out($name))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει το όνομα σας!');
	}
	
	//elenxos gia to an mia lexi apoteleitai mono apo grammata
	if(!is_alphabet($name))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει σωστά το ονομά σας!</br>
		Το ονομά σας θα πρέπει να αποτελείται μόνο από ελληνικούς ή λατινικούς χαρακτήρες');
	}
	
	//elenxos sumplirwsis tou epwnymatos xristi
	if(!filled_out($surname))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει το επωνυμό σας!');
	}
	
	//elenxos gia to an mia lexi apoteleitai mono apo grammata
	if(!is_alphabet($surname))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει σωστά το ονομά σας!</br>
		Το ονομά σας θα πρέπει να αποτελείται μόνο από ελληνικούς ή λατινικούς χαρακτήρες');
	}
	
	//elenxos sumplirwsis tou onomato syndesis
	if(!filled_out($username))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει το όνομα συνδεσής σας!');
	}
	
	//elenxos sumplirwsis tou kwdikou prosvasis
	if(!filled_out($password1))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει τον κωδικό σας!');
	}
	
	//elenxos sumplirwsis tis epalitheusis tou kwdikou prosvasis
	if(!filled_out($password2))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει την επαλήθευση του κωδικού σας!');
	}
	
	//elenxos gia to an oi 2 kwdikoi sumfwnoun metaxu tous
	if($password1!=$password2)
	{
		echo "</br></br>";
		throw new Exception('Οι κωδικοί που έχετε εισάγει δεν συμφωνούν μεταξύ τους!');
	}
	
	//elenxos sumplirwsis tou sxoleiou
	if(!filled_out($school))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει το σχολείο σας!');
	}
	
	//elenxos sumplirwsis tis taxis
	if(!filled_out($level))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει την τάξη σας!');
	}
	
	//elenxos sumplirwsis tou tmimatos
	if(!filled_out($level_section))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει το τμήμα σας!');
	}
	
	if(!is_num($level_section))
	{
		echo "</br></br>";
		throw new Exception('Δηλώστε το τμήμα σας με τη χρήση ενός αριθμού!');
	}
	
	//elenxos sumplirwsis tou email
	if(!filled_out($email))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει το email σας!');
	}
	
	//elenxos sumplirwsis tou email
	if(!valid_email($email))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε δώσει ένα σωστό email!');
	}
	
	
	
	
	
	
	//elenxos sumplirwsis tou statherou tilefwnou
	if(!filled_out($home) && !filled_out($mobile))
	{
		echo "</br></br>";
		throw new Exception('Δεν έχετε συμπληρώσει έναν αριθμό τηλεφώνου!');
	}
	else
	{
		if(filled_out($home))
		{
			if(!is_num($home))
			{
				echo "</br></br>";
				throw new Exception('Το σταθερό τηλέφωνο που έχετε συμπληρώσει θα πρέπει να αποτελείται από αριθμούς!');
			}
			
			if(strlen($home)!=10)
			{
				echo "</br></br>";
				throw new Exception('Το σταθερό τηλέφωνο που έχετε συμπληρώσει θα πρέπει να αποτελείται από 10 ψηφία!');
			}
		}
	

		if(filled_out($mobile))
		{
			if(!is_num($mobile))
			{
				echo "</br></br>";
				throw new Exception('Το κινητό τηλέφωνο που έχετε συμπληρώσει θα πρέπει να αποτελείται από αριθμούς!');
			}
			
			if(strlen($mobile)!=10)
			{
				echo "</br></br>";
				throw new Exception('Το κινητό τηλέφωνο που έχετε συμπληρώσει θα πρέπει να αποτελείται από 10 ψηφία!');
			}
		}
	}
	
	if(filled_out($home) && filled_out($mobile))
	{
		insertNewUser($name,$surname,$username,$password1,$school,$level,$level_section,$email);
		insertPhone($username,$home,$mobile);
		echo '</br></br>Εγγραφήκατε επιτυχώς στο σύστημα!<br/>';
		echo 'Τώρα μπορείτε να συνδεθείτε στο σύστημα! <br/>Μεταβείτε στην ';
		echo '<a href="login.php">Σελίδα σύνδεσης! </a>';
	}
	else if(filled_out($home))
	{
		insertNewUser($name,$surname,$username,$password1,$school,$level,$level_section,$email);
		insertPhone($username,$home,-1);
		echo '</br></br>Εγγραφήκατε επιτυχώς στο σύστημα!<br/>';
		echo 'Τώρα μπορείτε να συνδεθείτε στο σύστημα! <br/>Μεταβείτε στην ';
		echo '<a href="login.php">Σελίδα σύνδεσης! </a>';
	}
	else
	{
		insertNewUser($name,$surname,$username,$password1,$school,$level,$level_section,$email);
		insertPhone($username,-1,$mobile);
		echo '</br></br>Εγγραφήκατε επιτυχώς στο σύστημα!<br/>';
		echo 'Τώρα μπορείτε να συνδεθείτε στο σύστημα! <br/>Μεταβείτε στην ';
		echo '<a href="login.php">Σελίδα σύνδεσης! </a>';
	}
}


catch (Exception $e)
{?>

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