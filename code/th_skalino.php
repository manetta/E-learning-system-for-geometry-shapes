<?php

require_once('include.php');

dispHeader();
dispBody();

$x1=rand(0,255);
$x2=rand(0,255);
$x3=rand(0,255);
?>

	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1><font color="#A9B63D">Σκαλινό τρίγωνο</font></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M 105 10 L 160 170 L 25 120  Z" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός σκαλινού τριγώνου</h2></td>
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
			<td align="right" valign="middle" class="text"><p><b>Σκαλινό</b> ονομάζουμε το τρίγωνο το οποίο σχεδιάζουμε τυχαία και οι πλευρές του είναι ανίσες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="250" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Πλευρές τριγώνου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσουμε την απόσταση μεταξύ δύο σημείων (x<sub>1</sub> , y<sub>1</sub>) και (x<sub>2</sub> , y<sub>2</sub>) χρησιμοποιούμε<br/> τον τύπο της απόστασης μεταξυ δύο σημείων.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Ο τύπος της απόστασης μεταξυ των σημείων (x<sub>1</sub> , y<sub>1</sub>) και (x<sub>2</sub> , y<sub>2</sub>) είναι ο ακόλουθος:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><img src="images/apos.png" alt=" "/></p></td>
			<td align="left" valign="top">&nbsp;</td>		
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός των πλευρών του τριγώνου</h2></td>
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
					<path d="M 95 20 L 120 170 L 10 120  Z" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
					<text x="95" y="20" font-family="Verdana" font-size="15" fill="black">A (105 , 10)</text>
					<circle cx="95" cy="20" r="2" fill="black" stroke="black" stroke-width="3"/>
					<text x="120" y="170" font-family="Verdana" font-size="12" fill="black">Β (160 , 170)</text>
					<circle cx="120" cy="170" r="2" fill="black" stroke="black" stroke-width="3"/>
					<text x="10" y="120" font-family="Verdana" font-size="15" fill="black">Γ (25 , 120)</text>
					<circle cx="10" cy="120" r="2" fill="black" stroke="black" stroke-width="3"/>
				</svg>
			</td>
			<td><img src="images/mikos_a.png" alt=" "/></td>
			</td>
		</tr>
	</div>
	</table>
	
	<br/><br/>
	<table width="250" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος τριγώνου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσουμε την περίμετρο του σκαλινού τριγώνου:</p></td>
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
			<td align="right" valign="middle" class="text"><p>Προσθέτω τα μήκη των τριών πλευρών του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>	
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Περίμετρος τριγώνου = ΑΒ + ΒΓ + ΓΑ</b></p></td>
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
					<path d="M 95 20 L 120 170 L 10 120  Z" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)"/>
					<text x="95" y="20" font-family="Verdana" font-size="15" fill="black">A (105 , 10)</text>
					<circle cx="95" cy="20" r="2" fill="black" stroke="black" stroke-width="3"/>
					<text x="120" y="170" font-family="Verdana" font-size="12" fill="black">Β (160 , 170)</text>
					<circle cx="120" cy="170" r="2" fill="black" stroke="black" stroke-width="3"/>
					<text x="10" y="120" font-family="Verdana" font-size="15" fill="black">Γ (25 , 120)</text>
					<circle cx="10" cy="120" r="2" fill="black" stroke="black" stroke-width="3"/>
				</svg>
			</td>
			<td>
				Από τα μήκη των πλευρώνν που βρήκα παραπάνω θα είναι:
				</br></br>
				Περίμετρος τριγώνου = 196.19 + 143.96 + 82.23 = 422.38 εκατ.
			</td>
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="skal.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/paint.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box3">Ζωγράφισε το σκαλινό τρίγωνο </div>
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
echo '<h1>Σκαλινό τρίγωνο</h1>';

echo '<h2>Οριμός σκαλινού τριγώνου</h2>';
echo 'Σκαλινό τρίγωνο ονομάζουμε το τρίγωνο το οποίο σχεδιάζουμε τυχαία και οι πλευρές του είναι <br/> ανίσες.<br/>';
echo '<br/><br/>';


echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"500\" height=\"500\" viewbox=\"0,0,200,200\">";
//trigwno
echo "<path d=\"M 105 10 L 160 170 L 25 120  Z\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"1\"/>";
//korufes trigwnou
echo "<circle cx=\"105\" cy=\"10\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"105\" y=\"8\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">A (105 , 10)</text>";
echo "<circle cx=\"160\" cy=\"170\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"140\" y=\"180\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">Β (180 , 170)</text>";
echo "<circle cx=\"25\" cy=\"120\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"0\" y=\"135\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">Γ (25 , 120)</text>";
echo "</svg>";

