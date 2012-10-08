<?php

require_once('include.php');

dispHeader();
dispBody();

//dispShapes_TH(2);

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
			
			<td><h1><font color="#A9B63D">Πλάγιο παραλληλόγραμμο</font><h3></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $xx;?> <?php echo $yy;?> L <?php echo $x3;?> <?php echo $yy;?>  Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="550" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός πλάγιου παραλληλόγραμμου</h2></td>
			
		</tr>
	</table>
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Πλάγιο παραλληλόγραμμο</b> λέγεται το τετράπλευρο που έχει τις απέναντι πλευρές του παράλληλες.<br/></p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Η απόσταση δύο απέναντι πλευρών του πλάγιου παραλληλογράμμου λέγεται <b>ύψος</b>.<br/></p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>		
	</table>
	
	<br/>
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να βρούμε το ύψος του παραλληλογράμμου, πρέπει να τραβήξουμε ένα κάθετο ευθύγραμμο τμήμα<br/>προς ένα από τα ζευγάρια των παράλληλων πλευρών του. <br/>Αυτές οι πλευρές του τότε λέγονται <b>βάσεις </b>και το κάθετο ευθύγραμμο τμήμα, <b>ύψος</b></p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>		
	</table>
	
	<br/><br/>
	<table width="600" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Ιδιότητες πλάγιου παραλληλογράμμου</h2></td>
		</tr>
	</table>
	
	<table width="620" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Οι απέναντι πλευρές είναι ίσες και οι απέναντι γωνίες είναι ίσες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<br/>
		<tr>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Σε κάθε παραλληλόγραμμο οι διαγώνιοι διχοτομούνται.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="550" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Κριτήρια πλάγιου παραλληλογράμμου</h2></td>
		</tr>
	</table>
	
	<table width="670" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Ένα τετράπλευρο είναι πλάγιο παραλληλόγραμμο αν και μόνο αν ισχύει μία από τις παρακάτω <br/>προτάσεις:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>			
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Οι απέναντι πλευρές είναι ίσες ανά δύο.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Δύο απέναντι πλευρές είναι ίσες και παράλληλες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr align="left" valign="top">&nbsp;</tr>	
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_green.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Οι απέναντι γωνίες είναι ίσες ανά δύο.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Οι διαγώνιοί του διχοτομούνται.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="600" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος πλάγιου παραλληλογράμμου</h2></td>
		</tr>
	</table>
	
	<br/><br/>
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
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω την περίμετρο ενός πλάγιου παραλληλογράμμου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Προσθέτω τις τέσσερες πλευρές του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/16_square_blue .png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Προσθέτω το διπλάσιο των δύο πλευρών του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_green.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω το άθροισμα μήκος και πλάτος επί 2.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="680" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Περίμετρος πλάγιου παραλληλογράμμου = ( μήκος + πλάτος ) x 2 </b></p></td>
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
	
	<table width="600" border="0" align="left" cellpadding="0" cellspacing="0">
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
					<text x="90" y="15" font-family="Verdana" font-size="20" fill="black" >4 εκ.</text>"
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $xx;?> <?php echo $yy;?> L <?php echo $x3;?> <?php echo $yy;?>  Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>); stroke:red; stroke-width:5"/>
					<text x="20" y="20" transform="rotate(90,90,108)" font-family="Verdana" font-size="20" fill="black">2 εκ.</text>
				</svg>
			</td>			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>		
			<td align="left" valign="top">&nbsp;</td>
			<td>
				Περίμετρος πλάγιου παραλληλογράμμου = 4 + 2 + 4 + 2 = 12 εκατ.
				</br><br/>
				ή
				</br></br>
				Περίμετρος πλάγιου παραλληλογράμμου = 2 x 4 + 2 x 2 = 8 + 4 = 12 εκατ.
				ή
				</br></br>
				Περίμετρος πλάγιου παραλληλογράμμου = ( 2 + 4 ) x 2 = 6 x 2 = 12 εκατ.
			</td>
		</tr>
	</div>
	</table>
	
	<table width="550" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/></td>
			<td><h2>Εμβαδόν πλάγιου παραλληλογράμμου</h2></td>
		</tr>
	</table>
	
	<br/><br/>
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
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω το εμβαδόν ενός πλάγιου παραλληλογράμμου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω τη βάση με το ύψος του.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table >
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Εμβαδόν πλάγιου παραλληλογράμμου = βάση x ύψος.</b></p></td>
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
	
	<table width="600" border="0" align="left" cellpadding="0" cellspacing="0">
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
					<text x="90" y="15" font-family="Verdana" font-size="20" fill="black" >4 εκ.</text>"
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x1;?> <?php echo $y;?> L <?php echo $xx;?> <?php echo $yy;?> L <?php echo $x3;?> <?php echo $yy;?>  Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
					<text x="65" y="20" transform="rotate(90,65,26)" font-family="Verdana" font-size="20" fill="red">1.5 εκ.</text>
					<line x1="<?php echo $x;?>" y1="<?php echo $y;?>" x2="<?php echo $x;?>" y2="<?php echo $yy;?>"  style="stroke:red;stroke-width:5"/>
					<line x1="<?php echo $x;?>" y1="<?php echo $yy;?>" x2="<?php echo $xx;?>" y2="<?php echo $yy;?>"  style="stroke:red;stroke-width:5"/>
					<line x1="<?php echo $x;?>" y1="<?php echo $yy;?>" x2="<?php echo $x3;?>" y2="<?php echo $yy;?>"  style="stroke:red;stroke-width:5"/>
				</svg>
			</td>
			<td>
				Εμβαδόν πλάγιου παραλληλογράμμου = 4 x 1.5 = 6 τ.εκατ.
			</td>
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="plag_paral.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/paint.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box3"> Ζωγράφισε το πλάγιο παραλληλόγραμμο </div>
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
echo '<h2>Εμβαδόν πλάγιου παραλληλογράμμου</h2>';
echo 'Για να βρω το εμβαδόν του πλάγιου παραλληλογράμμου, πολλαπλασιάζω';
echo '<br/>';
echo 'πολλαπλασιάζω τη βάση με το ύψος του.';
echo '<br/><br/>';
echo 'Εμβαδόν πλάγιου παραλληλογράμμου = βάση x ύψος';
echo '<br/><br/>';

