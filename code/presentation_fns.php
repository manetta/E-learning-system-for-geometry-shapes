<?php

//arxeio pou periexei tis synartiseis gia tis formes toy systimatos

/**********************************************************************
* synartisi provolis tis formas syndesis toy xristi
**********************************************************************/
function dispLoginForm()
{
?>

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><img src="images/lock.png" alt="" /></td>
					</tr>
					<tr>					
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Είσαι μέλος; Συνδέσου εδώ!</td>
					</tr>
					<tr>
						<td align="left" valign="top" class="text">
							<form id="login_form" name="login_form" method="post" action="member.php" style="margin:auto;">
								<table width="80%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Όνομα χρήστη:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="username" id="username" type="text" class="input3" style="width:250px; height:15px;" /></td>
									</tr>
									<tr>
										<td align="left" valign="middle" class="text">Κωδικός πρόσβασης:</td>
										<td colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="password" id="password" type="password" class="input3" style="width:250px; height:15px;" /></td>
									</tr>
									<tr>
										<td align="left" valign="top">&nbsp;</td>
										<td colspan="2" align="left" valign="top">
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td width="72%" valign="middle"><input type="image" name="fged" src="images/submit.jpg" onclick="loginCheck();" style="border:none;" /></td>
												</tr><br/>
											</table><br/>
										</td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<td>
			<a href="register.php">Δεν είσαι μέλος; Κάνε εγγραφή τώρα!</a>
		</td>
	</table>
<?php
}


/**********************************************************************
* synartisi provolis tis kefalidas tis selidas
**********************************************************************/
function dispHeader()
{
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Τα γεωμετρικά σχήματα</title>
	<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
	<script type="text/javascript" src="my_js.js"></script>
	<link href="css.css" rel="stylesheet" type="text/css" />
	
	
	<script language="javascript" type="text/javascript">
		function playSound(soundfile) 
		{
			document.getElementById("dummy").innerHTML="<embed src=\""+soundfile+"\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
		}
	</script>
	

	</head>
	

<?php
}

/**********************************************************************
* synartisi provolis tou swmatos tis selidas
**********************************************************************/
function dispBody()
{
?>
<body>

	<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
		<tr>
			<td colspan="2" align="left" valign="top">
				<table width="780" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="506" align="left" valign="top">
							<table width="506" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td align="left" valign="top" style="padding-top:13px; padding-left:17px; padding-bottom:11px;"><a href="main.php"><img src="images/index_03.png" alt="" width="357" height="60" border="0" /></a></td>
								</tr>
								<tr>
									<td align="left" valign="top">
										<table width="506" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td width="180" align="left" valign="top"><img src="images/index_08.gif" width="180" height="202" alt="" /></td>
												<td width="326" align="left" valign="top"><img src="images/index_09.gif" width="326" height="202" alt="" /></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
		
		
		
		<?php
		if(isset($_SESSION['valid_user']))
			$val_user=$_SESSION['valid_user'];
		?>
		
						<td width="274" align="left" valign="top" style="padding-top:110px; background-image:url(images/index_06.gif); background-repeat:no-repeat; background-position:bottom; padding-left:39px;">
							<table width="116" border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td align="left" valign="top" class="menu"><a href="main.php">Αρχική</a></td>
								</tr>
		  <?php	
		if(!isset($val_user))
		{
		?>
								<tr>
									<td align="left" valign="top" class="menu" style="border:none;"><a href="login.php">Σύνδεση</a></td>
								</tr>
		  <?php
		  }
		  else
		  {
		  ?>
								<tr>
									<td align="left" valign="top" class="menu"><a href="theory.php">Ας μάθουμε τα γεωμετρικά σμήματα!</a></td>
								</tr>
								<tr>
									<td align="left" valign="top" class="menu"><a href="draw.php">Ζωγράφισε τα γεωμετρικά σμήματα!</a></td>
								</tr>
								<tr>
									<td align="left" valign="top" class="menu"><a href="profil.php">Προφιλ</a></td>
								</tr>
								<tr>
									<td align="left" valign="top" class="menu" style="border:none;"><a href="logout.php">Αποσύνδεση</a></td>
								</tr>
		  <?php
		  }
		?>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="left" valign="top" style="padding-top:18px; padding-bottom:22px; padding-left:20px;">
				<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>


<?php
}

/**********************************************************************
* synartisi kleisimatos tou swmatos tis selidas
**********************************************************************/
function dispCloseBody()
{
	if(isset($_SESSION['valid_user']))
		$val_user=$_SESSION['valid_user'];
?>
	<tr>
    <td width="263" align="center" valign="top" bgcolor="#616C7C" class="copyright" style="border-right:1px solid #FFFFFF; padding-top:21px;">Copyright &copy; 2012 Σχεδιασμός Μανέττα Νικολίτσα<br /> All Rights Reserved.</td>
    <td width="517" align="center" valign="top" bgcolor="#F1F1F3" style="background-image:url(images/index_69.gif); background-repeat:repeat-x; background-position:top; padding-top:26px; padding-bottom:17px;">
		<?php	
		if(!isset($val_user))
		{
		?>
			<pre class="footer"><a href="main.php">Αρχική</a> | <a href="login.php">Σύνδεση</a></pre></td>
		<?php
		}
		else
		{
		?>
			<pre class="footer"><a href="main.php">Αρχική</a> | <a href="theory.php">Μαθαίνω τα γεωμετρικά σχήματα</a> | <a href="draw.php">Ζωγραφίζω τα γεωμετρικά σχήματα</a> | <br /><a href="profil.php">Προφίλ</a> | <a href="login.php">Σύνδεση</a></pre></td>
		<?php
		}
		?>
	</tr>
			</table>
</table>
</body>

</html>
<?php	
}


/**********************************************************************
* synartisi gia emfanisi tis arxikis selidas
**********************************************************************/
function dispMain()
{
?>

<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="center" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><img  src="images/dot.png" alt="error"/></td>
					</tr>
				</table>
			</td>
		</tr>
</table>

	<font align="center" color="#A9B63D"><h2>
	Ας αναλογιστούμε την αξία <br/>των γεωμετρικών σχημάτων <br/>στην καθημερινή μας ζωή.
	<br/>
	</h2>
	<font>
	
<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="center" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><img  src="images/dot.png" alt="error"/></td>
					</tr>
				</table>
			</td>
		</tr>
</table>
	
	
	<br/>
	<br/>
	<font align="center" color="#A9B63D"><h2>
	Κάθε αντικείμενο έχει το δικό του γεωμετρικό σχήμα.
	<br/>
	</h2>
	</font>

	<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/bullet.png" alt=" "/>  </td>
			<td><h3>Τι σχήμα έχει το βιβλίο των μαθηματικών μας;</h3></td>
			<td><img src="images/mbook.png" alt=" "/>  </td>
		</tr>
		<br/>
		<tr>
			<td><img src="images/bullet.png" alt=" "/>  </td>
			<td><h3>Τι σχήμα έχει η μπάλα του ποδοσφαίρου;</h3></td>
			<td><img src="images/soccer.png" alt=" "/>  </td>
		</tr>
		<br/>
		<tr>
			<td><img src="images/bullet.png" alt=" "/>  </td>
			<td><h3>Τι σχήμα έχει ο χαρταετός που πετάμε την Καθαρά Δευτέρα;</h3></td>
			<td><img src="images/111.jpeg" alt=" "/>  </td>
		</tr>
		<tr>
			<td><img src="images/bullet.png" alt=" "/>  </td>
			<td><h3>Τι σχήμα έχει το τσίγκινο μπουκαλάκι της πορτοκαλάδας;</h3></td>
			<td><img src="images/or.png" alt=" "/>  </td>

		</tr>
	</table>

	<br/>
	<br/>
	<font align="center" ><h3>
	Αυτή η ιστοσελίδα σχεδιάστηκε γι΄ αυτό ακριβώς το λόγο. Για να δώσει τη δυνατότητα 	σε κάθε παιδί <br/>να αντιλαμβάνεται, να διαχωρίζει και να ονοματίζει σωστά τα γεωμετρικά σχήματα στην καθημερινή του ζωή. Κάθε μαθητής λοιπόν εμπλουτίζει 
	τις γνώσεις του για τον κύβο, το ορθογώνιο παραλληλόγραμμο, τον κώνο, τον κύκλο.

	</h3>
	</font>	
	
	
	
	
<?php
}


/**********************************************************************
* synartisi gia to rpofil toy xristi
**********************************************************************/
function dispProfil($type)
{
?>
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center" valign="top" class="heading" style="padding-bottom:8px;"><font align="center" color="#A9B63D"><h2>Το προφίλ μου</h2></font></td>
					</tr>
					<?php
					if($type=='S')
					{
					?>
						<tr>
							<td align="left" width="100%" valign="top" class="link" style="padding-bottom:8px;"><a href="dataUser.php"><img src="images/om_user.png" alt="error"/><font color="#A9B63D"><h3>Επεξεργασία του προφίλ μου</h3></font></a></td>
						</tr>
						<tr>
							<td align="left" width="100%" valign="top" class="link" style="padding-bottom:8px;"><a href="my_marks.php"><img src="images/book.png" alt="error"/><font color="#A9B63D"><h3>Έλεγχος της επιδόσης μου</h3></font></a></td>
						</tr>
					<?php 
					}
					else
					{
					?>
						<tr>
							<td align="left" valign="top" class="link" style="padding-bottom:8px;"><a href="dataUser.php"><img src="images/user.png" alt="error"/><font color="#A9B63D"><h3>Επεξεργασία του προφίλ μου</h3></font></a></td>
						</tr>
						<tr>
							<td align="left" valign="top" class="link" style="padding-bottom:8px;"><a href="my_marks.php"><img src="images/mark.png" alt="error"/><font color="#A9B63D"><h3>Έλεγχος της επιδόσης μου</h3></font></a></td>
						</tr>
						<tr>
							<td align="left" valign="top" class="link" style="padding-bottom:8px;"><a href="marks_class.php"><img src="images/student.png" alt="error"/><font color="#A9B63D"><h3>Έλεγχος της επιδόσης της τάξης μου</h3></font></a></td>
						</tr>
					<?php 
					}
					?>
				</table>
			</td>
		</tr>
	</table>
	
	<table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="main.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/kfm_home.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1">Αρχική</div>
			</td>
		</tr>
	</table>
	
<?php
}


