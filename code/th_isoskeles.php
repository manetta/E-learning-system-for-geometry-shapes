<?php

require_once('include.php');

dispHeader();
dispBody();

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

	<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1><font color="#A9B63D">Ισοσκελές τρίγωνο</font></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός ισοσκελούς τριγώνου</h2></td>
			
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Ισοσκελές τρίγωνο ονομάζουμε το τρίγωνο που έχει τις δύο πλευρές του ίσες.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Ιδιότητες ισοσκελούς τριγώνου</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Η ευθεία της διαμέσου που αντιστοιχεί στην βάση είναι άξονας συμμετρίας του ισοσκελούς τριγώνου.</p></td>
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
			<td align="right" valign="middle" class="text"><p>Η διάμεσος που αντιστοιχεί στην βάση του ισοσκελούς τριγώνου είνα ύψος και διχοτόμος.</p></td>
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
			<td align="right" valign="middle" class="text"><p>Οι προσκείμενες γωνίες στη βάση του ισοσκελούς είναι ίσες</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<br/>
	</table>
	
	<br/><br/>
	<table width="450" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Γωνία κορυφής ισοσκελούς τριγώνου</h2></td>
		</tr>
	</table>

	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Σε κάθε τρίγωνο το άθροισμα των τριών γωνίων του είναι 180<sup>ο</sup>.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	
	
	<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Γωνία κορυφήε = 180<sup>ο</sup/> -  2 x προσκέιμενη στη βάση γωνία</b></p></td>
			<td align="left" valign="top">&nbsp;</td>		
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός γωνίας κορυφής</h2></td>
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
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
				</svg>
			</td>
			<td>
				Προσκείμενη στη βάση γωνία = 40<sup>ο</sup/>.
				</br><br/>
				ή
				</br></br>
				Γωνία κορυφής = 180<sup>ο</sup/> - 2 x 40<sup>ο</sup/> = 180<sup>ο</sup/> - 80<sup>ο</sup/> = 100<sup>ο</sup/> 
			</td>
		</tr>
	</div>
	</table>
	
	<br/><br/>
	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Βάση ισοσκελούς τριγώνου</h2></td>
		</tr>
	</table>
	

	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσουμε το μήκος της βάσης ενός σισοσκελούς τριγώνου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><img src="images/b_is.png" alt=" "/></p></td>
			<td align="right" valign="middle" class="text">Οπότε βάση = 2 x συν(προσκήμενης στη βάση γωνίας) x μήκος πλευράς</p></td>
			<td align="left" valign="top">&nbsp;</td>		
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός βάσης τριγώνου</h2></td>
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
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
					<line x1="<?php echo $x;?>" y1="<?php echo $y;?>" x2="<?php echo $x2;?>" y2="<?php echo $y2;?>" style="stroke:red; stroke-width:3"/>
				</svg>
			</td>
			<td>
				Βάση τριγώνου = 2 x συν(40<sup>ο</sup/>) x 5 = 2 x 0.76 x 5 = 7.66 εκ.
			</td>
		</tr>
	</div>
	</table>
	
	<br/><br/>
	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Ύψος ισοσκελούς τριγώνου</h2></td>
		</tr>
	</table>
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσουμε το ύψος ενός ισοσκελούς τριγώνου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text">ύψος = ημ(προσκήμενης στη βάση γωνίας) x μήκος πλευράς</p></td>
			<td align="left" valign="top">&nbsp;</td>		
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός βάσης τριγώνου</h2></td>
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
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
					<line x1="<?php echo $x;?>" y1="<?php echo $y;?>" x2="<?php echo $x2;?>" y2="<?php echo $y2;?>" style="stroke:red; stroke-width:3"/>
				</svg>
			</td>
			<td>
				'Υψος = ημ(40<sup>ο</sup/>) x 5 = 0.64 x 5 = 3.2 εκ.
			</td>
		</tr>
	</div>
	</table>

	<br/><br/>
	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Εμβαδόν ισοσκελούς τριγώνου</h2></td>
		</tr>
	</table>
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσουμε το εμβαδόν ενός ισοσκελούς τριγώνου:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text">εμβαδόν = 1/2 x βάση x ύψος</p></td>
			<td align="left" valign="top">&nbsp;</td>		
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός εμβαδόν τριγώνου</h2></td>
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
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>)"/>
					<line x1="<?php echo $xx;?>" y1="<?php echo $yy;?>" x2="<?php echo $x2;?>" y2="<?php echo $y2;?>" style="stroke:red; stroke-width:3"/>
					<line x1="<?php echo $x;?>" y1="<?php echo $y;?>" x2="<?php echo $x;?>" y2="<?php echo $yy;?>" style="stroke:red; stroke-width:3"/>
				</svg>
			</td>
			<td>
				Εμβαδόν =1/2 x 7.66 x 3.2 = 12.26 τ.εκ
			</td>
		</tr>
	</div>
	</table>
	
	<br/><br/>
	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος ισοσκελούς τριγώνου</h2></td>
		</tr>
	</table>
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσουμε την περίμετρο ενός ισοσκελούς τριγώνου:</p></td>
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
			<td align="right" valign="middle" class="text"><p>Προσθέτω τα μήκη των τριών πλευρών του τριγώνου.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="500" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός περιμέτρου τριγώνου</h2></td>
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
					<path d="M <?php echo $x;?> <?php echo $y;?> L <?php echo $x2;?> <?php echo $y2;?> L <?php echo $xx;?> <?php echo $yy;?> Z" style="fill:rgb(<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>); stroke:red; stroke-width:3"/>
				</svg>
			</td>
			<td>
				Περίμετρος =5 + 5 + 3.2 = 13.2 εκ
			</td>
		</tr>
	</div>
	</table>
	
<?php
/*
echo '<h1>Ισοσκελές τρίγωνο</h1>';

echo '<h2>Οριμός ισοσκελούς τριγώνου</h2>';
echo 'Ισοσκελές τρίγωνο ονομάζουμε το τρίγωνο που έχει τις δύο πλευρές του ίσες.<br/>';
echo '<br/><br/>';

echo '<h2>Ιδιότητες ισοσκελούς τριγώνου</h2>';
echo '<ul>';
echo '<li>Η ευθεία της διαμέσου που αντιστοιχεί στην βάση είναι άξονας συμμετρίας του ισοσκελούς τριγώνου</li>';
echo '</br>';
echo '<li>Η διάμεσος που αντιστοιχεί στην βάση του ισοσκελούς τριγώνου είνα ύψος και διχοτόμος</li>';
echo '</br>';
echo '<li>Οι προσκείμενες γωνίες στη βάση του ισοσκελούς είναι ίσες</li>';
echo '</ul>';


echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"125\" height=\"125\" viewbox=\"0,0,220,220\">";
echo "<text x=\"102.5\" y=\"18\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\" >5 εκ.</text>";
echo "<rect x=\"25\" y=\"25\" width=\"180\" height=\"100\"  style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"62.5\" y=\"200\" transform=\"rotate(90,102,102)\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">3 εκ.</text>";
echo "<circle cx=\"100\" cy=\"20\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=\"87,13\" cy=\"53\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "</svg>";
*/
dispCloseBody();
?> 