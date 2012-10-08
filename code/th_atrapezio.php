<?php

require_once('include.php');

dispHeader();
dispBody();


$c1=rand(0,255);
$c2=rand(0,255);
$c3=rand(0,255);
?>

	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1><font color="#A9B63D">Τραπέζιο</font></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M 30 30 L 110 30 L 170 130 L 15 130 Z\" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός τραπεζίου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Τραπέζιο</b> είναι το τετράπελυρο που έχει δύο πλευρές του παράλληλες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος τραπεζίου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω την περίμετρο ενός τραπεζίου:</p></td>
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
					<path d="M 40 30 L 110 30 L 170 130 L 15 130 Z\" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>); stroke:red; stroke-width:5" />
					<text x="52" y="26" font-family="Verdana" font-size="20" fill="black">3 εκ.</text>
					<text x="100" y="30" transform="rotate(60,105,50)" font-family="Verdana" font-size="20" fill="black">4 εκ.</text>
					<text x="60" y="150" font-family="Verdana" font-size="20" fill="black">5 εκ.</text>
					<text x="0" y="120" transform="rotate(-80,0,100)" font-family="Verdana" font-size="20" fill="black">3.5 εκ.</text>
				</svg>
			</td>
			<td>
				Περίμετρος τραπεζίου = 3 + 4 + 5 + 3.5 = 15.5 εκατ.
			</td>
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/></td>
			<td><h2>Εμβαδόν τραπεζίου</h2></td>
		</tr>
	</table>
	
	<table width="690" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω το εμβαδόν του τραπεζίου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="660" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Προσθέτω τις δύο βάσεις του και τις πολλαπλασιάζω με το ύψος του. Μετά διαιρώ το γινόμενο με το 2.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="660" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
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
					<path d="M 40 30 L 110 30 L 170 130 L 15 130 Z\" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
					<line x1="40" y1="30" x2="110" y2="30" stroke="red" stroke-width="5"/>
					<line x1="170" y1="130" x2="15" y2="130" stroke="red" stroke-width="5"/>
					<line x1="42" y1="30" x2="42" y2="130" stroke="red" stroke-width="5"/>
					<text x="52" y="26" font-family="Verdana" font-size="20" fill="black">3 εκ.</text>
					<text x="60" y="150" font-family="Verdana" font-size="20" fill="black">5 εκ.</text>
					<text x="40" y="30" transform="rotate(90,41,38)" font-family="Verdana" font-size="20" fill="black">3.5 εκ.</text>
				</svg>
			</td>
			<td align="right" valign="middle" class="text"><img src="images/em_tr_as.png" alt=" "/></td>
		</tr>
	<div/>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="atrapezio.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/paint.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Ζωγράφισε το τραπέζιο </div>
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
echo '<h1>Τραπέζιο</h1>';

echo '<h2>Οριμός τραπεζίου</h2>';

echo '<b>Τραπέζιο</b> είναι το τετράπελυρο που έχει δύο πλευρές του παράλληλες';
echo '<br/>';


$x=150;
$y=150;
$mibase=85;
$mebase=220;
$height=150;
	
//deutero simeio
$x1=$x+$mibase;

//trito simeio
//metatropi apo moires se aktinia
$mb=(-1)*(150-140)*3.14/180;
$a=$height/cos($mb);
$y1=$y+$a;

$xx=cos($mb)*($x1-$x1)-sin($mb)*($y1-$y)+$x1;
$yy=sin($mb)*($x1-$x1)+cos($mb)*($y1-$y)+$y;
	
//tetarto simeio
$x2=$xx-$mebase;
 
//ypsos
$h=$y+$height;


echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,300,300\">";
//sximatismos trapeziou
echo "<path d=\"M $x $y L $x1 $y L $xx $yy L $x2 $yy Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3;\" />";
echo "<line x1=$x y1=$y x2=$x y2=$h stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=163 y=$y font-family=\"Verdana\" font-size=\"18\" fill=\"black\">3 εκατ.</text>";
echo "<text x=160 y=$yy font-family=\"Verdana\" font-size=\"18\" fill=\"black\">8 εκατ.</text>";
echo "<text x=200 y=305 transform=\"rotate(-90,160,$yy)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">6 εκατ.</text>";
echo "</svg>";

echo '</br>';
echo '<h2>Περίμετρος τραπεζίου</h2>';
echo 'Για να βρω την περίμετρο ενός τραπεζίου προσθέτω τις τέσσερις πλευρές του';
echo '</br>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,300,300\">";
//sximatismos trapeziou
echo "<path d=\"M $x $y L $x1 $y L $xx $yy L $x2 $yy Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3;\" />";
//echo "<line x1=$x y1=$y x2=$x y2=$h stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=163 y=$y font-family=\"Verdana\" font-size=\"18\" fill=\"black\">3 εκατ.</text>";
echo "<text x=160 y=$yy font-family=\"Verdana\" font-size=\"18\" fill=\"black\">8 εκατ.</text>";
echo "<text x=$x2 y=355 transform=\"rotate(-90,$x2,$yy)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">7 εκατ.</text>";
echo "<text x=270 y=$yy transform=\"rotate(-90,240,$yy)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">6 εκατ.</text>";
echo "</svg>";

echo '</br>';
echo 'Περίμετρος τραπεζίου = 3 + 7 + 8 + 6 = 24 εκατ.';
echo '</br><br/>';


echo '</br>';
echo '<h2>Εμβαδόν τραπεζίου</h2>';
echo 'Για να βρω το εμβαδόν ενός τραπεζίου προσθέτω τις δύο βάσεις του και <br/>τις πολλαπλασιάζω με το ύψος του. Μετά διαιρώ το γινόμενο με το 2.';
echo 'Οπότε θα είναι:';
echo '<h2 style="background-color:red;">ΚΛΑΣΜΑ</h2>';
echo 'Εμβαδόν τραπεζίου = ( Β + β ) * υ /2';
echo '</br>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,300,300\">";
//sximatismos trapeziou
echo "<path d=\"M $x $y L $x1 $y L $xx $yy L $x2 $yy Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3;\" />";
echo "<line x1=$x y1=$y x2=$x y2=$h stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=163 y=$y font-family=\"Verdana\" font-size=\"18\" fill=\"black\">3 εκατ.</text>";
echo "<text x=160 y=$yy font-family=\"Verdana\" font-size=\"18\" fill=\"black\">8 εκατ.</text>";
echo "<text x=75 y=400 transform=\"rotate(-90,$x2,$yy)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">5 εκατ.</text>";
echo "</svg>";

echo '</br></br>';
echo '<h2 style="background-color:red;">ΚΛΑΣΜΑ</h2>';
echo 'Εμβαδόν τραπεζίου = ( 3 + 8 ) / 2 = 5,5 εκατ.';
echo '</br><br/>';
*/

dispCloseBody();

?> 
</table>