/**********************************************************************
* synartisi gia emfanisi twn stoixeiwn toyu xristi
**********************************************************************/
function dispUserData($row,$row1)
{
?>

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">

				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					</br>
					<font align="center" color="#A9B63D"><h1>Επεξεργασία προφίλ</h1></font>
					</br>
					</br>
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία σύνδεσης</td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Όνομα σύνδεσης:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row[0];?></td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Email:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row[4];?></td>
					</tr>

					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία χρήστη</td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Όνομα:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row[1];?></td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Επώνυμο:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row[2];?></td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Σταθερό τηλέφωνο:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row1[1];?></td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Κινητό τηλέφωνο:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row1[2];?></td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Τύπος χρήστη:</td>
						<?php
						if($row[5]=='S')
						{
						?>
							<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;">Μαθητής</td>
						<?php
						}
						elseif($row[5]=='T')
						{
						?>
							<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;">Δάσκαλος</td>
						<?php
						}
						else
						{
						?>
							<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;">Διαχειριστής</td>
						<?php
						}
						?>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Σχολείο:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row[6];?></td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Τάξη:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row[6];?></td>
					</tr>
					<tr>
						<td width="30%" align="left" valign="middle" class="text">Τμήμα:</td>
						<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo $row[8];?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi provolis tis formas eggrafis tou xristi
**********************************************************************/

function dispRegisterForm()
{
?>

	<h2>Σελίδα εγγραφής!</h2>
	<p>Όλα τα πεδία της φόρμας είναι υποχρεωτικά για την συνδεσή σας στο σύστημα!</p>
	
	<h3>Στοιχεία χρήστη</h3>
	<form name="register_form" onsubmit="signupCheck()" action="registration.php" method="post">
		<table>
			<tr>
				<td><label>Όνομα:</label></td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td><label>Επώνυμο:</label></td>
				<td><input type="text" name="surname" id="surname"></td>
			</tr>
			<tr>
				<td><label>Όνομα χρήστη:</label></td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td><label>Κωδικός πρόσβασης:</label></td>
				<td><input type="password" name="password1" id="password1" onkeyup="strongPass();">
				<br/>
				<span id="strength"></span></td>
			</tr>
			<tr>
				<td><label>Επαλήθευση Κωδικόυ:</label></td>
				<td><input type="password" name="password2" id="password2" onkeyup="samePassRT();">
				<br/>
				<span id="same"></span></td>
			</tr>
			<tr>
				<td><label>Σχολείο:</label></td>
				<td><input type="text" name="school" id="school"></td>
			</tr>
			<tr>
				<td><label>Τάξη:</label></td>
				<td>
				<select id="level" name="level" >
				<option value=" "></option>
				<option value="Α">Α</option>
				<option value="Β">Β</option>
				<option value="Γ">Γ</option>
				<option value="Δ">Δ</option>
				<option value="Ε">Ε</option>
				<option value="ΣΤ">ΣΤ</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><label>Τμήμα:<br/>(Αν υπάρχει μόνο ένα τμήμα συμπληρώστε 0)</label></td>
				
				<td><input type="text" name="level_section" id="level_section"></td>
			</tr>
		</table>
			<h3>Στοιχεία επικοινωνίας</h3>
		<table>
			<tr>
				<td><label>e-mail:</label></td>
				<td><input type="text" name="email" id="email" onkeyup="checkEmailRT()">
				</br>
				<span id="right"></span></td>
			</tr>
			<tr>
				<td><label>Σταθερό τηλέφωνο:</label></td>
				<td><input type="text" name="home" id="home" onkeyup="RTisNumeric()">
				</br>
				<span id="shome"></span></td>
			</tr>
			<tr>
				<td><label>Κινητό τηλέφωνο:</label></td>
				<td><input type="text" name="mobile" id="mobile" onkeyup="RTisNumericM()"></br>
				<span id="smobile"></span></td></td>
			</tr>
				
		</table>
		</br>
		<input type="submit" value="Εγγραφή">
		
	</form>

<?php
}



/**********************************************************************
* synartisi gia tin aposyndesi toy xristi apo to systima
**********************************************************************/
function dispLogoutForm()
{
?>
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center" valign="top" class="heading" style="padding-bottom:8px;"><font color="#A9B63D"><h2>Αποσύνδεση</h2></font></td>
					</tr>
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;"><font>Θέλετε να αποσυνδεθείται από το σύστημα;</font></td>
					</tr>
					<tr>
						<td align="left" valign="top" class="text">
							<form id="login_form" name="LogoutForm" method="post" action="exit.php" style="margin:auto;">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="left" valign="top">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Αποσύνδεση"></td>
								</tr><br/>
							</table><br/>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
	<table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="main.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/kfm_home.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1">Αρχική</div>
			</td>
		</tr>
	</table>
			
<?php	
}







/**********************************************************************
* synartisi provolis tis formas syndesis toy xristi
**********************************************************************/
/*
function dispLoginForm()
{
?>

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Είσαι μέλος; Συνδέσου εδώ!</td>
					</tr>
					<tr>
						<td align="left" valign="top" class="text">
							<form id="login_form" name="login_form" method="post" action="member.php" style="margin:auto;">
								<table width="80%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Όνομα χρήστη:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="username" id="username" type="text" class="input3" style="width:250px; height:15px;" /></td>
									</tr>
									<tr>
										<td align="left" valign="middle" class="text">Κωδικός πρόσβασης:</td>
										<td colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="password" id="password" type="password" class="input3" style="width:250px; height:15px;" /></td>
									</tr>
									<tr>
										<td align="left" valign="top">&nbsp;</td>
										<td colspan="2" align="left" valign="top">
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td width="72%" valign="middle"><input type="image" name="fged" src="images/submit.gif" onclick="loginCheck();" style="border:none;" /></td>
												</tr><br/>
											</table><br/>
										</td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<td>
			<a href="register.php">Δεν είσαι μέλος; Κάνε εγγραφή τώρα!</a>
		</td>
	</table>
<?php
}
*/


/**********************************************************************
* synartisi me tis formes allagis stoixeiwn xristi
**********************************************************************/
function dispModifyDataForm()
{
?>
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						</br>
						</br>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;"><font align="center" color="#A9B63D"><h2>Τροποποίηση των στοιχείων του χρήστη</h2></font></td>
					</tr>
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;"><img src="images/key.png" alt=" "/>Αλλαγή κωδικού</td>
					</tr>
					<tr>
						<td align="left" valign="top" class="text">
							<form name="change_pass" action="editPass.php" method="post">
								<table width="80%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Παλιός κωδικός:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="old_pass" name="old_pass" type="password" class="input3" style="width:250px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Νέος κωδικός:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="password1" name="new_pass" type="password" class="input3" style="width:250px; height:15px;" onkeyup="strongPass()" /></td>
									</tr>
									<tr>
										<td></td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><span id="strength"></span></td>
									</tr>
									<tr>	
										<td width="30%" align="left" valign="middle" class="text">Επαλήθευση νέου κωδικού:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="password2" name="new_pass1" type="password" class="input3" style="width:250px; height:15px;" onkeyup="samePassRT();"/></td>
									</tr>
									<tr>
										<td></td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><span id="same"></span></td>
									</tr>
									<tr>
										<td align="left" valign="top">&nbsp;</td>
										<td colspan="2" align="left" valign="top">
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td width="72%" valign="middle"><input type="image" name="fged" src="images/apostolh_stoixeiwn.jpg" onClick="checkModPass();" style="border:none;" /></td>
												</tr><br/>
											</table><br/>
										</td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
				
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;"><img src="images/hp_mail.png" alt=" "/> Αλλαγή e-mail</td>
					</tr>
					<tr>
						<td align="left" valign="top" class="text">
							<form name="change_email" action="editEmail.php" method="post">
								<table width="80%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Νέο e-mail:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="email" name="new_email" type="text"  class="input3" onkeyup="checkEmailRT();" style="width:250px; height:15px;" /></td>
									</tr>
									<tr>
										<td></td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><span id="right"></span></td>
									</tr>
									<tr>
										<td align="left" valign="top">&nbsp;</td>
										<td colspan="2" align="left" valign="top">
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td width="72%" valign="middle"><input type="image" name="fged" src="images/apostolh_stoixeiwn.jpg" onClick="checkModMail();" style="border:none;" /></td>
												</tr><br/>
											</table><br/>
										</td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
					
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;"><img src="images/contact.png" alt=" "/>Αλαγή τηλεφώνου:</td>
					</tr>
					<tr>
						<td align="left" valign="top" class="text">
							<form name="change_phones" action="editPhones.php" method="post">
								<table width="80%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Σταθερό τηλέφωνο:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="home" name="new_phone" type="text"  onkeyup="RTisNumeric();" class="input3" style="width:250px; height:15px;" /></td>
										
									</tr>
									<tr>
										<td></td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><span id="shome"></span></td>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Κινητό τηλέφωνο:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input  id="mobile" name="new_mobile" type="text"  onkeyup="RTisNumericM();" class="input3" style="width:250px; height:15px;" /></td>
										<span id="smobile"></span>
									</tr>
									<tr>
										<td></td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><span id="smobile"></span></td>
									</tr>
									<tr>
										<td align="left" valign="top">&nbsp;</td>
										<td colspan="2" align="left" valign="top">
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td width="72%" valign="middle"><input type="image" name="fged" src="images/apostolh_stoixeiwn.jpg" onClick="checkModTel();" style="border:none;" /></td>
												</tr><br/>
											</table><br/>
										</td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
					
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;"><img src="images/school.png" alt=" "/> Αλλαγή σχολείου:</td>
					</tr>
					<tr>
						<td align="left" valign="top" class="text">
							<form name="change_school" action="editSchool.php" method="post">
								<table width="80%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Σχολείο:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="school" name="school" type="text"  class="input3" style="width:250px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Τάξη:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;">	
											<select name="level" id="level">
												<option value=" "></option>
												<option value="Α">Α</option>
												<option value="Β">Β</option>
												<option value="Γ">Γ</option>
												<option value="Δ">Δ</option>
												<option value="Ε">Ε</option>
												<option value="ΣΤ">ΣΤ</option>
											</select>
										</td>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Τμήμα:</td>
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="level_section" name="level_section" type="text"  class="input3" style="width:250px; height:15px;" /></td>
									</tr>
									<tr>
										<td align="left" valign="top">&nbsp;</td>
										<td colspan="2" align="left" valign="top">
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td width="72%" valign="middle"><input type="image" name="fged" src="images/apostolh_stoixeiwn.jpg" onClick="checkModSch();" style="border:none;" /></td>
												</tr><br/>
											</table><br/>
										</td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
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


/**********************************************************************
* synartisi gia tin epilogi tou sximatos pou tha dimiourgithei
**********************************************************************/
function dispShapes($x)
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
?>
	 
	<font align="center" color="#A9B63D"><h2>Ζωγράφισε τα γεωμετρικά σχήματα!</h2></font>
	<br>
	Εδώ μπορείται να ζωγραφίσετε τα γεωμετρικα σχήματα. 
	<br/><br>
	Επιλέξε ένα γεωμετρικό σχήμα από την ακόλουθη λίστα και θα μεταφερθεί στην αντίστοιχη σελίδα.<br/><br/>
	
	<table width="300" 	 border="0" align="left" cellpadding="0" cellspacing="0">
	
		<?php //euthugrammo tmima?>
		<tr>
			<td align="center">
				</br>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<line x1="10" y1="10" x2="50" y2="50"  style="stroke:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>); stroke-width:7"/>
				</svg>
			</td>
			<td><a href="straight.php"><font color="#A9B63D"><h3>Ζωγραφίζω το ευθύγραμμο τμήμα</h3></font></a></td>
		</tr>
	
	
	<?php //tetragwno?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<rect x="0" y="0" width="50" height="50"  style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		
		<td><a href="rect.php"><font color="#A9B63D"><h3>Ζωγραφίζω το τετράγωνο</h3></font></a></td>
	</tr>
	
	<?php //parallilogrammo?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<rect x="0" y="0" width="90" height="50"  style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="rect1.php"><font color="#A9B63D"><h3>Ζωγραφίζω τα παραλληλόγραμμα</h3></font></a></td>
	</tr>
	
	<?php //kuklos?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<circle cx="30" cy="30" r="28" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="circle.php"><font color="#A9B63D"><h3>Ζωγραφίζω τον κύκλο</h3></font></a></td>
	</tr>
	
	<?php //ellipsi?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<ellipse cx="30" cy="30" rx="28" ry="15" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="ellipse.php"><font color="#A9B63D"><h3>Ζωγραφίζω την έλλειψη</h3></font></a></td>
	</tr>

	<?php //trigwna?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<path d="M 15 10 L 5 75 L 50 50 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="triangle.php"><font color="#A9B63D"><h3>Ζωγραφίζω τα τρίγωνα</h3></font></a></td>
	</tr>
	
	<?php //rombos
	
	$x=25;
	$y=20;
	$degrees=80;
	$length=30;

		
	//deutero simeio
	$x2=$x+$length;
	$y2=$y+$length;

	$x3=$x2+$length;
	$y3=$y2+$length;
		
	//metatropi apo moires se aktinia
	$a=$degrees*3.14/180;
		
	//trito simeio
	$xx=cos($a)*($x2-$x)-sin($a)*($y2-$y)+$x;
	$yy=sin($a)*($x2-$x)+cos($a)*($y2-$y)+$y;
		
	//tetarto simeio
	$xx1=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
	$yy1=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
	
	?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<path d="M <?php echo $x?> <?php echo $y?> L <?php echo $x2?> <?php echo $y2?> L <?php echo $xx1?> <?php echo $yy1?> L <?php echo $xx?> <?php echo $yy?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/
			</svg>
		</td>
		<td><a href="rhombus.php"><font color="#A9B63D"><h3>Ζωγραφίζω τον ρόμβο</h3></font></a></td>
	</tr>
	
	<?php //trapezia>?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<path d="M 20 10 L 45 10 L 70 50 L 5 50 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="trapezio.php"><font color="#A9B63D"><h3>Ζωγραφίζω τα τραπέζια</h3></font></a></td>
	</tr>
	
	
</table>


<?php
	
	 /*//dimiourgia tetragwnou ?>
	<form name="straight" action="straight.php" method="post">
	<input type="submit" value="Ευθύγραμμο τμήμα">
	</form>
	
	<?php //dimiourgia tetragwnou ?>
	<form name="rect" action="rect.php" method="post">
	<input type="submit" value="Τετράγωνο">
	</form>
	
	<?php //dimiourgia parallilogrammou ?>
	<form name="rect1" action="rect1.php" method="post">
	<input type="submit" value="Παραλληλόγραμμο">
	<?php if($x==2) dispKindRect1();?>
	</form>
	
	
	<?php //dimiourgia kuklou ?>
	<form name="circle" action="circle.php" method="post">
	<input type="submit" value="Κύκλος">
	</form>
	
	<?php //dimiourgia ellipsis ?>
	<form name="ellipse" action="ellipse.php" method="post">
	<input type="submit" value="Έλλειψη">
	</form>
	
	<?php //dimiourgia trigwnou ?>
	<form name="triangle" action="triangle.php" method="post">
	<input type="submit" value="Τρίγωνο">
	<?php if($x==1) dispKindTriangle();?>
	</form>
	
	<form name="rhombus" action="rhombus.php" method="post">
	<input type="submit" value="Ρόμβος">
	</form>
	
	<form name="trapezio" action="trapezio.php" method="post">
	<input type="submit" value="Τραπέζιο">
	<?php if($x==4) dispKindTrapezio();?>
	</form>

	<?php 
*/	
}



/**********************************************************************
* synartisi gia tin epilogi tou typou tou trigwnou
**********************************************************************/
function dispKindTriangle()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
?>

	<font align="center" color="#A9B63D"><h2>Τρίγωνο</h2></font>

	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0">

		<?php //isopleuro trigwno
		$x=30;
		$y=30;
		$length=45;
		
		//deutero simeio
		$x2=$x+$length;
		$y2=$y+$length;
		
		//trito simeio
		$x3=$x2+$length;
		$y3=$y2+$length;
		
		$a=120*3.14/180;
		$xx=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
		$yy=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
		
		?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>";
				</svg>
			</td>
			<td><a href="isopl.php"><font color="#A9B63D"><h3>Ζωγραφίζω το ισόπλευρο τρίγωνο</font></h3></a></td>
		</tr>
				
		<?php 
		$x=40;
		$y=40;
		$length=35;
		$moires=45;
		
		//deutero simeio
		$x2=$x+$length;
		$y2=$y+$length;
		
		//trito simeio
		$m=180-2*$moires;
		$pl=sin($m/2*pi()/180)*$length;
		$x3=$x2+$pl*2;
		$y3=$y2+$pl*2;
		
		$a=(180-$moires)*3.14/180;
		$xx=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
		$yy=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
		
		
		
		//isoskeles trigwno?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>";
				</svg>
			</td>
			<td><a href="isosk.php"><font color="#A9B63D"><h3>Ζωγραφίζω το ισοσκελές τρίγωνο</font></h3></a></td>
		</tr>
		
		<?php //skalino trigwno?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 3 5 L 60 50 L 25 95 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="skal.php"><font color="#A9B63D"><h3>Ζωγραφίζω το σκαλινό τρίγωνο</font></h3></a></td>
		</tr>
		
		<?php //orthogwnio trigwno?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 10 10 L 10 90 L 50 90 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="orth.php"><font color="#A9B63D"><h3>Ζωγραφίζω το ορθογώνιο τρίγωνο</font></h3></a></td>
		</tr>
		
		<?php //orthogwnio isoskeles trigwno?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 10 10 L 10 70 L 70 70 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="orth_iso.php"><font color="#A9B63D"><h3>Ζωγραφίζω το ορθογώνιο ισοσκελές τρίγωνο</font></h3></a></td>
		</tr>
		
	</table>
	
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr/>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>	
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>			
			<td>
				<a href="draw.php">
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


/**********************************************************************
* synartisi gia tin epilogi tou typou tou parallilogrammou
**********************************************************************/
function dispKindRect1()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	
	
	$x=35;
	$y=30;
	$length=50;
	$width=50;

	//deutero simeio
	$x1=$x+$length;
		
	//trito simeio
	$y1=$y+$width;	
		
	$a=(180-45-90)*3.14/180;
	$xx=cos($a)*($x1-$x1)-sin($a)*($y1-$y)+$x1;
	$yy=sin($a)*($x1-$x1)+cos($a)*($y1-$y)+$y;
		
	//tetarto simeio
	$x3=$xx-$length;
?>

	<font align="center" color="#A9B63D"><h2>Παραλληλόγραμμο</h2></font>
	</br>

	
	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
		<?php //orthogwnio parallilogrammo?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<rect x="0" y="0" width="90" height="50"  style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="orth_paral.php"><font color="#A9B63D"><h3>Ζωγραφίζω το ορθογώνιο παραλληλόγραμμο</font></h3></a></td>
		</tr>
		<?php //plagio parallilogrammo?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $xx;?> <?php echo $yy;?> L <?php echo $x3;?> <?php echo $yy;?> Z\" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>

				</svg>
			</td>
			<td><a href="plag_paral.php"><font color="#A9B63D"><h3>Ζωγραφίζω το πλάγιο παραλληλόγραμμο</font></h3></a></td>
		</tr>
	</table>
	
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr/>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>	
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>			
			<td>
				<a href="draw.php">
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



/**********************************************************************
* synartisi gia tin epilogi tou typou tou parallilogrammou(theoria)
**********************************************************************/
function dispKindTHRect1()
{

	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	
	
	$x=35;
	$y=30;
	$length=50;
	$width=50;

	//deutero simeio
	$x1=$x+$length;
		
	//trito simeio
	$y1=$y+$width;	
		
	$a=(180-45-90)*3.14/180;
	$xx=cos($a)*($x1-$x1)-sin($a)*($y1-$y)+$x1;
	$yy=sin($a)*($x1-$x1)+cos($a)*($y1-$y)+$y;
		
	//tetarto simeio
	$x3=$xx-$length;
?>

	<font align="center" color="#A9B63D"><h2>Μαθαίνω το παραλληλόγραμμο</h2></font>
	</br>

	<b>Παραλληλόγραμμο</b> είναι ένα τετράπλευρο που έχει τις απέναντι πλευρές του παράλληλες.<br/><br/>
	Παρακάτω έχουμε τα δύο είδη των παραλληλογράμμων.  Επιλέξε αυτό που επιθυμείς να μελετήσεις.<br/><br/>
	
	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
		<?php //orthogwnio parallilogrammo?>
		<tr>
			<td align="center">
			</br>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<rect x="0" y="0" width="90" height="50"  style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="th_orect1.php"><font color="#A9B63D"><h3>Μαθαίνω το ορθογώνιο παραλληλόγραμμο</font></h3></a></td>
		</tr>
		<?php //plagio parallilogrammo?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $xx;?> <?php echo $yy;?> L <?php echo $x3;?> <?php echo $yy;?> Z\" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>

				</svg>
			</td>
			<td><a href="th_prect1.php"><font color="#A9B63D"><h3>Μαθαίνω το πλάγιο παραλληλόγραμμο</font></h3></a></td>
		</tr>
	</table>
	
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr/>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>	
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>			
			<td>
				<a href="theory.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Θεωρία </div>
			</td>
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi gia tin epilogi tou typou tou kanonikou polugwnou
**********************************************************************/
function dispKindPlg($x)
{
?>
	<br/><br/>
	<a href="k_plg.php">Κανονικά πολύγωνα</a>
	<br/><br/>
	<?php //if($x==31) dispKindKPlg();?>
	<br/><br/>
	<a href="t_plg.php">Τυχαία πολύγωνα</a>

<?php
}

/**********************************************************************
* synartisi gia tin epilogi tou typou tou kanonikou polugwnou
**********************************************************************/
/*
function dispKindKPlg()
{
?>
	<br/><br/>
	<a href="k5plg.php">Κανονικά πεντάγωνο</a>
	<br/><br/>
	<a href="k6plg.php">Κανονικά εξάγωνο</a>
	<br/><br/>
	<a href="k7plg.php">Κανονικά εφτάγωνο</a>
	<br/><br/>
	<a href="k8plg.php">Κανονικά οκτάγωνο</a>
	

<?php
}
*/


/**********************************************************************
* synartisi gia tin epilogi tou typou tou trigwnou
**********************************************************************/
function dispKindTrapezio()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
?>

	<font align="center" color="#A9B63D"><h2>Τραπέζιο</h2></font>

	<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">

		<?php //trapezia>?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 20 10 L 45 10 L 70 50 L 5 50 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="atrapezio.php"><font color="#A9B63D"><h3>Μαθαίνω τo τραπέζιο</font></h3></a></td>
		</tr>
		
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 20 10 L 65 10 L 90 50 L 20 50 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="orth_trap.php"><font color="#A9B63D"><h3>Μαθαίνω τo ορθογώνιο τραπέζιο</font></h3></a></td>
		</tr>
	</table>
	
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr/>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>	
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>			
			<td>
				<a href="theory.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Θεωρία </div>
			</td>
		</tr>
	</table>
<?php
	//<--!a href="iso_trap.php">Ισοσκελές τραπέζιο</a>


}


/**********************************************************************
* synartisi gia tin provoli tou plaisiou pou tha zwgrafisei o xristis
**********************************************************************/

function dispSVGViewbox($x)
{
?>
	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0"  align="center">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="top" class="text">
<?php
if($x!=5&&$x!=0)
{
	if($x==1)
	{
?>
	<?php //dimiourgia euthigrammou tmimatos ?>
							<form name="pointform" action="draw_rect.php" method="post">						
<?php 
	}
	elseif($x==21)
	{
?>
							<form name="pointform" action="draw_rect1.php" method="post">
<?php 
	}
	elseif($x==22)
	{
?>
							<form name="pointform" action="draw_rect11.php" method="post">
<?php 
	}
	elseif($x==3)
	{
?>
							<form name="pointform" action="draw_circle.php" method="post">	
<?php 
	}
	elseif($x==4)
	{
?>
							<form name="pointform" action="draw_ellipse.php" method="post">
<?php
	}
	elseif($x==51)
	{
?>
							<form name="pointform" action="draw_triangle_ispl.php" method="post">
<?php
	}
	elseif($x==52)
	{
?>
							<form name="pointform" action="draw_triangle_isosk.php" method="post">
<?php
	}
	
	elseif($x==54)
	{
?>
							<form name="pointform" action="draw_triangle_orth.php" method="post">
<?php
	}
	
	elseif($x==55)
	{
?>
							<form name="pointform" action="draw_triangle_orth_isk.php" method="post">
<?php
	}
	elseif($x==6)
	{
?>
							<form name="pointform" action="draw_rhombus.php" method="post">
<?php
	}
	elseif($x==71)
	{
?>
							<form name="pointform" action="draw_k5plg.php" method="post">
<?php
	}
	elseif($x==8)
	{
?>
							<form name="pointform" action="draw_trapezio.php" method="post">
<?php
	}
	elseif($x==81)
	{
?>
							<form name="pointform" action="draw_orth_trapezio.php" method="post">
<?php
	}
	elseif($x==82)
	{
?>	
							<form name="pointform" action="draw_iso_trapezio.php" method="post">
<?php
	}
	if($x!=2)
	{
?>								
								<table width="100%" border="0" cellpadding="0" cellspacing="0">
									
									<tr>
										<div id="pointer_div" onclick="point_it(event)">
										<span id="dummy"></span>
										<img src="images/blackboard.jpg" width="575" height="449" onclick="playSound('sounds/beep.mp3');">
										<img src="point.gif" id="cross" style="position:relative;visibility:hidden;z-index:2;">
										</div>
									</tr>
									<br/>
									
									
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Σημείο X:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="form_x" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Σημείο Y:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="form_y" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>	
									
			
<?php
	}
	if($x==0)
	{
?>		
									
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος ευθύγραμμου τμήματος:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
										
									<tr>
										<td width="50%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Δημιουργία"></td>
									</tr>
							
<?php
	}
	elseif($x==1)
	{
?>		
									<tr>
										<td width="70%" align="left" valign="middle" class="text">Μήκος πλευρών:</td>
										<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									
<?php
	}	
	
	if($x==21)
	{
?>	
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος πλευρών:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Πλάτος πλευρών:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="width" type="text" id="width" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>	
<?php
	}
	
	if($x==22)
	{
?>	
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Πλάτος:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="width" type="text" id="width" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>	
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Γωνία μεταξύ πλάγιων πλευρών:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="gonia" type="text" id="gonia" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									
<?php
	}
	
	if($x==3)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Ακτίνα κύκλου:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="radius" type="text" id="radius" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>	
									
	<?php
	}
	
	if($x==4)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Ακτίνα άξονα Χ:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="radius_x" type="text" id="radius_x" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Ακτίνα άξονα Υ:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="radius_y" type="text" id="radius_y" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	
	if($x==51)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	
	if($x==52)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Προσκείμενη γωνίας:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="moires" type="text" id="moires" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	
	if($x==54)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος πρώτης κάθετης πλευράς:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length1" type="text" id="length1" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος δεύτερης κάθετης πλευράς:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length2" type="text" id="length2" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	
	if($x==55)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος κάθετων πλευρών:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	
	if($x==6)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος πλευρών:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	
	if($x==71)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Μήκος πλευρών:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	
	if($x==8)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Βάση μικρή:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="mibase" type="text" id="mibase" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Βάση μεγάλη:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="mebase" type="text" id="mebase" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Ύψος:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="height" type="text" id="height" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	
	if($x==81)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Βάση μικρή:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="mibase" type="text" id="mibase" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Βάση μεγάλη:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="mebase" type="text" id="mebase" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Ύψος:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="height" type="text" id="height" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	if($x==82)
	{
	?>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Βάση μικρή:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="mibase" type="text" id="mibase" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Βάση μεγάλη:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="mebase" type="text" id="mebase" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
									<tr>
										<td width="80%" align="left" valign="middle" class="text">Ύψος:</td>
										<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="height" type="text" id="height" class="input3" size="4" style="width:40px; height:15px;" /></td>
									</tr>
	<?php
	}
	?>

									
<?php
}
elseif($x==5)
{
?>						
							<form name="pointform" action="draw_triangle.php" method="post">
								<table width="90%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<div id="pointer_div" onclick="point_it(event)">
										<span id="dummy"></span>
										<img src="images/blackboard.jpg" width="575" height="449" onclick="playSound('sounds/beep.mp3');">
										<img src="point.gif" id="cross" style="position:relative;visibility:hidden;z-index:2;">
										</div>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Πρώτο σημείο:</td>
										<tr>
											<td width="80%" align="left" valign="middle" class="text">X:</td>
											<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="form_x1" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>	
										<tr>
											<td width="80%" align="left" valign="middle" class="text">Y:</td>
											<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="form_y1" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Δεύτερο σημείο:</td>
										<tr>
											<td width="80%" align="left" valign="middle" class="text">X:</td>
											<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="form_x2" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>	
										<tr>
											<td width="80%" align="left" valign="middle" class="text">Y:</td>
											<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="form_y2" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Τρίτο σημείο:</td>
										<tr>
											<td width="80%" align="left" valign="middle" class="text">X:</td>
											<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="form_x3" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>	
										<tr>
											<td width="80%" align="left" valign="middle" class="text">Y:</td>
											<td width="20%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="form_y3" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>
									</tr>
							
		
	<script type="text/javascript">
	<!--

	var myImg = document.getElementById("pointer_div");
	myImg.onmousedown = GetCoordinates; 
	//-->
	</script>

<?php
}
else
{
?>
							<form name="pointform" action="draw_straight.php" method="post">
								<table width="90%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<div id="pointer_div" onclick="point_it(event)">
										<span id="dummy"></span>
										<img src="images/blackboard.jpg" width="575" height="449" onclick="playSound('sounds/beep.mp3');">
										<img src="point.gif" id="cross" style="position:relative;visibility:hidden;z-index:2;">
										</div>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Πρώτο σημείο:</td>
										
										<tr>
											<td align="left" valign="top">&nbsp;</td>
											<td width="70%" align="left" valign="middle" class="text">X:</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="x1" name="form_x1" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>	
										<tr>
											<td align="left" valign="top">&nbsp;</td>
											<td width="70%" align="left" valign="middle" class="text">Y:</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="y1" name="form_y1" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>
									</tr>
									<tr>
										<td width="30%" align="left" valign="middle" class="text">Δεύτερο σημείο:</td>
										<tr>
											<td align="left" valign="top">&nbsp;</td>
											<td width="70%" align="left" valign="middle" class="text">X:</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="x2" name="form_x2" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>	
										<tr>
											<td align="left" valign="top">&nbsp;</td>
											<td width="70%" align="left" valign="middle" class="text">Y:</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input id="y2" name="form_y2" type="text"  class="input3" size="4" style="width:40px; height:15px;" /></td>
										</tr>
									</tr>
		


	<script type="text/javascript">
	<!--

	var myImg = document.getElementById("pointer_div");
	myImg.onmousedown = GetCoordinates; 
	//-->
	</script>
<?php 
}
?>
	
	
									<tr>										
										<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Δημιουργία" /></td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
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


/**********************************************************************
* synartisi gia tin dimiourgia tou tetragwnou
**********************************************************************/
function dispRect($x,$y,$length,$c1,$c2,$c3,$area,$perimeter,$w)
{
	//$stroke_width=0.01*$length;
	$l=0;
	
	if(($c1==0) && ($c2==0) && ($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
		
		$x1=$x+$length;
		$y1=$y+$length;
	}
	?>
	
	
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<rect x="<?php echo $x;?>" y="<?php echo $y;?>" width="<?php echo $length;?>" height="<?php echo $length;?>"  style="fill:white; stroke:red;"/>
						<circle cx="<?php echo $x;?>" cy="<?php echo $y;?>" r="3" style="fill:red"/>
						<circle cx="<?php echo $x1;?>" cy="<?php echo $y;?>" r="3" style="fill:red"/>
						<circle cx="<?php echo $x;?>" cy="<?php echo $y1;?>" r="3" style="fill:red"/>
						<circle cx="<?php echo $x1;?>" cy="<?php echo $y1;?>" r="3" style="fill:red"/>
						</svg>
					</tr>
	
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία τετραγώνου</td>
					</tr>
					<tr>
						<td width="60%" align="left" valign="middle" class="text">Μήκος πλευράς : </td>
						<td  align="left" valign="middle" class="text"><?php echo $length;?></td>
					</tr>
					
					
					<?php //embadon tewtragwnou		?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_rect\" action=\"a_rect.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν τετραγώνου:</td>
											<td colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
													
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_rect.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν τετραγώνου:</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
								
					<?php //perimetros tewtragwnou	?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_rect\" action=\"p_rect.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος τετραγώνου: </td>
											<td colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_rect.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
							</td>
							<?php
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος τετραγώνου:</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							}
						?>
						</form>
						
					</tr>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_rect.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Μαθαίνω το τετράγωνο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
				
<?php
	dispCloseBody();
}


/**********************************************************************
* synartisi gia tin epexigisi tou euthugrammou tmimatos
**********************************************************************/
function dispExStraight()
{
	$x1=rand(0,255);
	$x2=rand(0,255);
	$x3=rand(0,255);
?>
	<table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><font color="#A9B63D"><h1>Ευθύγραμμό τμήμα</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<circle cx="8" cy="15" r= "8" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" />
					<line x1="8" y1="15" x2="95" y2="90"  style="stroke:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>); stroke-width:8"/>
					<circle cx="95" cy="90" r= "8" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" />
					<text x="95" y="90" font-family="Verdana" font-size="20" style="stroke:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)">B </text>
					<text x="8" y="15" font-family="Verdana" font-size="20" style="stroke:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)">Α </text>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε το ευθύγραμμο τμήμα αρκεί να επιλέξετε δύο σημεία στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Τα σημεία αυτά αποτελούν τα <b>άκρα του ευθύγραμμου τμήματος</b>.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο ευθύγραμμο τμήμα, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi gia tin epexigisi tou tetragwnou
**********************************************************************/
function dispExRect()
{
	$x1=rand(0,255);
	$x2=rand(0,255);
	$x3=rand(0,255);
?>
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>  Τετράγωνο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<rect x="30" y="30" width="1in" height="1in"  style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα τετράγωνο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> της πλευράς του τετραγώνου σας.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}

/**********************************************************************
* synartisi gia tin epexigisi tou orthogwniou parallilogrammou
**********************************************************************/
function dispExORect()
{
	$x1=rand(0,255);
	$x2=rand(0,255);
	$x3=rand(0,255);
?>
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>  Ορθογώνιο παραλληλόγραμμο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<rect x="30" y="30" width="2in" height="1in"  style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα ορθογώνιο παραλληλόγραμμο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> και το <b>πλάτος</b> των πλευρών του παραλληλογράμμου.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi gia tin epexigisi tou plagiou parallilogrammou
**********************************************************************/
function dispExRect11()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	
	$x=65;
	$y=25;
	$length=130;
	$width=90;

	//deutero simeio
	$x1=$x+$length;
		
	//trito simeio
	$y1=$y+$width;	
		
	$a=(180-45-90)*3.14/180;
	$xx=cos($a)*($x1-$x1)-sin($a)*($y1-$y)+$x1;
	$yy=sin($a)*($x1-$x1)+cos($a)*($y1-$y)+$y;
		
	//tetarto simeio
	$x3=$xx-$length;
?>
	<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Πλάγιο παραλληλόγραμμο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $xx;?> <?php echo $yy;?> L <?php echo $x3;?> <?php echo $yy;?>  Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα πλάγιο παραλληλόγραμμο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> και το <b>πλάτος</b> των πλευρών του πλάγιου παραλληλογράμμου <br/>καθώς και την <b>γωνία</b> που σχηματίζεται μεταξύ των πλευρών του.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi gia tin epexigisi tou kuklou
**********************************************************************/
function dispExCircle()
{
	$x1=rand(0,255);
	$x2=rand(0,255);
	$x3=rand(0,255);
?>
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Κύκλος</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<circle cx="85" cy="70" r="50" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα κύκλο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Το σημείο αυτό είναι το κέντρου του κύκλου.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να δηλώσετε την <b>ακτίνα</b> του κύκλου σας.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}

/**********************************************************************
* synartisi gia tin epexigisi tis ellipsis
**********************************************************************/
function dispExEllipse()
{
	$x1=rand(0,255);
	$x2=rand(0,255);
	$x3=rand(0,255);
?>
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Έλλειψη</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<ellipse cx="95" cy="70" rx="90" ry="60" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" />
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε μία έλλειψη πρέπει να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε τις <b>ακτίνες των δύο αξόνων</b> της έλλειψης.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}

/**********************************************************************
* synartisi gia tin epexigisi tou isopleurou trigwnou
**********************************************************************/
function dispExIspT()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	
	
	$x=20;
	$y=20;
	$length=50;
	
	//deutero simeio
	$x2=$x+$length;
	$y2=$y+$length;
	
	//trito simeio
	$x3=$x2+$length;
	$y3=$y2+$length;
	
	$a=120*3.14/180;
	$xx=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
	$yy=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
		
?>
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Ισόπλευρο τρίγωνο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>";
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα ισόπλευρο τρίγωνο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> της πλευράς του τριγώνου.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi gia tin epexigisi tou isoskelous trigwnou
**********************************************************************/
function dispExIskT()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	
	$x=70;
	$y=50;
	$length=65;
	$moires=45;
		
	//deutero simeio
	$x2=$x+$length;
	$y2=$y+$length;
		
	//trito simeio
	$m=180-2*$moires;
	$pl=sin($m/2*pi()/180)*$length;
	$x3=$x2+$pl*2;
	$y3=$y2+$pl*2;
		
	$a=(180-$moires)*3.14/180;
	$xx=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
	$yy=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
	
?>
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Ισοσκελές τρίγωνο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα ισοσκελές τρίγωνο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> των ίσων πλευρών του τριγώνου <br/>καθώς και την <b>προσκείμενη γωνία</b> του.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi gia tin epexigisi tou skalinou trigwnou
**********************************************************************/
function dispExSkal()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
?>
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Σκαλινό τρίγωνο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 33 5 L 90 50 L 3 90 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα σκαλινό τριγώνο αρκεί να επιλέξετε τρία τυχαία σημεία στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}

/**********************************************************************
* synartisi gia tin epexigisi tou orthogwniou trigwnou
**********************************************************************/
function dispExOrth()
{
	$x1=rand(0,255);
	$x2=rand(0,255);
	$x3=rand(0,255);
?>
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Ορθογώνιο τρίγωνο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M 10 10 L 10 140 L 110 140 Z"  style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα ορθογώνιο τρίγωνο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε τα <b>μήκοι</b> των δύο κάθετων πλευρών του.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}

/**********************************************************************
* synartisi gia tin epexigisi tou orthogwniou isoskelous trigwnou
**********************************************************************/
function dispExOrthIs()
{
	$x1=rand(0,255);
	$x2=rand(0,255);
	$x3=rand(0,255);
?>
	<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Ορθογώνιο ισοσκελές τρίγωνο </h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M 10 10 L 10 140 L 140 140 Z"  style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα τετράγωνο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> των κάθετων πλευρών του ορθογωνίου τριγώνου.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi gia tin epexigisi tou rombou
**********************************************************************/
function dispExRhombus()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	
	$x=100;
	$y=20;
	$degrees=80;
	$length=60;

		
	//deutero simeio
	$x2=$x+$length;
	$y2=$y+$length;

	$x3=$x2+$length;
	$y3=$y2+$length;
		
	//metatropi apo moires se aktinia
	$a=$degrees*3.14/180;
		
	//trito simeio
	$xx=cos($a)*($x2-$x)-sin($a)*($y2-$y)+$x;
	$yy=sin($a)*($x2-$x)+cos($a)*($y2-$y)+$y;
		
	//tetarto simeio
	$xx1=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
	$yy1=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
	
?>
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Ρόμβος</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx1;?> <?php echo $yy1;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα ρόμβο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> της πλευράς του.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}

/**********************************************************************
* synartisi gia tin epexigisi tou trapeziou
**********************************************************************/
function dispExATr()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
?>
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Τραπέζιο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M 45 25 L 75 25 L 105 85 L 25 85 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα τετράγωνο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> της <b>μικρής</b> και <b>μεγάλης βάσης</b> και<br/> το <b>ύψος</b> του τρπεζίου.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}

/**********************************************************************
* synartisi gia tin epexigisi tou orthogwniou trapeziou
**********************************************************************/
function dispExΟTr()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
?>
	<table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><font color="#A9B63D"><h1>Ορθογώνιο τραπέζιο</h1></font></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M 45 25 L 75 25 L 115 85 L 45 85 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<tr align="center" valign="middle" class="text"><p>Για να σχεδιάσετε ένα τετράγωνο αρκεί να επιλέξετε ένα σημείο στον παρακάτω πίνακα.</p></tr>
			<tr align="center" valign="middle" class="text"><p>Επίσης απαραίτητο είναι να γράψετε το <b>μήκος</b> της <b>μικρής</b> και <b>μεγάλης βάσης</b> και<br/> το <b>ύψος</b> του τρπεζίου.</p></tr>		
			<tr align="center" valign="middle" class="text"><p>Στη συνέχεια για να σχηματιστεί το αντίστοιχο τετράγωνο, πατήστε το κουμπί 'Δημιουργία' .</p></tr>						
		</tr>
	</table>
<?php
}


/**********************************************************************
* synartisi gia tin dimiourgia tou orthogwniou parallilogrammou
**********************************************************************/
function dispRect1($x,$y,$length,$width,$c1,$c2,$c3,$area,$perimeter,$w)
{
	$l=0;
	
	if(($c1==0) && ($c2==0) && ($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
		
		$x1=$x+$length;
		$y1=$y+$width;
	}
	?>
	
	
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<rect x="<?php echo $x;?>" y="<?php echo $y;?>" width="<?php echo $length;?>" height="<?php echo $width;?>"  style="fill:white; stroke:red"/>
						<circle cx="<?php echo $x;?>" cy="<?php echo $y;?>" r="3" style="fill:red"/>
						<text x=<?php echo $x;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">A</text>
						<circle cx="<?php echo $x1;?>" cy="<?php echo $y;?>" r="3" style="fill:red"/>
						<text x=<?php echo $x1;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">B</text>
						<circle cx="<?php echo $x;?>" cy="<?php echo $y1;?>" r="3" style="fill:red"/>
						<text x=<?php echo $x;?> y=<?php echo $y1;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
						<circle cx="<?php echo $x1;?>" cy="<?php echo $y1;?>" r="3" style="fill:red"/>
						<text x=<?php echo $x1;?> y=<?php echo $y1;?> font-family="Verdana" font-size="15" fill="red">Δ</text>
						</svg>
					</tr>
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία παραλληλογράμμου</td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Μήκος παραλληλογράμμου : </td>
						<td align="left" valign="middle" class="text"><?php echo $length;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Πλάτος παραλληλογράμμου : </td>
						<td align="left" valign="middle" class="text"><?php echo $width;?></td>
					</tr>
					
					
					<?php //embadon parallilogramou		?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_rect1\" action=\"a_rect1.php?varx=$x&vary=$y&varl=$length&varw=$width&varc1=$c1&varc2=$c2&varc3=$c3&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν παραλληλογράμμου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_rect1.php?varx=$x&vary=$y&varl=$length&varw=$width&varc1=$c1&varc2=$c2&varc3=$c3&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν παραλληλογράμμου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //perimetros parallilogramou		?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_rect\" action=\"p_rect1.php?varx=$x&vary=$y&varl=$length&varw=$width&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος παραλληλογράμμου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_rect1.php?varx=$x&vary=$y&varl=$length&varw=$width&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος παραλληλογράμμου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_orect1.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box3"> Μαθαίνω το ορθογώνιο παραλληλόγραμμο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
				
<?php
	dispCloseBody();

}


/**********************************************************************
* synartisi gia tin dimiourgia tou plagiou parallilogrammou
**********************************************************************/
function dispRect11($x,$y,$length,$width,$gonia,$c1,$c2,$c3,$area,$perimeter,$w)
{
	$l=0;
	
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	//deutero simeio
	$x1=$x+$length;
	
	//trito simeio
	$y1=$y+$width;	
	
	$a=(180-$gonia-90)*3.14/180;
	$xx=cos($a)*($x1-$x1)-sin($a)*($y1-$y)+$x1;
	$yy=sin($a)*($x1-$x1)+cos($a)*($y1-$y)+$y;
	
	//tetarto simeio
	$x3=$xx-$length;
	
	//ypsos plagiou paralilogrammou
	$height=round(sqrt(pow(($x-$x),2)+pow(($y-$yy),2)),2);
	
	$yt=($y+$yy)/2;
	?>
	

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//sximatismos plagio parallilogrammou?>
						<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $xx;?> <?php echo $yy;?> L <?php echo $x3;?> <?php echo $yy;?>  Z" style="fill:white; stroke:red"/>";
						<?php
						//ypsos plagiou parallilogrammou
						if($gonia<=90)
						{?>
							<line x1=<?php echo $x;?> y1=<?php echo $y;?> x2=<?php echo $x;?> y2=<?php echo $yy;?>  stroke="red" stroke-width:"2"/>
							<text x=<?php echo $x;?> y=<?php echo $yt;?> font-family="Verdana" font-size="8" fill="red">Ύψος</text>";
						<?php
						}
						else
						{?>
						
							<line x1=<?php echo $x1;?> y1=<?php echo $y;?> x2=<?php echo $x1;?> y2=<?php echo $yy;?>  stroke="red" stroke-width:"2"/>";
							<text x=<?php echo $x1;?> y=<?php echo $yt;?> font-family="Verdana" font-size="8" fill="red">Ύψος</text>";
						<?php
						}?>
						
						<?php//korufes parallilogrammou?>
						<text x=<?php echo $x;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">Α</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" fill="white"/>
						<text x=<?php echo $x1;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">Β</text>
						<circle cx=<?php echo $x1;?> cy=<?php echo $y;?> r="3" fill="white"/>
						<text x=<?php echo $xx;?> y=<?php echo $yy;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
						<circle cx=<?php echo $xx;?> cy=<?php echo $yy;?> r="3" fill="white"/>
						<text x=<?php echo $x3;?> y=<?php echo $yy;?> font-family="Verdana" font-size="15" fill="red">Δ</text>
						<circle cx=<?php echo $x3;?> cy=<?php echo $yy;?> r="3" fill="white"/>
						</svg>
					</tr>
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία πλάγιου παραλληλογράμμου</td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Μήκος παραλληλογράμμου : </td>
						<td width="30%" align="left" valign="middle" class="text"><?php echo $length;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Πλάτος παραλληλογράμμου : </td>
						<td align="left" valign="middle" class="text"><?php echo $width;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Ύψος παραλληλογράμμου : </td>
						<td align="left" valign="middle" class="text"><?php echo $height;?></td>
					</tr>
					
					<?php //embadon parallilogramou		?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_plrect\" action=\"a_plrect.php?varx=$x&vary=$y&varl=$length&varw=$width&varg=$gonia&varc1=$c1&varc2=$c2&varc3=$c3&varp=$perimeter&varh=$height&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν πλάγιου παραλληλογράμμου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_plrect.php?varx=$x&vary=$y&varl=$length&varw=$width&varg=$gonia&varc1=$c1&varc2=$c2&varc3=$c3&varp=$perimeter&varh=$height&vart=0\">Εμφάνιση λύσης</a>"?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν παραλληλογράμμου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_plrect\" action=\"p_plrect.php?varx=$x&vary=$y&varl=$length&varw=$width&varg=$gonia&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος παραλληλογράμμου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_plrect.php?varx=$x&vary=$y&varl=$length&varw=$width&varg=$gonia&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος παραλληλογράμμου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_prect1.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box3"> Μαθαίνω το πλάγιο παραλληλόγραμμο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
	
<?php
dispCloseBody();
}


/**********************************************************************
* synartisi gia tin dimiourgia tou parallilogrammou
**********************************************************************/
function dispCircle($x,$y,$radius,$c1,$c2,$c3,$d,$area,$perimeter,$w)
{
	if(($c1==0) &&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	$l=0;
	?>
	

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//sximatismos kuklou?>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r=<?php echo $radius;?> style="fill:white; stroke:red"/>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" style="fill:red"/>
						</svg>
					</tr>
					
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία κύκλου</td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Ακτίνα κύκλου : </td>
						<td align="left" valign="middle" class="text"><?php echo $radius;?></td>
					</tr>
					
					<?php //diametros kuklou?>
					<tr>
						<?php
							if($d==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"d_cicle\" action=\"d_circle.php?varx=$x&vary=$y&varr=$radius&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Διάμετρος κύκλου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="diameter" type="text" id="diameter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==3)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"d_circle.php?varx=$x&vary=$y&varr=$radius&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Διάμετρος κύκλου :</td>
									<td align="left" valign="middle" class="text"><?php echo $d;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					<?php //embadon kuklou		?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_circle\" action=\"a_circle.php?varx=$x&vary=$y&varr=$radius&varc1=$c1&varc2=$c2&varc3=$c3&vard=$d&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν κύκλου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_circle.php?varx=$x&vary=$y&varr=$radius&varc1=$c1&varc2=$c2&varc3=$c3&vard=$d&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν κύκλου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_circle\" action=\"p_circle.php?varx=$x&vary=$y&varr=$radius&varc1=$c1&varc2=$c2&varc3=$c3&vard=$d&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος κύκλου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_circle.php?varx=$x&vary=$y&varr=$radius&varc1=$c1&varc2=$c2&varc3=$c3&vard=$d&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος κύκλου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_circle.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Μαθαίνω τον κύκλο</div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>

<?php
dispCloseBody();
	
}

/**********************************************************************
* synartisi gia tin dimiourgia tou parallilogrammou
**********************************************************************/
function dispEllipse($x,$y,$radius_x,$radius_y,$c1,$c2,$c3,$area,$perimeter,$w)
{
	if(($c1==0) &&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	$l=0;
	?>
	

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//sximatismos ellipsis?>
						<ellipse cx=<?php echo $x;?> cy=<?php echo $y;?> rx=<?php echo $radius_x;?> ry=<?php echo $radius_y;?> style="fill:white; stroke:red"/>
						</svg>
					</tr>
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία έλλειψης</td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Ακτίνα x : </td>
						<td align="left" valign="middle" class="text"><?php echo $radius_x;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Ακτίνα y : </td>
						<td align="left" valign="middle" class="text"><?php echo $radius_y;?></td>
					</tr>
					<?php //embadon kuklou		?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_ellipse\" action=\"a_ellipse.php?varx=$x&vary=$y&varrx=$radius_x&varry=$radius_y&varc1=$c1&varc2=$c2&varc3=$c3&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν έλλειψης :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_ellipse.php?varx=$x&vary=$y&varrx=$radius_x&varry=$radius_y&varc1=$c1&varc2=$c2&varc3=$c3&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν έλλειψης :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //perimetros kuklou		?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_ellipse\" action=\"p_ellipse.php?varx=$x&vary=$y&varrx=$radius_x&varry=$radius_y&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος έλλειψης :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_ellipse.php?varx=$x&vary=$y&varrx=$radius_x&varry=$radius_y&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος έλλειψης :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_ellipse.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Μαθαίνω την έλλειψη </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
	<?php
	
dispCloseBody();	

}


/**********************************************************************
* synartisi gia tin dimiourgia skalinou trigwnou (tyxaio)
**********************************************************************/
function dispTrinagle($x1,$y1,$x2,$y2,$x3,$y3,$l1,$l2,$l3,$c1,$c2,$c3,$perimeter,$w)
{
	if(($c1==0) &&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	//korufi A
	$xa=$x1+5;
	
	//korufi Γ
	$xc=$x3-15;
	?>
	
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//sximatismos trigwnou?>						
						<path d="M <?php echo $x1;?> <?php echo $y1;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $x3;?> <?php echo $y3;?> Z" style="fill:white;stroke:red"/>						
						
						
						<?php//korufes rombou?>
						<text x=<?php echo $xa;?> y=<?php echo $y1;?> font-family="Verdana" font-size="15" fill="red">A</text>
						<circle cx=<?php echo $x1;?> cy=<?php echo $y1;?> r="3" fill="red"/>
						
						<text x=<?php echo $x2;?> y=<?php echo $y2;?> font-family="Verdana" font-size="15" fill="red">Β</text>
						<circle cx=<?php echo $x2;?> cy=<?php echo $y2;?> r="3" fill="red"/>
						
						<text x=<?php echo $x3;?> y=<?php echo $y3;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
						<circle cx=<?php echo $x3;?> cy=<?php echo $y3;?> r="3" fill="red"/>
						</svg>
					</tr>
					
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία τριγώνου</td>
					</tr>
					
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Σημείο Α : </td>
						<td align="left" valign="middle" class="text">( <?php echo $x1;?> , <?php echo $y1;?> )</td>
					</tr>
					
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Σημείο Β : </td>
						<td align="left" valign="middle" class="text">( <?php echo $x2;?> , <?php echo $y2;?> )</td>
					</tr>
					
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Σημείο Β : </td>
						<td align="left" valign="middle" class="text">( <?php echo $x3;?> , <?php echo $y3;?> )</td>
					</tr>
					
					
					<?php //mikos ab		?>
					<tr>
						<?php
							if($l1==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"l_trinagle\" action=\"l_triangle.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varx3=$x3&vary3=$y3&varc1=$c1&varc2=$c2&varc3=$c3&varl=ab&varl2=$l2&varl3=$l3&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Μήκος ΑΒ :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="ab" type="text" id="ab" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"l_triangle.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varx3=$x3&vary3=$y3&varc1=$c1&varc2=$c2&varc3=$c3&varl=ab&varl2=$l2&varl3=$l3&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Μήκος ΑΒ :</td>
									<td align="left" valign="middle" class="text"><?php echo $l1;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //mikos bc	?>
					<tr>
						<?php
							if($l2==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"l_trinagle\" action=\"l_triangle.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varx3=$x3&vary3=$y3&varc1=$c1&varc2=$c2&varc3=$c3&varl=bc&varl2=$l1&varl3=$l3&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Μήκος ΒΓ :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="bc" type="text" id="bc" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"l_triangle.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varx3=$x3&vary3=$y3&varc1=$c1&varc2=$c2&varc3=$c3&varl=bc&varl2=$l1&varl3=$l3&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Μήκος ΒΓ :</td>
									<td align="left" valign="middle" class="text"><?php echo $l2;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //mikos ca	?>
					<tr>
						<?php
							if($l3==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"l_trinagle\" action=\"l_triangle.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varx3=$x3&vary3=$y3&varc1=$c1&varc2=$c2&varc3=$c3&varl=ca&varl2=$l1&varl3=$l2&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Μήκος ΓΑ :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="ca" type="text" id="ca" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==3)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"l_triangle.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varx3=$x3&vary3=$y3&varc1=$c1&varc2=$c2&varc3=$c3&varl=ca&varl2=$l1&varl3=$l2&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Μήκος ΓΑ :</td>
									<td align="left" valign="middle" class="text"><?php echo $l3;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //perimetros trigwnou	?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_triangle\" action=\"p_triangle.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varx3=$x3&vary3=$y3&varc1=$c1&varc2=$c2&varc3=$c3&varl1=$l1&varl2=$l2&varl3=$l3&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==4)
											{											
											?>	
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_triangle.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varx3=$x3&vary3=$y3&varc1=$c1&varc2=$c2&varc3=$c3&varl1=$l1&varl2=$l2&varl3=$l3&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
		<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_skalino.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box2"> Μαθαίνω το σκαλινό τρίγωνο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
					
	
	<?php
	
	dispCloseBody();
	
}


/**********************************************************************
* synartisi gia tin dimiourgia isopleurou trigwnou
**********************************************************************/
function dispTriangleIspl($x,$y,$length,$c1,$c2,$c3,$height,$area,$perimeter,$w)
{
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	//deutero simeio
	$x2=$x+$length;
	$y2=$y+$length;
	
	//trito simeio
	$x3=$x2+$length;
	$y3=$y2+$length;
	
	$a=120*3.14/180;
	$xx=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
	$yy=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
	
	//meso basis
	$xm=($x2+$xx)/2;
	$ym=($y2+$yy)/2;
	
	//ypsos trigwnou
	$xt=($x+$xm)/2;
	$yt=($y+$ym)/2;
	
	//simeio A
	$xa=$x+5;
	
	//simeio Γ
	$xc=$xx-10;
	?>
	
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="80%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//sximatismos trigwnou?>						
						<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:white; stroke:red"/>";

						<?php//ypsos trigwnou?>
						<text x=<?php echo $xt;?> y=<?php echo $yt;?> font-family="Verdana" font-size="15" fill="red">Ύψο</text>
						<line x1=<?php echo $x;?> y1=<?php echo $y;?> x2=<?php echo $xm;?> y2=<?php echo $ym;?>  stroke="red" stroke-width:2"/>
						
						<?php//koryfes trigwnou?>
						<text x=<?php echo $x;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">A</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $x2;?> y=<?php echo $y2;?> font-family="Verdana" font-size="15" fill="red">Β</text>
						<circle cx=<?php echo $x2;?> cy=<?php echo $y2;?> r="3" fill="red"/>
						
						<text x=<?php echo $xx;?> y=<?php echo $yy;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
						<circle cx=<?php echo $xx;?> cy=<?php echo $yy;?> r="3" fill="red"/>
						</svg>
					</tr>
					
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία ισόπλευρου τριγώνου</td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Μήκος πλευρών ισόπλευρου τριγώνου : </td>
						<td align="left" valign="middle" class="text"><?php echo $length;?></td>
					</tr>
					
					
					<?php //ypsos trigwnou	?>
					<tr>
						<?php
							if($height==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"h_triangle\" action=\"h_trIpl.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Ύψος τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="height" type="text" id="height" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==3)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"h_trIpl.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Ύψος τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $height;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //embadon trigwnou?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_triangle\" action=\"a_trIpl.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varyh=$height&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>	
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_trIpl.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varyh=$height&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //perimetros trigwnou	?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_triangle\" action=\"p_trIpl.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varh=$height&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_trIpl.php?varx=$x&vary=$y&varl=$length&&varc1=$c1&varc2=$c2&varc3=$c3&varh=$height&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_isopl.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box2"> Μαθαίνω το ισόπλευρο τρίγωνο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
					
	<?php
	dispCloseBody();
}

/**********************************************************************
* synartisi gia tin dimiourgia isoskelous trigwnou
**********************************************************************/
function dispTriangleIskl($x,$y,$length,$c1,$c2,$c3,$moires,$mk,$base,$height,$area,$perimeter,$w)
{
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	//deutero simeio
	$x2=$x+$length;
	$y2=$y+$length;
	
	//trito simeio
	$m=180-2*$moires;
	$pl=sin($m/2*pi()/180)*$length;
	$x3=$x2+$pl*2;
	$y3=$y2+$pl*2;
	
	$a=(180-$moires)*3.14/180;
	$xx=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
	$yy=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
	
	
	//ypsos trigwnou
	$xh=($xx+$x2)/2;
	$yh=($yy+$y2)/2;
	
	//korufi A
	$xa=$x+5;
	
	//korufi Γ
	$xc=$xx-15;
	
	$l=0;
	?>
		
		<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
			<tr>
				<td width="524" align="left" valign="top">
					<table width="70%" border="0" cellspacing="10" cellpadding="0">
						<tr>
							<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
							<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
							<?php//sximatismos trigwnou?>						
							<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:white; stroke:red"/>";

							<?php//ypsos trigwnou?>
							<text x=<?php echo $xh;?> y=<?php echo $yh;?> font-family="Verdana" font-size="15" fill="red">Ύψος</text>
							<line x1=<?php echo $x;?> y1=<?php echo $y;?> x2=<?php echo $xh;?> y2=<?php echo $yh;?>  stroke="red" stroke-width:2"/>
							
							<?php//koryfes trigwnou?>
							<text x=<?php echo $x;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">A</text>
							<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" fill="red"/>
							
							<text x=<?php echo $x2;?> y=<?php echo $y2;?> font-family="Verdana" font-size="15" fill="red">Β</text>
							<circle cx=<?php echo $x2;?> cy=<?php echo $y2;?> r="3" fill="red"/>
							
							<text x=<?php echo $xx;?> y=<?php echo $yy;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
							<circle cx=<?php echo $xx;?> cy=<?php echo $yy;?> r="3" fill="red"/>
							</svg>
						</tr>
						
						<tr>
							<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία ισόσκελούς τριγώνου</td>
						</tr>
						<tr>
							<td width="70%" align="left" valign="middle" class="text">Μήκος ίσων πλευρών τριγώνου : </td>
							<td align="left" valign="middle" class="text"><?php echo $length;?></td>
						</tr>
						<tr>
							<td width="70%" align="left" valign="middle" class="text">Προσκείμενη γωνία ισόπλευρου τριγώνου : </td>
							<td align="left" valign="middle" class="text"><?php echo $moires;?></td>
						</tr>
						
						<?php //ypsos trigwnou	?>
					<tr>
						<?php
							if($mk==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"mk_triangle\" action=\"mk_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varb=$base&varh=$height&vara=$area&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Γωνία κορυφής ισόσκελούς τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="mk" type="text" id="mk" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==3)
											{											
											?>	
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"mk_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varb=$base&varh=$height&vara=$area&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Γωνία κορυφής ισόσκελούς τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $mk;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //ypsos trigwnou	?>
					<tr>
						<?php
							if($base==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"b_triangle\" action=\"b_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varmk=$mk&varh=$height&vara=$area&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Βάση τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="base" type="text" id="base" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==4)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"b_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varmk=$mk&varh=$height&vara=$area&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Βάση τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $base;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //ypsos trigwnou	?>
					<tr>
						<?php
							if($height==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"h_triangle\" action=\"h_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varmk=$mk&varb=$base&vara=$area&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Ύψος τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="height" type="text" id="height" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==5)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"h_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varmk=$mk&varb=$base&vara=$area&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Ύψος τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $height;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //embadon trigwnou		?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_triangle\" action=\"a_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varmk=$mk&varb=$base&varh=$height&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varmk=$mk&varb=$base&varh=$height&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //perimetros trigwnou	?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_triangle\" action=\"p_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varmk=$mk&varb=$base&varh=$height&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_trIsk.php?varx=$x&vary=$y&varl=$length&varm=$moires&varc1=$c1&varc2=$c2&varc3=$c3&varmk=$mk&varb=$base&varh=$height&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_isoskeles.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box2"> Μαθαίνω το ισοσκελές τρίγωνο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
					
	<?php
	dispCloseBody();
}

/**********************************************************************
* synartisi gia tin dimiourgia orthogwniou isoskeles trigwnou
**********************************************************************/
function dispTriangleOrthIsk($x,$y,$length,$c1,$c2,$c3,$ypot,$area,$perimeter,$w)
{
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	//$spot=0.02*$length;
	$x1=$x+$length;
	$y1=$y-$length;
	$l=0;
	
	//koryfi A
	$xa=$x-15;
	
	//koryfi Γ
	$yc=$y1-15;
	?>
	
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//sximatismos trigwnou?>						
						<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $x;?> <?php echo $y1;?> Z" style="fill:white; stroke:red"/>";
						
						<?php//korufes rombou?>
						<text x=<?php echo $x;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">A</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $x1;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">Β</text>
						<circle cx=<?php echo $x1;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $x;?> y=<?php echo $y1;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y1;?> r="3" fill="red"/>
						</svg>
					</tr>
					
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία ορθογωνίου ισοσκελούς τριγώνου</td>
					</tr>
					
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Μήκος κάθετων πλευρών : </td>
						<td align="left" valign="middle" class="text"><?php echo  $length?></td>
					</tr>
					
					<?php //mikos ypotinousas?>
					<tr>
						<?php
							if($ypot==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"y_triangle\" action=\"y_trOrIs.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Μήκος υποτείνουσας :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="ypot" type="text" id="ypot" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==3)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"y_trOrIs.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Μήκος υποτείνουσας :</td>
									<td align="left" valign="middle" class="text"><?php echo $ypot;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //embadon trigwnou?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_triangle\" action=\"a_trOrIs.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varyp=$ypot&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_trOrIs.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varyp=$ypot&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //perimetros trigwnou	?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_triangle\" action=\"p_trOrIs.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varyp=$ypot&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_trOrIs.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&varyp=$ypot&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_isosk_orth.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box3"> Μαθαίνω το ορθογώνιο ισοσκελές τρίγωνο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
	
	<?php
	dispCloseBody();

}

/**********************************************************************
* synartisi gia tin dimiourgia orthogwniou trigwnou
**********************************************************************/
function dispTriangleOrth($x,$y,$length1,$length2,$c1,$c2,$c3,$ypot,$area,$perimeter,$w)
{
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	$x1=$x+$length1;
	$y1=$y-$length2;
	$l=0;

	?>
	
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//sximatismos trigwnou?>						
						<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $x;?> <?php echo $y1;?> Z" style="fill:white; stroke:red"/>";
						
						
						
						<?php//korufes rombou?>
						<text x=<?php echo $x;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">A</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $x1;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">Β</text>
						<circle cx=<?php echo $x1;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $x;?> y=<?php echo $y1;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y1;?> r="3" fill="red"/>
						</svg>
					</tr>
					
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία ορθογωνίου τριγώνου</td>
					</tr>
					
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Μήκος πρώτης κάθετης πλευράς : </td>
						<td align="left" valign="middle" class="text"><?php echo  $length1?></td>
					</tr>
					
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Μήκος δεύτερης κάθετης πλευράς : </td>
						<td align="left" valign="middle" class="text"><?php echo  $length2?></td>
					</tr>
					
					<?php //mikos ypotinousas?>
					<tr>
						<?php
							if($ypot==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"y_triangle\" action=\"y_trOr.php?varx=$x&vary=$y&varl1=$length1&varl2=$length2&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Μήκος υποτείνουσας :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="ypot" type="text" id="ypot" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==3)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"y_trOr.php?varx=$x&vary=$y&varl1=$length1&varl2=$length2&varc1=$c1&varc2=$c2&varc3=$c3&vara=$area&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Μήκος υποτείνουσας :</td>
									<td align="left" valign="middle" class="text"><?php echo $ypot;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //embadon trigwnou?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_triangle\" action=\"a_trOr.php?varx=$x&vary=$y&varl1=$length1&varl2=$length2&varc1=$c1&varc2=$c2&varc3=$c3&varyp=$ypot&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_trOr.php?varx=$x&vary=$y&varl1=$length1&varl2=$length2&varc1=$c1&varc2=$c2&varc3=$c3&varyp=$ypot&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					
					<?php //perimetros trigwnou	?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_triangle\" action=\"p_trOr.php?varx=$x&vary=$y&varl1=$length1&varl2=$length2&varc1=$c1&varc2=$c2&varc3=$c3&varyp=$ypot&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_trOr.php?varx=$x&vary=$y&varl1=$length1&varl2=$length2&varc1=$c1&varc2=$c2&varc3=$c3&varyp=$ypot&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος τριγώνου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
		<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_orthogwnio.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box2"> Μαθαίνω το ορθογώνιο τρίγωνο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
			
	
	<?php
	dispCloseBody();
}


/**********************************************************************
* synartisi gia tin dimiourgia rombou
**********************************************************************/
function dispRhombus($x,$y,$length,$c1,$c2,$c3,$degrees,$area,$perimeter,$w)
{
	$stroke_width=0.1*$length;
	
	//tuxaioi arithmoi gia to xrwma tou sximatos
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	//gwnies rombou --> epilegontai tyxaia
	if($degrees==0)
		$degrees=rand(1,179);
	
	//deutero simeio
	$x2=$x+$length;
	$y2=$y+$length;
	
	$x3=$x2+$length;
	$y3=$y2+$length;
	
	//metatropi apo moires se aktinia
	$a=$degrees*3.14/180;
	
	//trito simeio
	$xx=cos($a)*($x2-$x)-sin($a)*($y2-$y)+$x;
	$yy=sin($a)*($x2-$x)+cos($a)*($y2-$y)+$y;
	
	//tetarto simeio
	$xx1=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
	$yy1=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
	
	//korufi A
	$xa=$x+5;
	$ya=$y+5;

	//korufi D
	$xd=$xx-15;
	
	//korufi G
	$yc=$yy1+15;
	
	//diagwnios ΑΓ
	$d1=round(sqrt(pow(($x-$xx1),2)+pow(($y-$yy1),2)),2);
	//diagwnios ΔΒ
	$d2=round(sqrt(pow(($x2-$xx),2)+pow(($y2-$yy),2)),2);
	?>

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//korufes rombou?>
						<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx1;?> <?php echo $yy1;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:white; stroke:red" />
						
						<?php//korufes rombou?>
						<text x=<?php echo $xa;?> y=<?php echo $ya;?> font-family="Verdana" font-size="15" fill="red">A</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $x2;?> y=<?php echo $y2;?> font-family="Verdana" font-size="15" fill="red">Β</text>
						<circle cx=<?php echo $x2;?> cy=<?php echo $y2;?> r="3" fill="red"/>
						
						<text x=<?php echo $xd;?> y=<?php echo $yy;?> font-family="Verdana" font-size="15" fill="red">Δ</text>
						<circle cx=<?php echo $xx;?> cy=<?php echo $yy;?> r="3" fill="red"/>
						
						<text x=<?php echo $xx1;?> y=<?php echo $yc;?> font-family="Verdana" font-size="15" fill="red">Δ</text>
						<circle cx=<?php echo $xx1;?> cy=<?php echo $yy1;?> r="3" fill="red"/>
						</svg>					
					</tr>
					
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία ρόμβου</td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Μήκος πλευρών : </td>
						<td align="left" valign="middle" class="text"><?php echo $length;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Διαγώνιος ΑΓ : </td>
						<td align="left" valign="middle" class="text"><?php echo $d1;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Διαγώνιος ΒΔ : </td>
						<td align="left" valign="middle" class="text"><?php echo $d2;?></td>
					</tr>
					<?php //embadon rhombus		?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_rhombus\" action=\"a_rhombus.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vard1=$d1&vard2=$d2&vard=$degrees&varp=$perimeter&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν ρόμβου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_rhombus.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vard1=$d1&vard2=$d2&vard=$degrees&varp=$perimeter&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν ρόμβου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					<?php //perimetrou rhombus		?>
					<tr>
						<?php
							if($perimeter==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"p_rhombus\" action=\"p_rhombus.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vard=$degrees&vara=$area&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Περίμετρος ρόμβου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="perimeter" type="text" id="perimeter" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"p_rhombus.php?varx=$x&vary=$y&varl=$length&varc1=$c1&varc2=$c2&varc3=$c3&vard=$degrees&vara=$area&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Περίμετρος ρόμβου :</td>
									<td align="left" valign="middle" class="text"><?php echo $perimeter;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_rhombus.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Μαθαίνω το ρόμβο </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
	
	<?php
dispCloseBody();
}


/**********************************************************************
* synartisi gia tin dimiourgia trapeziou
**********************************************************************/
function dispTrapezio($x,$y,$mibase,$mebase,$height,$c1,$c2,$c3,$area,$w)
{		
	//tuxaioi arithmoi gia to xrwma tou sximatos
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	//deutero simeio
	$x1=$x+$mibase;
	
	//trito simeio
	//metatropi apo moires se aktinia
	$mb=(-1)*(150-90)*3.14/180;
	$a=$height/cos($mb);
	$y1=$y+$a;
	
	$xx=cos($mb)*($x1-$x1)-sin($mb)*($y1-$y)+$x1;
	$yy=sin($mb)*($x1-$x1)+cos($mb)*($y1-$y)+$y;
		
	//tetarto simeio
	$x2=$xx-$mebase;
		
	?>

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<?php//sximatismos trapeziou?>
						
						<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $xx;?> <?php echo $yy;?> L <?php echo $x2;?> <?php echo $yy;?> Z" style="fill:white; stroke:red" />
						
						<?php//korufes trapeziou?>
						<text x=<?php echo $x;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">A</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $x1;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">Β</text>
						<circle cx=<?php echo $x1;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $xx;?> y=<?php echo $yy;?> font-family="Verdana" font-size="15" fill="red">Δ</text>
						<circle cx=<?php echo $xx;?> cy=<?php echo $yy;?> r="3" fill="red"/>
						
						<text x=<?php echo $x2;?> y=<?php echo $yy;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
						<circle cx=<?php echo $x2;?> cy=<?php echo $yy;?> r="3" fill="red"/>
					</tr>
					
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία τραπεζίου</td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Βάση μικρή : </td>
						<td align="left" valign="middle" class="text"><?php echo $mibase;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Βάση μεγάλη : </td>
						<td align="left" valign="middle" class="text"><?php echo $mebase;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Ύψος : </td>
						<td align="left" valign="middle" class="text"><?php echo $height;;?></td>
					</tr>
					
					<?php //embadon trapeziou?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_trapezio\" action=\"a_trapezio.php?varx=$x&vary=$y&varmi=$mibase&varme=$mebase&varh=$height&varc1=$c1&varc2=$c2&varc3=$c3&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν τραπεζίου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_trapezio.php?varx=$x&vary=$y&varmi=$mibase&varme=$mebase&varh=$height&varc1=$c1&varc2=$c2&varc3=$c3&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν τραπεζίου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_atrapezio.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Μαθαίνω το τραπέζιο</div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>

	<?php
dispCloseBody();
}


/**********************************************************************
* synartisi gia tin orthogwniou trapeziou
**********************************************************************/
function dispΟTrapezio($x,$y,$mibase,$mebase,$height,$c1,$c2,$c3,$area,$w)
{		
	//tuxaioi arithmoi gia to xrwma tou sximatos
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
	
	//deutero simeio
	$y1=$y+$height;
	
	
	//trito simeio
	$x1=$x+$mebase;
	
	//tetarto simeio
	$x2=$x+$mibase;
	?>

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="70%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						
						<?php//sximatismos orthogwniou trapeziou?>
						
						<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x;?> <?php echo $y1;?> L <?php echo $x1;?> <?php echo $y1;?> L <?php echo $x2;?> <?php echo $y;?> Z" style="fill:white; stroke:red" />
						
						
						<?php//korufes trapeziou?>
						<text x=<?php echo $x;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">A</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y;?> r="3" fill="red"/>
						
						<text x=<?php echo $x;?> y=<?php echo $y1;?> font-family="Verdana" font-size="15" fill="red">Β</text>
						<circle cx=<?php echo $x;?> cy=<?php echo $y1;?> r="3" fill="red"/>
						
						<text x=<?php echo $x1;?> y=<?php echo $y1;?> font-family="Verdana" font-size="15" fill="red">Δ</text>
						<circle cx=<?php echo $x1;?> cy=<?php echo $y1;?> r="3" fill="red"/>
						
						<text x=<?php echo $x2;?> y=<?php echo $y;?> font-family="Verdana" font-size="15" fill="red">Γ</text>
						<circle cx=<?php echo $x2;?> cy=<?php echo $y;?> r="3" fill="red"/>
					</tr>
					
					<tr>
					<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία τραπεζίου</td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Βάση μικρή : </td>
						<td align="left" valign="middle" class="text"><?php echo $mibase;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Βάση μεγάλη : </td>
						<td align="left" valign="middle" class="text"><?php echo $mebase;?></td>
					</tr>
					<tr>
						<td width="70%" align="left" valign="middle" class="text">Ύψος : </td>
						<td align="left" valign="middle" class="text"><?php echo $height;;?></td>
					</tr>
					
					<?php //embadon trapeziou?>
					<tr>
						<?php
							if($area==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"a_otrapezio\" action=\"a_otrapezio.php?varx=$x&vary=$y&varmi=$mibase&varme=$mebase&varh=$height&varc1=$c1&varc2=$c2&varc3=$c3&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td width="70%" align="left" valign="middle" class="text">Εμβαδόν τραπεζίου :</td>
											<td width="30%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="area" type="text" id="area" class="input3" size="4" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==1)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"a_otrapezio.php?varx=$x&vary=$y&varmi=$mibase&varme=$mebase&varh=$height&varc1=$c1&varc2=$c2&varc3=$c3&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="70%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Εμβαδόν τραπεζίου :</td>
									<td align="left" valign="middle" class="text"><?php echo $area;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
					</form>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_otrapezio.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box2"> Μαθαίνω το ορθογώνιο τραπέζιο</div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
					
	<?php
	dispCloseBody();

}


/**********************************************************************
* synartisi gia tin dimiourgia isoskelous trapeziou
**********************************************************************/
function dispITrapezio($x,$y,$mibase,$mebase,$height,$area,$w)
{		
	//tuxaioi arithmoi gia to xrwma tou sximatos
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	
	//deutero simeio
	$x1=$x+$mebase;
	
	

	
	//trito simeio
	$i=1;
	$done=0;
	while ($i<180 && $done==0)
	{
		if($i<=90)
		{
			$a=-1*$i*3.14/180;
			
		}
	}
	
	//tetarto simeio
	$x2=$xx-$mebase;
		

	echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"400\" height=\"400\" viewbox=\"0,0,400,400\">";
	echo "<rect x=\"0\" y=\"0\" width=\"500\" height=\"500\"  fill=\"white\" stroke=\"black\"/>";
	//sximatismos romvou
	//echo "<path d=\"M $x $y L $x1 $y L $xx $yy L $x2 $yy Z\" style=\"fill:rgb($c1,$c2,$c3)\" />";
	
	//korufes rombou
	//echo "<text x=$x y=$y font-family=\"Verdana\" font-size=\"15\" fill=\"black\">A</text>";
	echo "<circle cx=$x cy=$y r=\"3\" fill=\"black\"/>";
	
	//echo "<text x=$x1 y=$y font-family=\"Verdana\" font-size=\"15\" fill=\"black\">Β</text>";
	echo "<circle cx=$x1 cy=$y r=\"3\" fill=\"black\"/>";
	
	//echo "<text x=$xx y=$yy font-family=\"Verdana\" font-size=\"15\" fill=\"black\">Δ</text>";
	//echo "<circle cx=$xx cy=$yy r=\"3\" fill=\"black\"/>";
	
	//echo "<text x=$x2 y=$yy font-family=\"Verdana\" font-size=\"15\" fill=\"black\">Γ</text>";
	//echo "<circle cx=$x2 cy=$yy r=\"3\" fill=\"black\"/>";
	//echo "</svg>";
}


/**********************************************************************
* synartisi gia tin dimiourgia kanonikoy pentagwnou
**********************************************************************/
/*
function disp5Plg($x,$y,$length,$area,$perimeter,$w)
{
	//tuxaioi arithmoi gia to xrwma tou sximatos
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	
	$f=180-360/5;
	echo $f;
	
	//deutero simeio
	$x1=$x+$length;
	
	//trito simeio
	//metatropi apo moires se aktinia
	$a=(-1)*($f-90)*3.14/180;
	//$b=($f-90)*3.14/180;
	
	$y1=$y+$length;
	$xx=cos($a)*($x1-$x1)-sin($a)*($y1-$y)+$x1;
	$yy=sin($a)*($x1-$x1)+cos($a)*($y1-$y)+$y;
	
	
	//tetarto simeio
	$xx1=$xx-$length;
	
	$xx1=cos($a)*($xx1-$xx)-sin($a)*($yy-$yy)+$xx;
	$yy1=sin($a)*($xx1-$xx)+cos($a)*($yy-$yy)+$yy;
	
	//pempto simeio
	$yy2=$yy1-$length;
	
	$xx3=cos($a)*($xx1-$xx1)-sin($a)*($yy2-$yy1)+$xx1;
	$yy3=sin($a)*($xx1-$xx1)+cos($a)*($yy2-$yy1)+$yy1;

	
	echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"500\" height=\"500\" viewbox=\"0,0,500,500\">";
	echo "<rect x=\"0\" y=\"0\" width=\"500\" height=\"500\"  fill=\"white\" stroke=\"black\"/>";
	//sximatismos romvou
	//echo "<path d=\"M $x $y L $x2 $y2 L $xx1 $yy1 L $xx $yy Z\" style=\"fill:rgb($c1,$c2,$c3)\" />";
	
	//korufes rombou
	//echo "<text x=$xa y=$ya font-family=\"Verdana\" font-size=\"15\" fill=\"black\">A</text>";
	echo "<circle cx=$x cy=$y r=\"3\" fill=\"red\"/>";
	
	//echo "<text x=$x2 y=$y2 font-family=\"Verdana\" font-size=\"15\" fill=\"black\">Β</text>";
	echo "<circle cx=$x1 cy=$y r=\"3\" fill=\"red\"/>";
	
	//echo "<text x=$xd y=$yy font-family=\"Verdana\" font-size=\"15\" fill=\"black\">Δ</text>";
	echo "<circle cx=$x1 cy=$y1 r=\"3\" fill=\"black\"/>";
	echo "<circle cx=$xx cy=$yy r=\"3\" fill=\"red\"/>";
	
	echo "<circle cx=$xx1 cy=$yy1 r=\"3\" fill=\"red\"/>";
	
	echo "<circle cx=$xx1 cy=$yy2 r=\"3\" fill=\"black\"/>";
	//echo "<text x=$xx1 y=$yc font-family=\"Verdana\" font-size=\"15\" fill=\"black\">Γ</text>";
	//echo "<circle cx=$xx1 cy=$yy1 r=\"3\" fill=\"black\"/>";
	
	echo "</svg>";
}

*/


/**********************************************************************
* synartisi gia tin dimiourgia rombou
**********************************************************************/
function dispStraight($x1,$y1,$x2,$y2,$c1,$c2,$c3,$length,$w)
{	
	//tuxaioi arithmoi gia to xrwma tou sximatos
	if(($c1==0)&&($c2==0)&&($c3==0))
	{
		$c1=rand(0,255);
		$c2=rand(0,255);
		$c3=rand(0,255);
	}
?>

	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="80%" border="0" cellspacing="10" cellpadding="0">
					<tr>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="575" height="449" viewbox="0,0,575,449">
						<image x="0" y="0"  width="575" height="449"  xlink:href="images/blackboard.jpg"/>
						<line x1="<?php echo $x1;?>" y1="<?php echo $y1;?>" x2="<?php echo $x2;?>" y2="<?php echo $y2?>" style="stroke:white" />
						
						<?php//simeia eutheias?>
						<text x="<?php echo $x1;?>" y="<?php echo $y1;?>" font-family="Verdana" font-size="15" fill="white">A</text>
						<circle cx="<?php echo $x1;?>" cy="<?php echo $y1;?>" r="3" fill="red"/>
						
						<text x="<?php echo $x2;?>" y="<?php echo $y2;?>" font-family="Verdana" font-size="15" fill="white">B</text>
						<circle cx="<?php echo $x2;?>" cy="<?php echo $y2;?>" r="3" fill="red"/>						
					</tr>
					<tr>
						<td align="left" valign="top" class="heading" style="padding-bottom:8px;">Στοιχεία ευθύγραμμου τμήματος</td>
					</tr>
					<tr>
						<td width="60%" align="left" valign="middle" class="text">Σημείο Α : </td>
						<td align="left" valign="middle" class="text">( <?php echo $x1;?> , <?php echo $y1;?> )</td>
					</tr>
					
					<tr>
						<td width="60%" align="left" valign="middle" class="text">Σημείο Β : </td>
						<td align="left" valign="middle" class="text">( <?php echo $x2;?> , <?php echo $y2;?> )</td>
					</tr>
					
					<tr>
						<?php
							if($length==0)
							{
						?>
							<td align="left" valign="top" class="text">
								<?php echo "<form name=\"m_straight\" action=\"m_straight.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varc1=$c1&varc2=$c2&varc3=$c3&vart=1\" method=\"post\">";?>
									<table width="90%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td align="left" valign="middle" class="text">Μήκος ευθύγραμμου τμήματος:</td>
											<td align="left" valign="top">&nbsp;</td>
											<td width="90%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input name="length" type="text" id="length" class="input3" size="20" style="width:150px; height:15px;" /></td>
										</tr>
										<tr>
										<?php
											$l=1;
											if($w==2)
											{											
											?>
												<embed src="sounds/wrong.wav"  width="0" height="0" autostart="true" loop="false"></embed>
												<td><img name='roller' src="images/roll1.gif" onMouseOver="changer();" onMouseOut="changer();"></td>
												<td width="100%" colspan="25" align="left" valign="middle" class="text"><font color="red"><br/>Η απαντησή σας δεν ήταν σωστή.<br/>Προσπαθήστε πάλι</font><br/></td>
				
											<?php
											}
										?>
										</tr>
										<tr>
											<td width="100%" colspan="5" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><?php echo "<a href=\"m_straight.php?varx1=$x1&vary1=$y1&varx2=$x2&vary2=$y2&varc1=$c1&varc2=$c2&varc3=$c3&vart=0\">Εμφάνιση λύσης</a>";?></td>
										</tr>
										<tr>
											<td width="100%" colspan="2" align="left" valign="middle" style="padding-top:3px; padding-bottom:3px;"><input type="submit" value="Υποβολή"></td>
										</tr>
									</table>
								</form>
							</td>
							


						
						
						<?php	
							}
							else
							{
							?>
								<tr>
									<td align="left" valign="middle" class="text">Μήκος ευθύγραμμου τμήματος:</td>
									<td align="left" valign="middle" class="text"><?php echo $length;?></td>
								</tr>
						<?php
							
							}
						?>
					</tr>
				</table>
			</td>	
		</tr>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="th_straight.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/bookcase.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box2"> Μαθαίνω το ευθύγραμμο τμήμα </div>
			</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<a href="draw.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Πίσω </div>
			</td>
		</tr>
	</table>
	


	
<?php
dispCloseBody();

}


/**********************************************************************
* synartisi gia tin epilogi tou sximatos pou tha dimiourgithei
**********************************************************************/
function dispShapes_TH($x)
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
?>
	<font align="center" color="#A9B63D"><h2>Ας μάθουμε τα γεωμετρικά σχήματα!</h2></font>
	</br>

	Εδώ μπορείται να μάθετε για τη μορφή και τις βασικές ιδιότητες των γεωμετρικών σχημάτων. 
	<br/><br>
	Επιλέξε ένα γεωμετρικό σχήμα από την ακόλουθη λίστα και θα μεταφερθεί στην αντίστοιχη σελίδα.<br/><br/>
	
	<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">

	<?php //euthugrammo tmima?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<line x1="10" y1="10" x2="50" y2="50"  style="stroke:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>); stroke-width:7"/>
			</svg>
		</td>
		</br>
		<td><a href="th_straight.php"><font color="#A9B63D"><h3>Μαθαίνω το ευθύγραμμο τμήμα</font></h3></a></td>
	</tr>
	
	<?php //tetragwno?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<rect x="0" y="0" width="50" height="50"  style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		
		<td><a href="th_rect.php"><font color="#A9B63D"><h3>Μαθαίνω το τετράγωνο</font></h3></a></td>
	</tr>

	<?php //parallilogrammo?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<rect x="0" y="0" width="90" height="50"  style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="th_rect1.php"><font color="#A9B63D"><h3>Μαθαίνω τα παραλληλόγραμμα</font></h3></a></td>
	</tr>
	
	<?php //kuklos?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<circle cx="30" cy="30" r="28" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="th_circle.php"><font color="#A9B63D"><h3>Μαθαίνω τον κύκλο</font></h3></a></td>
	</tr>
	
	<?php //ellipsi?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<ellipse cx="30" cy="30" rx="28" ry="15" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="th_ellipse.php"><font color="#A9B63D"><h3>Μαθαίνω την έλλειψη</font></h3></a></td>
	</tr>

	<?php //trigwna?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<path d="M 15 10 L 5 75 L 50 50 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="th_triangle.php"><font color="#A9B63D"><h3>Μαθαίνω τα τρίγωνα</font></h3></a></td>
	</tr>
	
	<?php //rombos
	
	$x=25;
	$y=20;
	$degrees=80;
	$length=30;

		
	//deutero simeio
	$x2=$x+$length;
	$y2=$y+$length;

	$x3=$x2+$length;
	$y3=$y2+$length;
		
	//metatropi apo moires se aktinia
	$a=$degrees*3.14/180;
		
	//trito simeio
	$xx=cos($a)*($x2-$x)-sin($a)*($y2-$y)+$x;
	$yy=sin($a)*($x2-$x)+cos($a)*($y2-$y)+$y;
		
	//tetarto simeio
	$xx1=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
	$yy1=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
	
	?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<path d="M <?php echo $x?> <?php echo $y?> L <?php echo $x2?> <?php echo $y2?> L <?php echo $xx1?> <?php echo $yy1?> L <?php echo $xx?> <?php echo $yy?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/
			</svg>
		</td>
		<td><a href="th_rhombus.php"><font color="#A9B63D"><h3>Μαθαίνω τo ρόμβο</font></h3></a></td>
	</tr>
	
	<?php //trapezia>?>
	<tr>
		<td align="center">	
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
				<path d="M 20 10 L 45 10 L 70 50 L 5 50 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
			</svg>
		</td>
		<td><a href="th_trapezio.php"><font color="#A9B63D"><h3>Μαθαίνω τα τραπέζια</font></h3></a></td>
	</tr>



	</table>
	
<?php
}


/**********************************************************************
* synartisi gia tin epilogi tou typou tou trapeziou
**********************************************************************/
function dispKindTrapezio_th()
{
	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
?>

	<font align="center" color="#A9B63D"><h2>Μαθαίνω τα τραπέζια</h2></font>
	</br>

	<b>Τραπέζιο</b> είναι το κυρτό τετράπλευρο που έχει δύο πλευρές παράλληλες.
	<br/>
	<br/>
	Οι παράλληλες αυτές πλευρές λέγονται <b>βάσεις</b> και η απόστασή τους <b>ύψος</b> του τραπεζίου. 
	<br/><br/>
	Στη συνέχεια έχουμε δύο από τα είδη του τραπεζίου. Επέλεξε αυτό που επιθυμείς να μελετήσεις
	<br/><br/>
	<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">

		<?php //trapezia>?>
		<tr>
			<td align="center">
				</br>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 20 10 L 45 10 L 70 50 L 5 50 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="th_atrapezio.php"><font color="#A9B63D"><h3>Μαθαίνω τo τραπέζιο</font></h3></a></td>
		</tr>
		
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 20 10 L 65 10 L 90 50 L 20 50 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="th_otrapezio.php"><font color="#A9B63D"><h3>Μαθαίνω τo ορθογώνιο τραπέζιο</font></h3></a></td>
		</tr>
	</table>
	
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr/>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>	
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>			
			<td>
				<a href="theory.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Θεωρία </div>
			</td>
		</tr>
	</table>
<?php
}

/**********************************************************************
* synartisi gia tin epilogi tou trigwnou gia ti theoria
**********************************************************************/
function dispKindTriangle_th()
{

	$c1=rand(0,255);
	$c2=rand(0,255);
	$c3=rand(0,255);
	?>
<?php
/*
	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1>  Τρίγωνα</h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M 50 15 L 20 150 L 120 125 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός τριγώνου</h2></td>
			
		</tr>
	</table>

	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Τρίγωνο</b> είναι το πολύγωνο που έχει τρεις πλευρές και τρείς γωνίες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	


	Εδώ μπορείται να μάθετε για τη μορφή και τις βασικές ιδιότητες των γεωμετρικών σχημάτων. 
	<br/><br>
	Επιλέξε ένα γεωμετρικό σχήμα από την ακόλουθη λίστα και θα μεταφερθεί στην αντίστοιχη σελίδα.<br/><br/>
	
	<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
*/
?>
	
	<font align="center" color="#A9B63D"><h2>Μαθαίνω τα τρίγωνα</h2></font>
	</br>
	
	<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">

		<?php //isopleuro trigwno
		$x=30;
		$y=30;
		$length=45;
		
		//deutero simeio
		$x2=$x+$length;
		$y2=$y+$length;
		
		//trito simeio
		$x3=$x2+$length;
		$y3=$y2+$length;
		
		$a=120*3.14/180;
		$xx=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
		$yy=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
		
		?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>";
				</svg>
			</td>
			<td><a href="th_isopl.php"><font color="#A9B63D"><h3>Μαθαίνω το ισόπλευρο τρίγωνο</font></h3></a></td>
		</tr>
				
		<?php 
		$x=40;
		$y=40;
		$length=35;
		$moires=45;
		
		//deutero simeio
		$x2=$x+$length;
		$y2=$y+$length;
		
		//trito simeio
		$m=180-2*$moires;
		$pl=sin($m/2*pi()/180)*$length;
		$x3=$x2+$pl*2;
		$y3=$y2+$pl*2;
		
		$a=(180-$moires)*3.14/180;
		$xx=cos($a)*($x3-$x2)-sin($a)*($y3-$y2)+$x2;
		$yy=sin($a)*($x3-$x2)+cos($a)*($y3-$y2)+$y2;
		
		
		
		//isoskeles trigwno?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>";
				</svg>
			</td>
			<td><a href="th_isoskeles.php"><font color="#A9B63D"><h3>Μαθαίνω το ισοσκελές τρίγωνο</font></h3></a></td>
		</tr>
		
		<?php //skalino trigwno?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 3 5 L 60 50 L 25 95 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="th_skalino.php"><font color="#A9B63D"><h3>Μαθαίνω το σκαλινό τρίγωνο</font></h3></a></td>
		</tr>
		
		<?php //orthogwnio trigwno?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 10 10 L 10 90 L 50 90 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="th_orthogwnio.php"><font color="#A9B63D"><h3>Μαθαίνω το ορθογώνιο τρίγωνο</font></h3></a></td>
		</tr>
		
		<?php //orthogwnio isoskeles trigwno?>
		<tr>
			<td align="center">	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50" height="50" viewbox="0,0,100,100">
					<path d="M 10 10 L 10 70 L 70 70 Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td><a href="th_isosk_orth.php"><font color="#A9B63D"><h3>Μαθαίνω το ορθογώνιο ισοσκελές τρίγωνο</font></h3></a></td>
		</tr>
		
	</table>
	
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr/>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>	
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>			
			<td>
				<a href="theory.php">
					<span onmouseover="ShowText('Message1'); return true;" onmouseout="HideText('Message1'); return true;" href="javascript:ShowText('Message1')">
						<img src="images/back.png" alt="error"/>
					</span>
				</a>
				<div id="Message1" class="box1"> Θεωρία </div>
			</td>
		</tr>
	</table>
	
	

<?php
	//dispCloseBody();
}

/**********************************************************************
* synartisi gia tin elegxo sublirwsis twn askisewn apo xristi
**********************************************************************/
function get_solution($name,$price)
{
?>
	<table width="740" border="0" align="left" cellpadding="0" cellspacing="0">
		<?php
	
		echo $name;
		
		if($price==1)
			echo '<img src="images/yes.jpg" alt="error"/>';
		else
			echo '<img src="images/non.png" alt="error"/>';
		?>
		</table>
<?php
}


?> 