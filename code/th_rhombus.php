<?php

require_once('include.php');

dispHeader();
dispBody();

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
	

	
//diagwnios ΑΓ
$d1=round(sqrt(pow(($x-$xx1),2)+pow(($y-$yy1),2)),2);
//diagwnios ΔΒ
$d2=round(sqrt(pow(($x2-$xx),2)+pow(($y2-$yy),2)),2);

//http://users.sch.gr/spangs/kepler/ellipsis.htm
?>
	<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1><font color="#A9B63D">Ρόμβος</font></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx1;?> <?php echo $yy1;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός ρόμβου</h2></td>
			
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
			<td align="right" valign="middle" class="text"><p><b>Ρόμβος</b> λέγεται το παραλληλόγραμμο που έχει δύο διαδοχικές πλευρές ίσες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Ιδιότητες ρόμβου</h2></td>
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
			<td align="right" valign="middle" class="text"><p>Οι διαγωνιές του τέμνονται κάθετα.</p></td>
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
			<td align="right" valign="middle" class="text"><p>Οι διαγωνιές του διχοτομούν τις γωνίες του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Κριτήρια ρόμβου</h2></td>
			
		</tr>
	</table>
	
	<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">		
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
			<td align="right" valign="middle" class="text"><p>Ένα τετράπλευρο θα είναι ρόμβος αν ισχύει μία από τις παρακάτω προτάσεις:</p></td>
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
			<td align="right" valign="middle" class="text"><p>Έχει όλες του τις πλευρές ίσες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Είναι παραλληλόγραμμο και έχει δύο διαδοχικές του πλευρές ίσες.</p></td>
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
			<td align="right" valign="middle" class="text"><p>Είναι παραλληλόγραμμο και οι διαγωνιές του τέμνονται κάθετα.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Είναι παραλληλόγραμμο και μία διαγωνιός του διχοτομεί μία γωνία του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος ρόμβου</h2></td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω την περίμετρο ενός ρόμβου:</p></td>
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
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Περίμετρος ρόμβου = ( μήκος + πλάτος ) x 2 </b></p></td>
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
					<text x="62.5" y="18" transform="rotate(40,65,100 )" font-family="Verdana" font-size="20" fill="black" >3 εκ.</text>"
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx1;?> <?php echo $yy1;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>); stroke:red; stroke-width:5;" />
				</svg>
			</td>
			<td>
				Περίμετρος ρόμβου = 3 + 3 + 3 + 3 = 12 εκατ.
				</br><br/>
				ή
				</br></br>
				Περίμετρος ρόμβου = 3 x 4 = 12 εκατ.
			</td>
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/></td>
			<td><h2>Εμβαδόν ρόμβου</h2></td>
		</tr>
	</table>
	
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω το εμβαδόν του ρόμβου:</p></td>
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
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω τις δύο διαγωνίους του και διαιρώ με το 2.</p></td>
			<td align="left" valign="top">&nbsp;</td>		
		</tr>
	</table>
	
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td><img src="images/em_rom.png" alt=" "/></td>
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
					
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx1;?> <?php echo $yy1;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)" />
					
					<line x1="<?php echo $x;?>" y1="<?php echo $y;?>" x2="<?php echo $xx1;?>" y2="<?php echo $yy1;?>" style="stroke:red; stroke-width:5;"/>
					<line x1="<?php echo $x2;?>" y1="<?php echo $y2;?>" x2="<?php echo $xx;?>" y2="<?php echo $yy;?>" style="stroke:red; stroke-width:5;"/>
					<text x="105" y="50"  font-family="Verdana" font-size="15" fill="black" >δ1 = 6 εκ.</text>"
					<text x="<?php echo $xx;?>" y="<?php echo $yy;?>" transform="rotate(-5,<?php echo $yy;?>,<?php echo $yy;?> )" font-family="Verdana" font-size="15" fill="black" >δ2 = 4 εκ.</text>"
				</svg>
			</td>
			<td><img src="images/em_rom_as.png" alt=" "/></td><br/>
			</td>
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="rhombus.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/paint.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box3"> Ζωγράφισε το ρόμβο </div>
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
echo '<h1>Ρόμβος</h1>';

