<?php

/************************************************************************************
* sunartisi gia sundesi me ti vasi dedomenwn
*************************************************************************************/

function db_connect()
{
	//sundesi me ti vasi dedomenwn	
	$db_conn=@mysql_connect("localhost","dbauthor","password");
	
	if(!$db_conn)	
	{
		die('Υπήρξε πρόβλημα κατά την σύνδεση με τη βάση δεδομένων'.mysql_error());
		exit();
	}

	//epilogi tis vasis dedomenen
	$db_select=@mysql_select_db("svgshapes",$db_conn);

	if(!$db_select)
	{
		die('Η σύνδεση με τη βάση δεδομένων απέτυχε.Παρακαλώ δοκιμάστε αργότερα'.mysql_error());
	}	

	return $db_conn;
}


/************************************************************************************
* sunartisi gia tin eisagwgi twn stoixeiwn neou xristi sti vasi dedomenwn
*************************************************************************************/

function insertNewUser($name,$surname,$username,$password,$school,$level,$level_section,$email)
{	
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	//elegxos gia to an to username pou epelexe o xrisits einai diathesimo
	$result=@mysql_query("SELECT * FROM users where username='$username'");
	
	if(!$result)
		throw new Exception('</br></br>Συνέβη κάποιο σφάλμα κατά την εγγραφή σας');
	if(mysql_num_rows($result)>0)
		throw new Exception('</br></br>Το όνομα χρήστη που επιλέξατε χρησιμοποιείται ήδη');

		
	//efoson to username einai diathesimo eisagoyme ta stoixea toy xristi sti vasi dedomenwn
	$result=mysql_query("INSERT INTO users (username,name,surname,password,email,user_type,school,school_level,level_section) 
		VALUES ('$username','$name','$surname',sha1('$password'),'$email','S','$school','$level','$level_section')");
	if(!$result)
		throw new Exception('</br></br>Δεν εγγραφήκατε επιτυχώς στο σύστημά μας.Παρακαλώ δοκιμάστε αργότερα');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;	
}

/************************************************************************************
* sunartisi gia tin eisagwgi twn tilefwnwn tou xristi
*************************************************************************************/
function insertPhone($username,$home,$mobile)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	if($home!=-1 && $mobile!=-1)
		$result=mysql_query("INSERT INTO telephone (home,mobile,user_id) VALUES ('$home','$mobile','$username')");
	else if($mobile==-1)
		$result=mysql_query("INSERT INTO telephone (home,user_id) VALUES ('$home','$username')");
	else
		$result=mysql_query("INSERT INTO telephone (mobile,user_id) VALUES ('$mobile','$username')");
		
	if(!$result)
		throw new Exception('</br></br>Δεν εγγραφήκατε επιτυχώς στο σύστημά μας.Παρακαλώ δοκιμάστε αργότερα');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}

/************************************************************************************
* sunartisi gia sundesi tou xristi sto sustima
*************************************************************************************/
function login($username,$password)
{
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);
	
	$conn=db_connect();
	$result=mysql_query("SELECT user_type FROM users WHERE username='$username' AND password=sha1('$password')");
	mysql_close($conn);
	
	
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο του ονοματός σας');
		
	if(mysql_num_rows($result)>0)
	{
		$row=mysql_fetch_row($result);
		return $row[0];
	}
	else
	{
		echo '</br></br>';
		throw new Exception('Δεν υπάρχει καταχωρημένος χρήστης με τα στοιχεία που δώσατε!');
	}

}


/************************************************************************************
* sunartisi gia sundesi me ti op[oia pernoyme ton tupo tou xristi
*************************************************************************************/
function get_user_type($username)
{
	$username=mysql_real_escape_string($username);
	
	$conn=db_connect();
	$result=mysql_query("SELECT user_type FROM users WHERE username='$username'");
	mysql_close($conn);
	
	
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο του ονοματός σας');
		
	if(mysql_num_rows($result)>0)
	{
		$row=mysql_fetch_row($result);
		return $row[0];
	}
	else
	{
		echo '</br></br>';
		throw new Exception('Δεν υπάρχει καταχωρημένος χρήστης με τα στοιχεία που δώσατε!');
	}

}

