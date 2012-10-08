<?php

require_once('include.php');

dispHeader();
dispBody();


$c1=rand(0,255);
$c2=rand(0,255);
$c3=rand(0,255);
?>

	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1><font color="#A9B63D">Ορθογώνιο τραπέζιο</font></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M 30 30 L 110 30 L 160 130 L 30 130 Z\" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="450" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός ορθογώνιου τραπεζίου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Όταν σε ένα τραπέζιο µια από τις µη παράλληλες πλευρές του είναι κάθετη στις βάσεις, <br/>τότε αυτό λέγεται <b>ορθογώνιο τραπέζιο</b>.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="470" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος ορθογώνιου τραπεζίου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω την περίμετρο ενός ορθογωνίου τραπεζίου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
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
					<path d="M 40 30 L 110 30 L 170 130 L 40 130 Z\" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>); stroke:red; stroke-width:5" />
					<text x="52" y="26" font-family="Verdana" font-size="20" fill="black">3 εκ.</text>
					<text x="100" y="30" transform="rotate(60,105,50)" font-family="Verdana" font-size="20" fill="black">4.5 εκ.</text>
					<text x="60" y="150" font-family="Verdana" font-size="20" fill="black">5 εκ.</text>
					<text x="60" y="125" transform="rotate(-90,40,135)" font-family="Verdana" font-size="20" fill="black">3.5 εκ.</text>
				</svg>
			</td>
			<td>
				Περίμετρος τραπεζίου = 3 + 4.5 + 5 + 3.5 = 16 εκατ.
			</td>
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/></td>
			<td><h2>Εμβαδόν ορθογώνιου τραπεζίου</h2></td>
		</tr>
	</table>
	
		<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω το εμβαδόν του ορθογώνιου τραπεζίου:</p></td>
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
			<td align="right" valign="middle" class="text"><p>Προσθέτω τις δύο βάσεις του, τις πολλαπλασιάζω με το ύψος του. Μετά διαιρώ το γινόμενο με το 2.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><img src="images/em_tr.png" alt=" "/></td>
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
					<path d="M 40 30 L 110 30 L 170 130 L 40 130 Z\" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
					<text x="52" y="26" font-family="Verdana" font-size="20" fill="black">3 εκ.</text>
					<text x="100" y="30" transform="rotate(60,105,50)" font-family="Verdana" font-size="20" fill="black">4.5 εκ.</text>
					<text x="60" y="150" font-family="Verdana" font-size="20" fill="black">5 εκ.</text>
					<text x="60" y="125" transform="rotate(-90,40,135)" font-family="Verdana" font-size="20" fill="black">3.5 εκ.</text>
					<line x1="40" y1="30" x2="110" y2="30" stroke="red" stroke-width="5"/>
					<line x1="40" y1="130" x2="170" y2="130" stroke="red" stroke-width="5"/>
					<line x1="40" y1="30" x2="40" y2="130" stroke="red" stroke-width="5"/>
				</svg>
			</td>
			<td align="right" valign="middle" class="text"><img src="images/em_otr_ak.png" alt=" "/></td>
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
				<div id="Message" class="box3"> Ζωγράφισε το ορθογώνιο τραπέζιο </div>
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
echo '<h1>Ορθογώνιο τραπέζιο</h1>';

echo '<h2>Οριμός ορθογώνιου τραπέζιου</h2>';

echo 'Όταν σε ένα τραπέζιο µια από τις µη παράλληλες πλευρές του είναι<br/>
κάθετη στις βάσεις, τότε αυτό λέγεται ορθογώνιο τραπέζιο';
echo '<br/><br/>';


$x=30;
$y=30;
$mibase=85;
$mebase=220;
$height=150;
	
//deutero simeio
$y1=$y+$height;


//trito simeio
$x1=$x+$mebase;

//tetarto simeio
$x2=$x+$mibase;

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,300,300\">";
//sximatismos orthogwniou trapeziou
echo "<path d=\"M $x $y L $x $y1 L $x1 $y1 L $x2 $y Z\" style=\"fill:rgb($c1,$c2,$c3)\" />";
echo "</svg>";

echo '</br>';
echo '<h2>Περίμετρος ορθογώνιου τραπεζίου</h2>';
echo 'Για να βρω την περίμετρο ενός ορθογώνιου τραπεζίου προσθέτω τις τέσσερις πλευρές του';
echo '</br></br>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,300,300\">";
//sximatismos orthogwniou trapeziou
echo "<path d=\"M $x $y L $x $y1 L $x1 $y1 L $x2 $y Z\" style=\"fill:rgb($c1,$c2,$c3)\" />";
//mikoi pleurwn
echo "<text x=$x y=$y font-family=\"Verdana\" font-size=\"18\" fill=\"black\">3 εκατ.</text>";
echo "<text x=80 y=$y transform=\"rotate(90,$x,$y)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">4 εκατ.</text>";
echo "<text x=$x2 y=$y1 font-family=\"Verdana\" font-size=\"18\" fill=\"black\">6 εκατ.</text>";
echo "<text x=250 y=$y1 transform=\"rotate(-90,180,$y1)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">7 εκατ.</text>";
echo "</svg>";

echo '</br>';
echo 'Περίμετρος τραπεζίου = 4 + 6 + 7 + 3 = 20 εκατ.';
echo '</br><br/>';



echo '</br>';
echo '<h2>Εμβαδόν ορθογώνιου τραπεζίου</h2>';
echo 'Για να βρω το εμβαδόν ενός τραπεζίου προσθέτω τις δύο βάσεις του, <br/>τις πολλαπλασιάζω με το ύψος του. Μετά διαιρώ το γινόμενο με το 2.';
echo 'Οπότε θα είναι:';
echo '<h2 style="background-color:red;">ΚΛΑΣΜΑ</h2>';
echo 'Εμβαδόν τραπεζίου = ( Β + β ) * υ /2';
echo '</br></br>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,300,300\">";
//sximatismos orthogwniou trapeziou
echo "<path d=\"M $x $y L $x $y1 L $x1 $y1 L $x2 $y Z\" style=\"fill:rgb($c1,$c2,$c3)\" />";
//mikoi pleurwn
echo "<text x=$x y=$y font-family=\"Verdana\" font-size=\"18\" fill=\"black\">3 εκατ.</text>";
echo "<text x=80 y=$y transform=\"rotate(90,$x,$y)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">4 εκατ.</text>";
echo "<text x=$x2 y=$y1 font-family=\"Verdana\" font-size=\"18\" fill=\"black\">6 εκατ.</text>";
//echo "<text x=250 y=$y1 transform=\"rotate(-90,180,$y1)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">7 εκατ.</text>";
echo "</svg>";

echo '</br>';
echo '<h2 style="background-color:red;">ΚΛΑΣΜΑ</h2>';
echo 'Εμβαδόν ορθογώνιου τραπεζίου = ( 3 + 6 ) * 4 / 2 = 20 εκατ.';
echo '</br><br/>';
*/

dispCloseBody();

?> 
</table>