echo '<br/>';
echo '<h2>Πλευρές τριγώνου</h2>';
echo 'Για να υπολογίσουμε την απόσταση μεταξύ δύο σημείων (x<sub>1</sub> , y<sub>1</sub>) 
	και (x<sub>2</sub> , y<sub>2</sub>)<br/>
	χρησιμοποιούμε τον τύπο:';
echo '</br></br>';
echo '<font color=red> ΝΑ ΒΑΛΩ ΡΙΖΑ ΜΕ CSS</font>';
echo '</br></br>';
echo 'd = (x<sub>1</sub> - x<sub>2</sub>)<sup>2</sup> + (y<sub>1</sub> - y<sub>1</sub>)<sup>2</sup>';
echo '<br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"500\" height=\"500\" viewbox=\"0,0,200,200\">";
//trigwno
echo "<path d=\"M 105 10 L 160 170 L 25 120  Z\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"1\"/>";
//korufes trigwnou
echo "<circle cx=\"105\" cy=\"10\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"105\" y=\"8\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">A (105 , 10)</text>";
echo "<circle cx=\"160\" cy=\"170\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"140\" y=\"180\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">Β (180 , 170)</text>";
echo "<circle cx=\"25\" cy=\"120\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"0\" y=\"135\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">Γ (25 , 120)</text>";
echo "</svg>";




echo '<br/>';
echo 'Οπότε οι πλευρές του παραπάνω τριγώνου θα είναι:';
echo '<br/><br/>';
echo '<font color=red> ΝΑ ΒΑΛΩ ΡΙΖΑ ΜΕ CSS</font>';
echo '<br/>';
echo 'ΑΒ  = (105 - 180)<sup>2</sup> + (10 - 170)<sup>2</sup>';
echo '<br/>';
echo 'ΑΒ  = (-75)<sup>2</sup> + (-160)<sup>2</sup>';
echo '<br/>';
echo 'ΑΒ  = 5625 + 25600';
echo '<br/>';
echo 'ΑΒ  = 176,71';
echo '<br/><br/>';
echo '<font color=red> ΝΑ ΒΑΛΩ ΡΙΖΑ ΜΕ CSS</font>';
echo '<br/>';
echo 'ΒΓ  = (180 - 25)<sup>2</sup> + (170 - 120)<sup>2</sup>';
echo '<br/>';
echo 'ΒΓ  = (155)<sup>2</sup> + (50)<sup>2</sup>';
echo '<br/>';
echo 'ΒΓ  = 24025 + 2500';
echo '<br/>';
echo 'ΒΓ  = 162,86';
echo '<br/><br/>';
echo '<font color=red> ΝΑ ΒΑΛΩ ΡΙΖΑ ΜΕ CSS</font>';
echo '<br/>';
echo 'ΑΓ  = (105 - 25)<sup>2</sup> + (10 - 120)<sup>2</sup>';
echo '<br/>';
echo 'ΑΓ  = (80)<sup>2</sup> + (12100)<sup>2</sup>';
echo '<br/>';
echo 'ΑΓ  = 6400 + 2500';
echo '<br/>';
echo 'ΑΓ  = 110,36';




echo '<br/>';
echo '<h2>Περίμετρος σκαλινού τριγώνου</h2>';
echo 'Για να υπολογίσουμε την περίμετρο ενός τριγώνου προσθέτουμε τις τρείς πλευρές του';
echo '<br/><br/>';
echo 'Περίμετρος ορθογωνίου τριγώνου = ΑΒ + ΒΓ + ΑΓ';
echo '<br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"500\" height=\"500\" viewbox=\"0,0,200,200\">";
//trigwno
echo "<path d=\"M 105 10 L 160 170 L 25 120  Z\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"1\"/>";
//korufes trigwnou
echo "<circle cx=\"105\" cy=\"10\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"105\" y=\"8\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">A (105 , 10)</text>";
echo "<circle cx=\"160\" cy=\"170\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"140\" y=\"180\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">Β (180 , 170)</text>";
echo "<circle cx=\"25\" cy=\"120\" r=\"0.5\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"0\" y=\"135\" font-family=\"Verdana\" font-size=\"8\" fill=\"black\">Γ (25 , 120)</text>";
echo "</svg>";

echo '<br/>';
echo 'Περίμετρος σκαλινού τριγώνου = 176,71 + 162,81 + 110,36';
echo '<br/><br/>';
echo 'Περίμετρος σκαλινού τριγώνου  = 449,88 εκ.';
*/


dispCloseBody();
?> 