/************************************************************************************
* sunartisi emafanisis twn stoixeiwn tou xristi
*************************************************************************************/
function UserData($username)
{

	$conn=db_connect();
	$result=mysql_query("SELECT * FROM users where username='$username'");
	$result1=mysql_query("SELECT * FROM telephone where user_id='$username'");
	mysql_close();
	
	if(!$result||!$result1)
		throw new Exception('Συνέβη κάποιο σφάλμα με την ανάκτηση των στοιχείων σύνδεσής σας');
		
	$row=mysql_fetch_row($result);
	$row1=mysql_fetch_row($result1);
	
	dispUserData($row,$row1);
}

/************************************************************************************
* sunartisi pou epistrefei ton kwdiko sundesis enos xristi me vasi to username
*************************************************************************************/
function get_pass($username)
{
	$conn=db_connect();
	$result=mysql_query("SELECT password FROM users where username='$username'");
	mysql_close();
	
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα με την ανάκτηση του παλιού κωδικού σύνδεσής σας');
		
	$row=mysql_fetch_row($result);
	
	return $row[0];
}


/************************************************************************************
* sunartisi tropopoiisis tou kwdikou sundesis tou xristi 
*************************************************************************************/
function modifyPassword($username,$password)
{
	$kpass=sha1($password);
	
	$conn=db_connect();
	$result=mysql_query("UPDATE users SET password='$kpass' where username='$username'");
	mysql_close();
	
	if(!$result)
	{
		throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή του κωδικού σας.Παρακαλώ δοκιμάστε αργότερα!');
	}
	
	?>
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<?php
		echo 'Η αλλαγή του κωδικού σας έγινε με επιτυχία';
		echo '<br/><br/><br/>';
	
		echo '<a href="profil.php">Επιστροφή</a>';
		?>
	</table>
<?php
}


/************************************************************************************
* sunartisi tropopoiisis email xristi 
*************************************************************************************/
function modifyEmail($username,$email)
{
	$conn=db_connect();
	$result=mysql_query("UPDATE users SET email='$email' where username='$username'");
	mysql_close();
	
	if(!$result)
	{
		throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή του κωδικού σας.Παρακαλώ δοκιμάστε αργότερα!');
	}
	
	UserData($username);
	
	dispModifyDataForm();
}