echo '<h2>Οριμός ρόμβου</h2>';
echo '<b>Ρόμβος</b> λέγεται το παραλληλόγραμμο που έχει δύο διαδοχικές πλευρές ίσες.<br/>';
*/
/*
echo '<h2>Ιδιότητες ρόμβου</h2>';
echo '<ul>';
echo '<li>Οι διαγωνιές του τέμνονται κάθετα</li>';
echo '</br>';
echo '<li>Οι διαγωνιές του διχοτομούν τις γωνίες του</li>';
echo '</ul>';


echo '<h2>Κριτήρια ρόμβου</h2>';
echo 'Ένα τετράπλευρο θα είναι ρόμβος αν:<br/>';
echo '<ul>';
echo '<li>Έχει όλες του τις πλευρές ίσες</li>';
echo '</br>';
echo '<li>Είναι παραλληλόγραμμο και έχει δύο διαδοχικές του πλευρές ίσες</li>';
echo '</br>';
echo '<li>Είναι παραλληλόγραμμο και οι διαγωνιές του τέμνονται κάθετα</li>';
echo '</br>';
echo '<li>Είναι παραλληλόγραμμο και μία διαγωνιός του διχοτομεί μία γωνία του.</li>';
echo '</ul>';


$x=100;
$y=20;
$degrees=80;
$length=80;

	
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
	

	
//diagwnios ΑΓ
$d1=round(sqrt(pow(($x-$xx1),2)+pow(($y-$yy1),2)),2);
//diagwnios ΔΒ
$d2=round(sqrt(pow(($x2-$xx),2)+pow(($y2-$yy),2)),2);

	
echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,200,200\">";
//sximatismos romvou
echo "<path d=\"M $x $y L $x2 $y2 L $xx1 $yy1 L $xx $yy Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3;\" />";
echo "</svg>";


echo '<h2>Περίμετρος ρόμβου</h2>';
echo 'Για να υπολογίσω την περίμετρο ενός ρόμβου, προσθέτουμε τις τέσσερεις πλευρές του ή:<br/>';
echo 'πολλαπλασιάζουμε την πλευρά του επί τέσσερα.';
echo '<br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,200,200\">";
//sximatismos romvou
echo "<path d=\"M $x $y L $x2 $y2 L $xx1 $yy1 L $xx $yy Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3;\" />";
//mikos pleuras
echo "<text x=\"132\" y=$y transform=rotate(40,$x,$y) font-family=\"Verdana\" font-size=\"20\" fill=\"black\" > 5 εκ.</text>";	
echo "</svg>";	
echo '</br>';
echo 'Περίμετρος ρόμβου = 4 * 5 = 20 εκατ.';
echo '</br><br/>';



echo '<h2>Εμβαδόν ρόμβου</h2>';
echo 'Για να βρω το εμβαδόν του ρόμβου πολλαπλασιάζω τις δύο διαγωνίους του και διαιρώ με το 2 <br/>έλλειψης<br/>';
echo '</br>';
echo '<h2 style="background-color:red;">ΚΛΑΣΜΑ</h2>';
echo 'Εμβαδόν ρόμβου = δ<sub>1</sub> * δ<sub>2</sub> / 2';
echo '</br></br>';
echo 'όπου δ<sub>1</sub> , δ<sub>2</sub> οι δύο διαγώνιες του ρόμβου.';
echo '<br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"200\" height=\"200\" viewbox=\"0,0,200,200\">";
//sximatismos romvou
echo "<path d=\"M $x $y L $x2 $y2 L $xx1 $yy1 L $xx $yy Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3;\" />";
//diagwnioi romboy
echo "<line x1=$x y1=$y x2=$xx1 y2=$yy1 stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=140 y=20 transform=rotate(85,$x,$y) font-family=\"Verdana\" font-size=\"20\" fill=\"black\" > δ1 </text>";	
echo "<line x1=$x2 y1=$y2 x2=$xx y2=$yy stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=60 y=$yy transform=rotate(-5,$xx,$yy) font-family=\"Verdana\" font-size=\"20\" fill=\"black\" > δ2 </text>";
echo "</svg>";	

echo '<br/>';
echo 'όπου δ<sub>1</sub> = 7 εκατ., δ<sub>2</sub> = 5 εκατ.';


echo '</br><br/>';
echo 'Εμβαδόν ρόμβου =7 * 5 = 35 τ.εκατ.';
*/
dispCloseBody();
?> 