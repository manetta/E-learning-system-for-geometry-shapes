<?php

require_once('include.php');

dispHeader();
dispBody();

//dispShapes_TH(0);

$x1=rand(0,255);
$x2=rand(0,255);
$x3=rand(0,255);
?>

	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1><font color="#A9B63D">Τετράγωνο</font></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<rect x="30" y="30" width="1in" height="1in"  style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>

	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός τετραγώνου</h2></td>
			
		</tr>
	</table>


	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Τετράγωνο είναι το παρραληλόγραμμο που είναι ορθογώνιο και ρόμβος.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Ιδιότητες τετραγώνου</h2></td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Οι απέναντι πλευρές του είναι παράλληλες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<br/>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Όλες οι πλευρές του είναι ίσες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<br/>
		<tr align="left" valign="top">&nbsp;</tr>	
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_green.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Όλες οι γωνίες του είναι ορθές.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<br/>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Oι διαγώνιοι είναι ίσες, κάθετες, διχοτομούνται, διχοτομούν τις γωνίες του <br/>και είναι άξονες συμμετρίας του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Κριτήρια τετραγώνου</h2></td>
			
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
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
			<td align="right" valign="middle" class="text"><p>Ένα παραλληλόγραμμο είναι τετράγωνο αν και μόνο αν ισχύει μία από τις παρακάτω προτάσεις:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Μία γωνία είναι ορθή και δύο διαδοχικές πλευρές ίσες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Μία γωνία είναι ορθή και μία διαγώνιος διχοτομεί μία γωνία.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr align="left" valign="top">&nbsp;</tr>	
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_green.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Μία γωνία είναι ορθή και οι διαγώνιοι κάθετες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Οι διαγώνιοι είναι ίσες και δύο διαδοχικές πλευρές ίσες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Οι διαγώνιοι είναι ίσες και μία από αυτές διχοτομεί μία γωνία.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr align="left" valign="top">&nbsp;</tr>	
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_green.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Οι διαγώνιοι είναι ίσες και κάθετες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος τετραγώνου</h2></td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω την περίμετρο ενός τετραγώνου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Προσθέτω τα μήκη των τεσσάρων πλευρών του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>	
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω το μήκος της πλευράς του με το 4.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Περίμετρος τετραγώνου = 4 x πλευρά</b></p></td>
			<td align="left" valign="top">&nbsp;</td>		
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
					<text x="62.5" y="18" font-family="Verdana" font-size="20" fill="black" >3 εκ.</text>"
					<rect x="25" y="30" width="1.20in" height="1.20in"  style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>); stroke:red; stroke-width:5 " />
					<--!text x="20" y="20" transform="rotate(90,58,108)" font-family="Verdana" font-size="20" fill="black">3 εκ.</text>
				</svg>
			</td>
			<td>
				Περίμετρος τετραγώνου = 3 + 3 + 3 + 3 = 12 εκατ.
				</br><br/>
				ή
				</br></br>
				Περίμετρος τετραγώνου = 3 x 4 = 12 εκατ.
			</td>
		</tr>
	</div>
	</table>

	
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/></td>
			<td><h2>Εμβαδόν τετραγώνου</h2></td>
		</tr>
	</table>

	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω το εμβαδόν του τετραγώνου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω τη βάση με το ύψος του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω πλευρά επί πλευρά.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Εμβαδόν τετραγώνου = πλευρά x πλευρά</b></p></td>
			<td align="left" valign="top">&nbsp;</td>		
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
					<text x="62.5" y="18" font-family="Verdana" font-size="20" fill="black" >3 εκ.</text>"
					<rect x="25" y="30" width="1.20in" height="1.20in"  style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" />
					<line x1="25" y1="146" x2="25" y2="30" style="stroke:red;stroke-width:5"/>
					<line x1="25" y1="146" x2="140" y2="146" style="stroke:red;stroke-width:5"/>
					<--!text x="20" y="20" transform="rotate(90,58,108)" font-family="Verdana" font-size="20" fill="black">3 εκ.</text>";
				</svg>
			</td>
			<td>
				Εμβαδόν τετραγώνου = 3 x 3 = 9 τ.εκατ.
				</br><br/>
			</td>
		</tr>
	<div/>
	</table>
	
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="rect.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/paint.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Ζωγράφισε το τετράγωνο </div>
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
echo '<h1>Τετράγωνο</h1>';