/************************************************************************************
* sunartisi tropopoiisis twn tilefwnwn tou xristi 
*************************************************************************************/
function modifyPhones($username,$new_phone,$new_mobile)
{	
	$conn=db_connect();
	//allagi kinitou kai statherou tilefwnou
	if(($new_phone!=-1)&&($new_mobile!=-1))
	{
		$result=mysql_query("UPDATE telephone SET home='$new_phone' where user_id='$username'");
		$result1=mysql_query("UPDATE telephone SET mobile='$new_mobile' where user_id='$username'");
		mysql_close();
		if((!$result)&&(!$result1))
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των τηλεφώνων σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
	//allagi mono tou statherou tilefwnou
	elseif($new_phone!=-1)
	{
		$result=mysql_query("UPDATE telephone SET home='$new_phone' where user_id='$username'");
		mysql_close();
		if(!$result)
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των τηλεφώνων σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
	elseif($new_mobile!=-1)
	{
		$result=mysql_query("UPDATE telephone SET mobile='$new_mobile' where user_id='$username'");
		mysql_close();
		if(!$result)
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των τηλεφώνων σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
}


/************************************************************************************
* sunartisi tropopoiisis twn tilefwnwn tou xristi 
*************************************************************************************/
function modifySchool($username,$school,$level,$level_section)
{
	$conn=db_connect();
	//allagi olwn twn stoixeiwn
	if(($school!=-1)&&($level!=-1)&&($level_section!=-1))
	{
		$result=mysql_query("UPDATE users SET school='$school' where username='$username'");
		$result1=mysql_query("UPDATE users SET school_level='$level' where username='$username'");
		$result2=mysql_query("UPDATE users SET level_section='$level_section' where username='$username'");
		mysql_close();
		
		if((!$result)&&(!$result1)&&(!$result2))
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των στοιχείων για το σχολείο σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
	//allagi mono toy sxoleioy
	elseif(($school!=-1)&&($level==-1)&&($level_section==-1))
	{
		$result=mysql_query("UPDATE users SET school='$school' where username='$username'");
		
		if((!$result))
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των στοιχείων για το σχολείο σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
	//allagi tou sxoleiou kai tis taxis
	elseif(($school!=-1)&&($level!=-1)&&($level_section==-1))
	{
		$result=mysql_query("UPDATE users SET school='$school' where username='$username'");
		$result1=mysql_query("UPDATE users SET school_level='$level' where username='$username'");
		
		if((!$result)&&(!$result1))
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των στοιχείων για το σχολείο σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
	//allagi mono tis taxis
	elseif(($school==-1)&&($level!=-1)&&($level_section==-1))
	{
		$result1=mysql_query("UPDATE users SET school_level='$level' where username='$username'");
		
		if(!$result1)
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των στοιχείων για το σχολείο σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
	//allagi tis taxis kai toy tmimatos
	elseif(($school==-1)&&($level!=-1)&&($level_section!=-1))
	{
		$result1=mysql_query("UPDATE users SET school_level='$level' where username='$username'");
		$result2=mysql_query("UPDATE users SET level_section='$level_section' where username='$username'");
		
		if((!$result1)&&(!$result2))
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των στοιχείων για το σχολείο σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
	elseif(($school==-1)&&($level==-1)&&($level_section!=-1))
	{
		$result2=mysql_query("UPDATE users SET level_section='$level_section' where username='$username'");
		
		if(!$result2)
		{
			throw new Exception('Υπάρχει κάποιο πρόβλημα με την αλλαγή των στοιχείων για το σχολείο σας.Παρακαλώ δοκιμάστε αργότερα!');
		}
		
		UserData($username);
	
		dispModifyDataForm();
	}
}


/***************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon tetragwnou
****************************************************************************************/
function insertARect($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM rect where user_idr='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE rect SET area='true' WHERE user_idr='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO rect (user_idr,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/*****************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro tetragwnou
******************************************************************************************/
function insertPRect($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();

	$username=mysql_real_escape_string($username);
	
	$result=@mysql_query("SELECT * FROM rect where user_idr='$username'");
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
	
	
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE rect SET perimeter='true' WHERE user_idr='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO rect (user_idr,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon parallilogrammou
********************************************************************************************/
function insertARect1($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM rect1 where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE rect1 SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO rect1 (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro parallilogrammou
************************************************************************************************/
function insertPRect1($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();

	$username=mysql_real_escape_string($username);
	
	$result=@mysql_query("SELECT * FROM rect1 where username='$username'");
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
	
	
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE rect1 SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO rect1 (username,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia ti diametro tou kuklou
********************************************************************************************/
function insertDCircle($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM circle where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE circle SET diameter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO circle (username,diameter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon tou kuklou
********************************************************************************************/
function insertACircle($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM circle where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE circle SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO circle (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro tou kuklou
********************************************************************************************/
function insertPCircle($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM circle where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE circle SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO circle (username,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon ellipsis
********************************************************************************************/
function insertAEllipse($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM ellipse where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE ellipse SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO ellipse (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}

/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro tis ellipsis
********************************************************************************************/
function insertPEllipse($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM ellipse where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE ellipse SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO ellipse (username,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;

}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to upsos isopleurou
********************************************************************************************/
function insertHIsopleuro($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM isopleuro where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE isopleuro SET height='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO isopleuro (username,height) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;

}

/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon isopleurou
********************************************************************************************/
function insertAIsopleuro($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM isopleuro where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE isopleuro SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO isopleuro (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}

/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro tou isopleurou
********************************************************************************************/
function insertPIsopleuro($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM isopleuro where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE isopleuro SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO isopleuro (username,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/***************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin gwnia koryfis tou isoskelous
**************************************************************************************************/
function insertGKIsoskeles($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM isoskeles where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE isoskeles SET angle='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO isoskeles (username,angle) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin basi tou isoskelous
********************************************************************************************/
function insertBIsoskeles($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM isoskeles where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE isoskeles SET base='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO isoskeles (username,base) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to upsos tou isoskelous
********************************************************************************************/
function insertHIsoskeles($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM isoskeles where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE isoskeles SET height='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO isoskeles (username,height) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;

}

/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon isoskeles
********************************************************************************************/
function insertAIsoskeles($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM isoskeles where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE isoskeles SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO isoskeles (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro isoskelous
********************************************************************************************/
function insertPIsoskeles($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM isoskeles where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE isoskeles SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO isoskeles (username,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to upsos tou orthogwniou
********************************************************************************************/
function insertYOrthogwniou($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM orthogwnio where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE orthogwnio SET ypot='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO orthogwnio (username,ypot) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon tou orthogwniou
********************************************************************************************/
function insertAOrthogwniou($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM orthogwnio where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE orthogwnio SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO orthogwnio (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/***********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro tou orthogwniou
***********************************************************************************************/
function insertPOrthogwniou($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM orthogwnio where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE orthogwnio SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO orthogwnio (username,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/*****************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to upsos tou orthogwniou isoskelous
****************************************************************************************************/
function insertYOrthogwniouIsoskeles($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM orthisosk where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE orthisosk SET ypot='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO orthisosk (username,ypot) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/****************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon orthogwniou issoskelous
***************************************************************************************************/
function insertAOrthogwniouIsoskeles($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM orthisosk where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE orthisosk SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO orthisosk (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/*********************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro tou orthogwniou isoskelous
**********************************************************************************************************/
function insertPOrthogwniouIsoskeles($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM orthisosk where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE orthisosk SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO orthisosk (username,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro tou skalinou
********************************************************************************************/
function insertPSkalino($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM skalino where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE skalino SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO skalino (username,perimeter) VALUES ('$username','true')");
	}	
			
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/***************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantiseis tou xristi gia to mikos twn pleurwn tou skalinou
****************************************************************************************************/
function insertLSkalino($username,$side)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM skalino where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		if($side=='ab')
			$result1=mysql_query("UPDATE skalino SET ab='true' WHERE username='$username'");
		elseif($side=='bc')
			$result1=mysql_query("UPDATE skalino SET bc='true' WHERE username='$username'");
		else
			$result1=mysql_query("UPDATE skalino SET ca='true' WHERE username='$username'");
	}
	else
	{
		if($side=='ab')
			$result1=mysql_query("INSERT INTO skalino (username,ab) VALUES ('$username','true')");
		elseif($side=='bc')
			$result1=mysql_query("INSERT INTO skalino (username,bc) VALUES ('$username','true')");
		else
			$result1=mysql_query("INSERT INTO skalino (username,ca) VALUES ('$username','true')");
	}	
			
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/***************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantiseis tou xristi gia tin perimetro tou rombou
****************************************************************************************************/
function insertPRhombus($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM rhombus where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE rhombus SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO rhombus (username,perimeter) VALUES ('$username','true')");
	}	
			
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/***************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantiseis tou xristi gia to embadon tou rombou
****************************************************************************************************/
function insertARhombus($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM rhombus where username='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE rhombus SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO rhombus (username,area) VALUES ('$username','true')");
	}	
			
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/***************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantiseis tou xristi gia to mikos tis eutheias
****************************************************************************************************/
function insertMStraight($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();
	
	$username=mysql_real_escape_string($username);

	//elegxos gia to an yparxi kataxwrisi me ayton ton xristi 
	$result=@mysql_query("SELECT * FROM straight where user_idr='$username'");
	
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
			
		
	//elegxos gia to an yparxei kataxwrisi tou xristi sti vasi dedomenwn
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE straight SET mikos='true' WHERE user_idr='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO straight (user_idr,mikos) VALUES ('$username','true')");
	}	
			
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/********************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia tin perimetro plagiou parallilogrammou
********************************************************************************************************/
function insertPRect11($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();

	$username=mysql_real_escape_string($username);
	
	$result=@mysql_query("SELECT * FROM rect11 where username='$username'");
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
	
	
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE rect11 SET perimeter='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO rect11 (username,perimeter) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/*****************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon plagiou parallilogrammou
******************************************************************************************************/
function insertARect11($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();

	$username=mysql_real_escape_string($username);
	
	$result=@mysql_query("SELECT * FROM rect11 where username='$username'");
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
	
	
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE rect11 SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO rect11 (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/*****************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon plagiou parallilogrammou
******************************************************************************************************/
function insertATrapezio($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();

	$username=mysql_real_escape_string($username);
	
	$result=@mysql_query("SELECT * FROM trapezio where username='$username'");
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
	
	
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE trapezio SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO trapezio (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/*****************************************************************************************************
* sunartisi gia tin eisagwgi tis swstis apantisis tou xristi gia to embadon plagiou parallilogrammou
******************************************************************************************************/
function insertAOTrapezio($username)
{
	//sundesi me ti vasi dedomenwn kalwntas ti synartisi db_connect()
	$conn=db_connect();

	$username=mysql_real_escape_string($username);
	
	$result=@mysql_query("SELECT * FROM otrapezio where username='$username'");
	
	//emafanisi minima lathous
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
	
	
	if(mysql_num_rows($result)>0)
	{
		$result1=mysql_query("UPDATE otrapezio SET area='true' WHERE username='$username'");
	}
	else
	{
		$result1=mysql_query("INSERT INTO otrapezio (username,area) VALUES ('$username','true')");
	}	
		
	
	if(!$result1)
		throw new Exception('</br></br>Η απάντηση που δώσατε δεν αποθηκεύτηκε στην βάση δεδομένων μας!');
	
	//kleisimo tis vasis dedomenwn
	mysql_close($conn);

	return true;
}


/***************************************************************************************************
* sunartisi gia tin ektypwsi twn apantisewn kathe xristi
****************************************************************************************************/
function check_my_progress($username,$x)
{
	$username=mysql_real_escape_string($username);
	
	
	//elegxos gia tetragwno
	$conn=db_connect();
	$resultr=@mysql_query("SELECT * FROM rect where user_idr='$username'");
	
	if(!$resultr)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	if($x==0)
		echo '<font align="center" color="#A9B63D"><h1>Έλεγχος της επιδοσής μου!</h1></font>';
	else
	{
		echo '<h1>Έλεγχος της επιδοσής του μαθητή ';

		$conn=db_connect();
	
		$result_st=@mysql_query("SELECT * FROM users where username='$username'");
	
		if(!$result_st)
			throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
		mysql_close($conn);
		
		if(mysql_num_rows($result_st)>0)
		{
			$rowst=mysql_fetch_row($result_st);
			
			echo $rowst[1];
			echo ' ';
			echo $rowst[2];
			echo '</h1>';
		}
		
	}
	echo '<br/>';
	echo '<h3>Τετράγωνο</h3>';

	if(mysql_num_rows($resultr)>0)
	{
		$row=mysql_fetch_row($resultr);
		
		if($row[2]=='true')
			get_solution('Εμβαδόν: ',1);
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);

	}
	//den yparxei kataxwrisei tou mathiti
	else
	{
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';

		get_solution('Περίμετρος: ',0);		
	}
	echo '<br/><br/>';

	//elegxos gia euthugrammo tmima
	$conn=db_connect();
	$results=@mysql_query("SELECT * FROM straight where user_idr='$username'");
	
	if(!$results)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Ευθύγραμμο τμήμα</h3>';
	
	if(mysql_num_rows($results)>0)
	{
		$row=mysql_fetch_row($results);
		
		if($row[2]=='true')
			get_solution('Μήκος: ',1);
		else
			get_solution('Μήκος: ',0);
	}	
	else
	{
		get_solution('Μήκος: ',0);
	}
	echo '<br/><br/>';
	
	//orthogwnio parallilogrammo
	$conn=db_connect();
	
	$resultr1=@mysql_query("SELECT * FROM rect1 where username='$username'");

	if(!$resultr1)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Ορθογώνιο παραλληλόγραμμο</h3>';

	if(mysql_num_rows($resultr1)>0)
	{
		$row=mysql_fetch_row($resultr1);
		
		if($row[2]=='true')
			get_solution('Εμβαδόν: ',1);
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
	}
	else
	{
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	
	//plagio parallilogrammo
	$conn=db_connect();
	
	$resultr2=@mysql_query("SELECT * FROM rect11 where username='$username'");

	if(!$resultr2)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Πλάγιο παραλληλόγραμμο</h3>';
	if(mysql_num_rows($resultr2)>0)
	{
		$row=mysql_fetch_row($resultr2);
		
		if($row[2]=='true')
			get_solution('Εμβαδόν: ',1);
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
	}
	else
	{
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	//kuklos
	$conn=db_connect();
	
	$resultc=@mysql_query("SELECT * FROM circle where username='$username'");

	if(!$resultc)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Κύκλος</h3>';

	if(mysql_num_rows($resultc)>0)
	{
		$row=mysql_fetch_row($resultc);
		
		if($row[2]=='true')
			get_solution('Διάμετρος: ',1);
		else
			get_solution('Διάμετρος: ',0);
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Εμβαδόν: ',1);
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		if($row[4]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
			
	}
	else
	{
		get_solution('Διάμετρος: ',0);
		
		echo '<br/>';
		
		get_solution('Εμβαδόν: ',0);
			
		echo '<br/>';
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	//ellipsi
	$conn=db_connect();
	
	$resulte=@mysql_query("SELECT * FROM ellipse where username='$username'");

	if(!$resulte)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Έλλειψη</h3>';

	if(mysql_num_rows($resulte)>0)
	{
		$row=mysql_fetch_row($resulte);
		
		if($row[2]=='true')
			get_solution('Εμβαδόν: ',1);
		else
			get_solution('Εμβαδόν: ',0);
			
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Περίμετρος: ',1);
		else
		{
			get_solution('Περίμετρος: ',0);
		}
	}
	else
	{
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	//isopleuro
	$conn=db_connect();
	
	$resultip=@mysql_query("SELECT * FROM isopleuro where username='$username'");

	if(!$resultip)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Ισόπλευρο τρίγωνο</h3>';

	if(mysql_num_rows($resultip)>0)
	{
		$row=mysql_fetch_row($resultip);
		
		if($row[2]=='true')
			get_solution('Ύψος: ',1);
		else
			get_solution('Ύψος: ',0);
		
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Εμβαδόν: ',1);		
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		if($row[4]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
	}
	else
	{	
		get_solution('Ύψος: ',0);
		
		echo '<br/>';
		
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	//isoskeles
	$conn=db_connect();
	
	$resultisk=@mysql_query("SELECT * FROM isoskeles where username='$username'");

	if(!$resultisk)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Ισόσκελές τρίγωνο</h3>';

	if(mysql_num_rows($resultisk)>0)
	{
		$row=mysql_fetch_row($resultisk);
		
		if($row[2]=='true')
			get_solution('Γωνία κορυφής: ',1);
		
		else
			get_solution('Γωνία κορυφής: ',0);
			
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Μήκος πλευράς βάσης: ',1);
		else
			get_solution('Μήκος πλευράς βάσης: ',0);
			
		echo '<br/>';
		echo '<br/>';
		
		if($row[4]=='true')
			get_solution('Ύψος: ',1);
		else
			get_solution('Ύψος: ',0);	
			
		echo '<br/>';
		echo '<br/>';
		
		if($row[5]=='true')
			get_solution('Εμβαδόν: ',1);	
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		if($row[6]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
	}
	else
	{
		get_solution('Γωνία κορυφής: ',0);
		
		echo '<br/>';
		
		get_solution('Μήκος πλευράς βάσης: ',0);
		
		echo '<br/>';
		echo '<br/>';		
		
		get_solution('Ύψος: ',0);	
		
		echo '<br/>';
		echo '<br/>';
		
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	
	//orthogwnio
	$conn=db_connect();
	
	$resultor=@mysql_query("SELECT * FROM orthogwnio where username='$username'");

	if(!$resultor)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Ορθογώνιο τρίγωνο</h3>';

	if(mysql_num_rows($resultor)>0)
	{
		$row=mysql_fetch_row($resultor);
		
		if($row[2]=='true')
			get_solution('Υποτείνουσα: ',1);
		else
			get_solution('Υποτείνουσα: ',0);
		
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Εμβαδόν: ',1);		
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		if($row[4]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
	}
	else
	{
		get_solution('Υποτείνουσα: ',0);
				
		echo '<br/>';
		
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	
	//orthogwnio isoskeles
	$conn=db_connect();
	
	$resultoris=@mysql_query("SELECT * FROM orthisosk where username='$username'");

	if(!$resultoris)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Ορθογώνιο ισοσκελές τρίγωνο</h3>';

	if(mysql_num_rows($resultoris)>0)
	{
		$row=mysql_fetch_row($resultoris);
		
		if($row[2]=='true')
			get_solution('Υποτείνουσα: ',1);
		else
			get_solution('Υποτείνουσα: ',0);
		
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Εμβαδόν: ',1);
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		if($row[4]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
	}
	else
	{
		get_solution('Υποτείνουσα: ',0);
	
		echo '<br/>';
		
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	//skalino
	$conn=db_connect();
	
	$resultsk=@mysql_query("SELECT * FROM skalino where username='$username'");

	if(!$resultsk)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Σκαληνό τρίγωνο</h3>';

	if(mysql_num_rows($resultsk)>0)
	{
		$row=mysql_fetch_row($resultsk);
		
		if($row[2]=='true')
			get_solution('Μήκος πλυεράς ΑΒ: ',1);
		else
			get_solution('Μήκος πλυεράς ΑΒ: ',0);
			
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Μήκος πλυεράς ΒΓ: ',1);
		else
			get_solution('Μήκος πλυεράς ΒΓ: ',0);
		
		echo '<br/>';
		echo '<br/>';
		
		if($row[4]=='true')
			get_solution('Μήκος πλυεράς ΓΑ: ',1);
		else
			get_solution('Μήκος πλυεράς ΓΑ: ',0);
		
	
		echo '<br/>';
		echo '<br/>';
		
		if($row[5]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
	}
	else
	{
		get_solution('Μήκος πλυεράς ΑΒ: ',0);
				
		echo '<br/>';
		
		get_solution('Μήκος πλυεράς ΒΓ: ',0);
				
		echo '<br/>';
		echo '<br/>';
		
		get_solution('Μήκος πλυεράς ΓΑ: ',0);
				
		echo '<br/>';
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	
	//rombos
	$conn=db_connect();
	
	$resultorh=@mysql_query("SELECT * FROM rhombus where username='$username'");

	if(!$resultorh)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Ρόμβος</h3>';
	if(mysql_num_rows($resultorh)>0)
	{
		$row=mysql_fetch_row($resultorh);
		
		if($row[2]=='true')
			get_solution('Εμβαδόν: ',1);		
		else
			get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		
		if($row[3]=='true')
			get_solution('Περίμετρος: ',1);
		else
			get_solution('Περίμετρος: ',0);
	}
	else
	{		
		get_solution('Εμβαδόν: ',0);
		
		echo '<br/>';
		
		get_solution('Περίμετρος: ',0);
	}
	echo '<br/><br/>';
	
	
	
	
	//trapezio
	$conn=db_connect();
	
	$resultt=@mysql_query("SELECT * FROM trapezio where username='$username'");

	if(!$resultt)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Τραπέζιο</h3>';
	if(mysql_num_rows($resultt)>0)
	{
		$row=mysql_fetch_row($resultt);
		
		if($row[2]=='true')
			get_solution('Εμβαδόν: ',1);		
		else
			get_solution('Εμβαδόν: ',0);
	}
	else
	{		
		get_solution('Εμβαδόν: ',0);
		
	}
	echo '<br/><br/>';
	
	
	//orthogwnio trapezio
	$conn=db_connect();
	
	$resultot=@mysql_query("SELECT * FROM otrapezio where username='$username'");

	if(!$resultot)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	echo '<br/>';
	echo '<h3>Ορθογώνιο τραπέζιο</h3>';
	if(mysql_num_rows($resultot)>0)
	{
		$row=mysql_fetch_row($resultot);
		
		if($row[2]=='true')
			get_solution('Εμβαδόν: ',1);		
		else
			get_solution('Εμβαδόν: ',0);
	}
	else
	{		
		get_solution('Εμβαδόν: ',0);
		
	}
	echo '<br/><br/>';
	
	
	?>
	<table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="profil.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
	
	<?php
	
}

/***************************************************************************************************
* sunartisi gia tin ektypwsi olwn twn mathitwn mias taxis
****************************************************************************************************/
function check_progress_class($username)
{
	$username=mysql_real_escape_string($username);
	
	//elegxos gia tetragwno
	$conn=db_connect();
	
	$result=@mysql_query("SELECT school,school_level,level_section FROM users where username='$username'");
	
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
	
	//echo '<h1>Η τάξη μου!</h1>';
	
	if(mysql_num_rows($result)>0)
	{
		$row=mysql_fetch_row($result);
		
		$conn=db_connect();
	
		$result1=@mysql_query("SELECT * FROM users where user_type='S' AND school='$row[0]' AND school_level='$row[1]' AND level_section='$row[2]'");
	
		if(!$result1)
			throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
		mysql_close($conn);
		
		if(mysql_num_rows($result1)>0)
		{
			$num_result=mysql_num_rows($result1);
		
			for($j=1; $j<$num_result+1; $j++)
			{
				$row1=mysql_fetch_row($result1);
				
				for($i=0; $i<count($row1); $i=$i+10)
				{
					echo '<img src="images/student.png" alt="" /><br/>';
					echo 'Username: ';
					echo $row1[$i];
					echo '<br/>';
					echo '<br/>';
					echo 'Όνομα: ';
					echo $row1[$i+1];
					echo '<br/>';
					echo '<br/>';
					echo 'Επώνυμο: ';
					echo $row1[$i+2];
					echo '<br/><br/>';
					echo "<a href=\"student_mark.php?student=$row1[$i]\">Εμφάνιση</a>";
				}
				echo '<br/><br/>';
				echo '<br/><br/>';
			}
		}
		else
		{
			echo 'Δεν υπάρχουν αποθηκευμένα στοιχεία που να ταιρίαζουν στα κριτήρια αναζήτησης';
		}
	}
	
		?>
	<table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="profil.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
	
	<?php
	
}


/***************************************************************************************************
* sunartisi gia tin ektypwsi olwn twn xristwn tou sustimatos
****************************************************************************************************/
function get_all_users()
{
	//elegxos gia tetragwno
	$conn=db_connect();
	
	$result=@mysql_query("SELECT * FROM users");
	
	if(!$result)
		throw new Exception('Συνέβη κάποιο σφάλμα κατά τον έλεγχο στη βάση δεδομένων');
		
	mysql_close($conn);
		
	if(mysql_num_rows($result)>0)
	{
		$num_result=mysql_num_rows($result);
		
		for($j=1; $j<$num_result+1; $j++)
		{
			$row1=mysql_fetch_row($result);
				
				for($i=0; $i<count($row1); $i=$i+10)
				{
					echo 'Username: ';
					echo $row1[$i];
					echo '<br/>';
					echo 'Όνομα: ';
					echo $row1[$i+1];
					echo '<br/>';
					echo 'Επώνυμο: ';
					echo $row1[$i+2];
					echo '<br/><br/>';
					echo "<a href=\"editUsers.php?username=$row1[$i]\">Εμφάνηση</a>";
				}
				echo '<br/><br/>';
			}
		}
	else
	{
		echo 'Δεν υπάρχει κανένας αποθηεκυμένος χρήστης!';
	}
}
?> 