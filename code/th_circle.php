<?php

require_once('include.php');

dispHeader();
dispBody();

$x1=rand(0,255);
$x2=rand(0,255);
$x3=rand(0,255);
?>

	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1><font color="#A9B63D">Κύκλος</font></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<circle cx="85" cy="70" r="50" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="310" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός κύκλου</h2></td>
		</tr>
	</table>
	
	<table width="630" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Κύκλο</b> ονομάζουμε το σχήμα που όλα του τα σημεία ισαπέχουν από ένα σταθερό σημείο.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="right" valign="middle" class="text"><p></p></td>
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Το σταθερό σημείο ονομάζεται <b>κέντρο</b> του κύκλου και η σταθερή απόσταση <b>ακτίνα</b> του κύκλου.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="right" valign="middle" class="text"><p></p></td>
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Ακτίνα</b> του κύκλου είναι το ευθύγραμμο τμήμα που ενώνει το κέντρο του κύκλου με ένα σημείο<br/> της περιφερειάς του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="right" valign="middle" class="text"><p></p></td>
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Χορδή</b> ονομάζουμε το ευθύγραμμο τμήμα που ενώνει δύο σημεία του κύκλου.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="right" valign="middle" class="text"><p></p></td>
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Διάμετρο</b> ονομάζουμε την χορδή του κύκλου που περνάει από το κέντρο του</td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Διάμετρος κύκλου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω την διάμετρο ενός κύκλου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	<br/>
	
	<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω την ακτίνα του κύκλου με το 2.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Διάμετρος (δ) = 2 x α</b></p></td>
			<td align="right" valign="middle" class="text"><p><b>όπου α = η ακτίνα του κύκλου</b></p></td>
			<td align="left" valign="top">&nbsp;</td>		
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός διαμέτρου</h2></td>
		</tr>
	</table>
	
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="0">
	<div align="left">
		<br/><br/>	<br/><br/>	
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
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="150" height="150" viewbox="0,0,200,200">
					<circle cx="85" cy="70" r="50" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
					<line x1="85" y1="70" x2="135" y2="70" style="stroke:red;stroke-width:5"/>
					<circle cx="85" cy="70" r="3" style="fill:red"/>
					<text x="85" y="68" font-family="Verdana" font-size="15" fill="black" >α = 3 εκ.</text>"
				</svg>
			</td>
			<td>
				Διάμετρος = 3 x 2 = 6 εκατ.
				</br><br/>
			</td>
		</tr>
	<div/>
	</table>
	
	<br/><br/>
	<table width="450" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος ή μήκος κύκλου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Το <b>μήκος</b> ή η <b>περίμετρος</b> του κύκλου είναι το διάστημα που θα διανύσει ο κύκλος εφόσον <br/>κάνει μία πλήρη στροφή.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω την περίμετρο ενός κύκλου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω την διάμετρο με τον αριθμό π(=3.14).</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Περίμετρος ή μήκος κύκλου = διάμετρος x π</b></p></td>
			<td align="right" valign="middle" class="text"><p><b>όπου π = 3.14</b></p></td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Περίμετρος ή μήκος κύκλου = 2 x ακτίνα x π</b></p></td>
			<td align="right" valign="middle" class="text"><p><b>όπου π = 3.14</b></p></td>				
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός περίμετρου</h2></td>
		</tr>
	</table>
	
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="0">
	<div align="left">
		<br/><br/>	<br/><br/>	
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
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="150" height="150" viewbox="0,0,200,200">
					<circle cx="85" cy="70" r="50" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>); stroke:red; stroke-width:5"/>
					<text x="85" y="65" font-family="Verdana" font-size="20" fill="black" >3 εκ.</text>
					<line x1="85" y1="70" x2="135" y2="70" style="stroke:red; stroke-width:5"/>
					<circle cx="85" cy="70" r="3" style="fill:red"/>
				</svg>
			</td>
			<td>
				Διάμετρος = 2 x 3 = 6 εκατ
				<br/><br/>
				Περίμετρος κύκλου = 6 x 3.14 = 18.84 εκατ.
				</br><br/>
				ή
				</br></br>
				Περίμετρος κύκλου = 2 x 3 x 3.14 = 18.84 εκατ.
			</td>
		</tr>
	</div>
	</table>
	
	<table width="450" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/></td>
			<td><h2>Εμβαδόν κύκλικού δίσκου</h2></td>
		</tr>
	</table>
	
	<br/>
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω το εμβαδόν ενός κυκλιυκού δίσκου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω το τετράγωνο της ακίνας με τον αριθμό π(=3.14).</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Εμβαδόν κύκλικού δίσκου = ακτίνα x ακτίνα x π</b></p></td>
			<td align="right" valign="middle" class="text"><p><b>όπου π = 3.14</b></p></td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός εμβαδού</h2></td>
		</tr>
	</table>
	
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="0">
	<div align="left">
		<br/><br/>	<br/><br/>	
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
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="150" height="150" viewbox="0,0,200,200">
					<circle cx="85" cy="70" r="50" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>); stroke:red; stroke-width:5"/>
					<text x="85" y="65" font-family="Verdana" font-size="20" fill="black" >3 εκ.</text>
					<line x1="85" y1="70" x2="135" y2="70" style="stroke:red; stroke-width:5"/>
					<circle cx="85" cy="70" r="3" style="fill:red"/>
				</svg>
			</td>
			<td>
				Εμβαδόν κύκλικού δίσκου = 2 x 3 x 3 = 18 τ.εκατ
			</td>
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="circle.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/paint.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Ζωγράφισε το κύκλο </div>
			</td>
			
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