*/









/*
echo '<h1>Παραλληλόγραμμο</h1>';


echo '<h2>Οριμός παραλληλογράμμου</h2>';
echo 'Παραλληλόγραμμο λέγεται το τετράπλευρο που έχει τις απέναντι πλευρές του παράλληλες.';
echo '</br></br>';
echo 'Για να βρούμε το ύψος του παραλληλογράμμου, πρέπει να τραβήξουμε ένα κάθετο ευθύγραμμο τμήμα <br/>';
echo 'προς ένα από τα ζευγάρια των παράλληλων πλευρών του. Αυτές οι πλευρές του τότε λέγονται <b>βάσεις</b><br/>';
echo 'και το κάθετο ευθύγραμμο τμήμα, <b>ύψος</b>.<br/>';

echo '<h2>Ιδιότητες ορθογώνιου παραλληλογράμμου</h2>';
echo '<ul>';
echo '<li>Οι απέναντι πλευρές είναι ίσες</li>';
echo '</br>';
echo '<li>Οι απέναντι γωνίες του είναι ίσες</li>';
echo '</br>';
echo '<li>Μια διγώνιος χωρίζει το παραλληλόγραμμο σε δύο ίσα τρίγωνα</li>';
echo '</br>';
echo '<li>Μια διγώνιος του διχοτομούνται</li>';
echo '</ul>';
*/