echo '<h2>Οριμός τετραγώνου</h2>';
echo 'Τετράγωνο είναι το παρραληλόγραμμο που είναι ορθογώνιο και ρόμβος';

echo '<h2>Ιδιότητες τετραγώνου</h2>';
echo '<ul>';
echo '<li>Οι απέναντι πλευρές του είναι παράλληλες</li>';
echo '</br>';
echo '<li>Όλες οι πλευρές του είναι ίσες</li>';
echo '</br>';
echo '<li>Όλες οι γωνίες του είναι ορθές</li>';
echo '</br>';
echo '<li>Όι διαγώνιοι είναι ίσες, κάθετες, διχοτομούνται, διχοτομούν τις γωνίες του και <br/>είναι άξονες συμμετρίας του</li>';
echo '</ul>';


echo '<h2>Κριτήρια τετραγώνου</h2>';
echo 'Ένα παραλληλόγραμμο είναι τετράγωνο αν και μόνο αν ισχύει μία από τις παρακάτω προτάσεις:';
echo '<ul>';
echo '<li>Μία γωνία είναι ορθή και δύο διαδοχικές πλευρές ίσες.</li>';
echo '</br>';
echo '<li>Μία γωνία είναι ορθή και μία διαγώνιος διχοτομεί μία γωνία.</li>';
echo '</br>';
echo '<li>Μία γωνία είναι ορθή και οι διαγώνιοι κάθετες.</li>';
echo '</br>';
echo '<li>Οι διαγώνιοι είναι ίσες και δύο διαδοχικές πλευρές ίσες.</li>';
echo '</br>';
echo '<li>Οι διαγώνιοι είναι ίσες και μία από αυτές διχοτομεί μία γωνία.</li>';
echo '</br>';
echo '<li>Οι διαγώνιοι είναι ίσες και κάθετες.</li>';
echo '</ul>';



echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,200,200\">";
echo "<text x=\"62.5\" y=\"18\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\" >3 εκ.</text>";
echo "<rect x=\"25\" y=\"25\" width=\"140\" height=\"140\"  style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"62.5\" y=\"25\" transform=\"rotate(90,102,102)\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">3 εκ.</text>";
echo "</svg>";
*/