/*	
echo '<h1>Κύκλος</h1>';

echo '<h2>Οριμός κύκλου</h2>';



echo '<b>Κύκλο</b> ονομάζουμε το σχήμα που όλα του τα σημεία ισαπέχουν από ένα σταθερό σημείο.<br/>

	Το σταθερό σημείο ονομάζεται κέντρο του κύκλου και η σταθερή απόσταση ακτίνα του κύκλου.';
	
echo '<br/><br/>';
echo '<b>Ακτίνα</b> του κύκλου είναι το ευθύγραμμο τμήμα που ενώνει το κέντρο του κύκλου με ένα σημείο<br/>
	της περιφερειάς του.';
echo '<br/><br/>';
echo '<b>Χορδή</b> ονομάζουμε το ευθύγραμμο τμήμα που ενώνει δύο σημεία του κύκλου.<br/>
	<b>Διάμετρο</b> ονομάζουμε την χορδή του κύκλου που περνάει από το κέντρο του.';
//echo "είναι διπλάσια της ακίνας του κύκλου.";
echo '<br/><br/>';

	
echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,220,220\">";
echo "<circle cx=\"125\" cy=\"125\" r=\"80\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=\"125\" cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<line x1=\"125\" y1=\"125\" x2=\"205\" y2=\"125\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"128\" y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">α = 5 εκ.</text>";
echo "</svg>";	
	
echo '<h2>Διάμετρος κύκλου</h2>';
echo 'Διάμετρο ονομάζουμε την χορδή του κύκλου που περνάει από το κέντρο του';
echo '<br/><br/>';
echo 'Για να υπολογίσω την διάμετρο ενός κύκλου';
echo 'πολλαπλασιάζουμε την ακτίνα του κύκλου με το 2';
echo '</br></br>';
echo 'Διάμετρος(δ) = 2 * α';
echo '<br/><br/>';
echo 'όπου α = η ακτίνα του κύκλου.';
echo '<br/>';
	
echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,220,220\">";
echo "<circle cx=\"125\" cy=\"125\" r=\"80\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=\"125\" cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<line x1=\"125\" y1=\"125\" x2=\"205\" y2=\"125\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"128\" y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">α = 5 εκ.</text>";
echo "</svg>";	


echo '</br>';
echo 'Διάμετρος = 2 * 5 = 10 εκατ. ';
echo '</br><br/>';

	
echo '<h2>Περίμετρος ή μήκος κύκλου</h2>';
echo 'Το μήκος ή η περίμετρος του κύκλου είναι το διάστημα που θα διανύσει ο κύκλος εφόσον <br/>κάνει μία πλήρη στροφή.';
echo '<br/><br/>';
echo 'Για να υπολογίσω την περίμετρο ή το μήκος ενός κύκλου';
echo 'πολλαπλασιάζουμε την διάμετρο με τον αριθμό π(=3,14)';
echo '</br></br>';
echo 'Μήκος κύκλου = π * δ ή';
echo '</br></br>';
echo 'Μήκος κύκλου = π * ( 2 * α )';
echo '<br/><br/>';
echo 'όπου π = 3,14 ,<br/> δ = η διάμςετρος του κύκλου και <br/> α = η ακτίνα του κύκλου.';
echo '<br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,220,220\">";
echo "<circle cx=\"125\" cy=\"125\" r=\"80\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=\"125\" cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<line x1=\"125\" y1=\"125\" x2=\"205\" y2=\"125\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"128\" y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">α = 5 εκ.</text>";
echo "</svg>";	

echo '</br>';
echo 'Περίμετρος κύκλου = 3,14 * 10 = 31,4 εκατ. ';
echo 'ή';
echo '</br><br/>';
echo 'Περίμετρος κύκλου = 3,14 * ( 2 * 5 ) = 3,14 * 10 = 31,4 εκατ. ';
echo '</br><br/>';


echo '<h2>Εμβαδόν κύκλικού δίσκου</h2>';
echo 'Το εμβαδόν του κύκλικού δίσκου είναι ίσο με το γιμόμενο του αριθμού π επί το τετράγωνο της ακτίνας του';
echo '</br></br>';
echo 'Εμβαδόν κύκλικού δίσκου = π * α * α';
echo '</br></br>';
echo 'όπου π = 3,14 και <br/> α = η ακτίνα του κύκλου.';
echo '<br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,220,220\">";
echo "<circle cx=\"125\" cy=\"125\" r=\"80\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=\"125\" cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<line x1=\"125\" y1=\"125\" x2=\"205\" y2=\"125\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"128\" y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">α = 5 εκ.</text>";
echo "</svg>";	


echo '</br>';
echo 'Εμβαδόν κυκλικού δίσκου = 3,14 * 5 * 5 = 78,5 τ.εκατ.';
*/
dispCloseBody();
?> 