/*
echo '<h2>Κριτήρια ορθογώνιου παραλληλογράμμου</h2>';
echo '<ul>';
echo '<li>Είναι παραλληλόγραμμο με μία ορθή γωνία</li>';
echo '</br>';
echo '<li>Είναι παραλληλόγραμμο με ίσες διαγωνίους</li>';
echo '</br>';
echo '<li>Έχει τρείς ορθές γωνίες</li>';
echo '</br>';
echo '<li>Όλες οι γωνίες είναι ίσες</li>';
echo '</ul>';


//sximatismos plagiou parallilogrammou

$x=100;
$y=15;
$length=150;
$width=100;

//deutero simeio
$x1=$x+$length;
	
//trito simeio
$y1=$y+$width;	
	
$a=(180-45-90)*3.14/180;
$xx=cos($a)*($x1-$x1)-sin($a)*($y1-$y)+$x1;
$yy=sin($a)*($x1-$x1)+cos($a)*($y1-$y)+$y;
	
//tetarto simeio
$x3=$xx-$length;
	
echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"150\" height=\"150\" viewbox=\"0,0,250,250\">";
echo "<path d=\"M $x $y L $x1 $y L $xx $yy L $x3 $yy  Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3 \"/>";
//pleures plagiou parallilogrammou
echo "<text x=\"150\" y=$y font-family=\"Verdana\" font-size=\"18\" fill=\"black\" >5 εκ.</text>";
echo "<text x=\"150\" y=\"100\" transform=\"rotate(90,145,10)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">3 εκ.</text>";
//ypsos plagiou parallilogrammou
echo "<line x1=$x y1=$y x2=$x y2=$yy stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=120 y=$y transform=\"rotate(90,$x,$y)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">2 εκ.</text>";
echo "</svg>";
echo '</br></br>';


echo '<h2>Περίμετρος πλάγιου παραλληλογράμμου</h2>';
echo 'Για να υπολογίσω την περίμετρο ενός πλάγιου παραλληλογράμμου';
echo '<ul>';
echo '<li>Προσθέτω τις τέσσερις πλευρές του ή</li>';
echo '</br>';
echo '<li>προσθέτω το διπλάσιο των δύο πλευρών του ή</li>';
echo '</br>';
echo '<li>πολλαπλασιάζω το άθροισμα μήκος και πλάτος επί 2</li>';
echo '</ul>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"150\" height=\"150\" viewbox=\"0,0,250,250\">";
echo "<path d=\"M $x $y L $x1 $y L $xx $yy L $x3 $yy  Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3 \"/>";
//pleures plagiou parallilogrammou
echo "<text x=\"150\" y=$y font-family=\"Verdana\" font-size=\"18\" fill=\"black\" >5 εκ.</text>";
echo "<text x=\"150\" y=\"100\" transform=\"rotate(90,145,10)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">3 εκ.</text>";
//ypsos plagiou parallilogrammou
echo "<line x1=$x y1=$y x2=$x y2=$yy stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=120 y=$y transform=\"rotate(90,$x,$y)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">2 εκ.</text>";
echo "</svg>";


echo '</br>';
echo 'Περίμετρος πλάγιου παραλληλογράμμου = 5 + 3 + 5 + 3 = 16 εκατ. ';
echo 'ή';
echo '</br><br/>';
echo 'Περίμετρος πλάγιου παραλληλογράμμου = 2 x 5 + 2 x 3 = 10 + 6 = 16 εκατ. ';
echo 'ή';
echo '</br><br/>';
echo 'Περίμετρος πλάγιου παραλληλογράμμου = ( 5 + 3 ) x 2 = 8 x 2 = 16 εκατ.';
echo '</br>';

echo '<h2>Εμβαδόν πλάγιου παραλληλογράμμου</h2>';
echo 'Για να βρω το εμβαδόν του πλάγιου παραλληλογράμμου, πολλαπλασιάζω';
echo '<br/>';
echo 'πολλαπλασιάζω τη βάση με το ύψος του.';
echo '<br/><br/>';
echo 'Εμβαδόν πλάγιου παραλληλογράμμου = βάση x ύψος';
echo '<br/><br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"150\" height=\"150\" viewbox=\"0,0,250,250\">";
echo "<path d=\"M $x $y L $x1 $y L $xx $yy L $x3 $yy  Z\" style=\"fill:rgb($c1,$c2,$c3); stroke:black; stroke-width:3 \"/>";
//pleures plagiou parallilogrammou
echo "<text x=\"150\" y=$y font-family=\"Verdana\" font-size=\"18\" fill=\"black\" >5 εκ.</text>";
echo "<text x=\"150\" y=\"100\" transform=\"rotate(90,145,10)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">3 εκ.</text>";
//ypsos plagiou parallilogrammou
echo "<line x1=$x y1=$y x2=$x y2=$yy stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=120 y=$y transform=\"rotate(90,$x,$y)\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">2 εκ.</text>";
echo "</svg>";

echo '</br>';
echo 'Εμβαδόν πλάγιου παραλληλογράμμου = 5 x 2 = 10 τ.εκατ.';
*/
dispCloseBody();
?> 