/*
echo '<h2>Κατασκευή τετραγώνου</h2>';

echo '<h4>Σχεδιάζω ένα ευθύγραμμο τμήμα ΑΒ = 4 εκατ.</h4>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,250,250\">";
echo "<text x=\"25\" y=\"15\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">A</text>";
echo "<circle cx=\"50\" cy=\"10\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"50\" y1=\"10\" x2=\"200\" y2=\"10\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"210\" y=\"15\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">B</text>";
echo "<circle cx=\"200\" cy=\"10\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "</svg>";

echo '<h4>Με τη βοήθεια του τριγώνου και από το σημείο Β φέρνω κάθετη<br/>';
echo 'και σχεδιάζω την ΒΓ = 4 εκατ. η οποία είναι ίση με την ΑΒ = 4 εκατ.</h4>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,250,250\">";
echo "<text x=\"210\" y=\"15\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">Γ</text>";
echo "<circle cx=\"200\" cy=\"15\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"200\" y1=\"165\" x2=\"200\" y2=\"15\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"25\" y=\"165\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">A</text>";
echo "<circle cx=\"50\" cy=\"165\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"50\" y1=\"165\" x2=\"200\" y2=\"165\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"210\" y=\"165\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">B</text>";
echo "<circle cx=\"200\" cy=\"165\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<path d=\"M 100 160 L195 160 L195 50 Z\" fill=\"green\"/>";
echo "<path d=\"M 140 140 L180 140 L180 90 Z\" fill=\"white\">";
echo "</svg>";


echo '<h4>Με τη βοήθεια του τριγώνου και από το σημείο Γ φέρνω κάθετη<br/>';
echo 'και σχεδιάζω την ΓΔ = 4 εκατ. η οποία είναι ίση με την ΑΒ = ΒΓ = 4 εκατ.</h4>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,250,250\">";
echo "<text x=\"25\" y=\"15\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">Δ</text>";
echo "<circle cx=\"50\" cy=\"15\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"200\" y1=\"15\" x2=\"50\" y2=\"15\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"210\" y=\"15\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">Γ</text>";
echo "<circle cx=\"200\" cy=\"15\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"200\" y1=\"165\" x2=\"200\" y2=\"15\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"25\" y=\"165\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">A</text>";
echo "<circle cx=\"50\" cy=\"165\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"50\" y1=\"165\" x2=\"200\" y2=\"165\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"210\" y=\"165\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">B</text>";
echo "<circle cx=\"200\" cy=\"165\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<path d=\"M 100 20 L195 20 L195 125 Z\" fill=\"green\"/>";
echo "<path d=\"M 140 35 L180 35 L180 80 Z\" fill=\"white\">";
echo "</svg>";

echo '<h4>Με τη βοήθεια του τριγώνου και από το σημείο Δ φέρνω κάθετη<br/>';
echo 'και σχεδιάζω την ΔΑ = 4 εκατ. η οποία είναι ίση με την ΑΒ = ΒΓ = ΓΔ = 4 εκατ.</h4>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,250,250\">";
echo "<line x1=\"50\" y1=\"15\" x2=\"50\" y2=\"165\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"25\" y=\"15\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">Δ</text>";
echo "<circle cx=\"50\" cy=\"15\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"200\" y1=\"15\" x2=\"50\" y2=\"15\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"210\" y=\"15\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">Γ</text>";
echo "<circle cx=\"200\" cy=\"15\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"200\" y1=\"165\" x2=\"200\" y2=\"15\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"25\" y=\"165\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">A</text>";
echo "<circle cx=\"50\" cy=\"165\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<line x1=\"50\" y1=\"165\" x2=\"200\" y2=\"165\"  stroke=\"green\" stroke-width=\"6\"/>";
echo "<text x=\"210\" y=\"165\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">B</text>";
echo "<circle cx=\"200\" cy=\"165\" r=\"7\"  fill=\"green\" stroke=\"green\" stroke-width=\"4\"/>";
echo "<path d=\"M 55 20 L55 130 L170 20 Z\"  fill=\"green\"/>";
echo "<path d=\"M 75 35 L120 35 L75 80 Z\" fill=\"white\">";
echo "</svg>";



echo '<h2>Περίμετρος τετραγώνου</h2>';
echo 'Για να υπολογίσω την περίμετρο ενός τετραγώνου';
echo '<ul>';
echo '<li>Προσθέτω τις τέσσερις πλευρές του.</li>';
echo '</br>';
echo '<li>Πολλαπλασιάζω την πλευρά του με το 4</li>';
echo '</ul>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,200,200\">";
echo "<text x=\"62.5\" y=\"18\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\" >3 εκ.</text>";
echo "<rect x=\"25\" y=\"25\" width=\"140\" height=\"140\"  style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"62.5\" y=\"25\" transform=\"rotate(90,102,102)\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">3 εκ.</text>";
//echo "<text x=\"62.5\" y=\"185\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">3 εκ.</text>";
//echo "<text x=\"62.5\" y=\"185\" transform=\"rotate(90,140,140)\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">3 εκ.</text>";
echo "</svg>";

echo '</br>';
echo 'Περίμετρος τετραγώνου = 3 + 3 + 3 + 3 = 12 εκατ.';
echo '</br><br/>';
echo 'ή';
echo '</br></br>';
echo 'Περίμετρος τετραγώνου = 3 x 4 = 12 εκατ.';
*/

/*

echo '<h2>Εμβαδόν τετραγώνου</h2>';
echo 'Για να υπολογίσω το εμβαδόν του τετραγώνου, πολλαπλασιάζω';
echo '<br/>';
echo 'τη βάση με το ύψος του. Επειδή όμως στο τετράφωνο οι τέσσερεις';
echo '<br/>';
echo 'πλευρές είναι ίσες πολλαπλασιάζω την πλευρά του επί την πλευρά του.';
echo '<br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,200,200\">";
echo "<text x=\"62.5\" y=\"18\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\" >3 εκ.</text>";
echo "<rect x=\"25\" y=\"25\" width=\"140\" height=\"140\"  style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"62.5\" y=\"25\" transform=\"rotate(90,102,102)\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">3 εκ.</text>";
//echo "<text x=\"62.5\" y=\"185\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">3 εκ.</text>";
//echo "<text x=\"62.5\" y=\"185\" transform=\"rotate(90,140,140)\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">3 εκ.</text>";
echo "</svg>";

echo '</br>';
echo 'Εμβαδόν τετραγώνου = 3 x 3 = 9 τ.εκατ.';
*/
dispCloseBody();

?> 
</table>
