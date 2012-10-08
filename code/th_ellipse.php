<?php

require_once('include.php');

dispHeader();
dispBody();

$x1=rand(0,255);
$x2=rand(0,255);
$x3=rand(0,255);

//axones ellipsis
$x1=105-90;
$y1=105-60;
$x2=105+90;
$y2=105+60;

//esties ellipsis	
$xe1=($x1+105)/2;
$xe2=($x2+105)/2;
?>

	<table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			
			<td><h1><font color="#A9B63D">Έλλειψη</font></h1></td>
			<td>	
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="125" height="125" viewbox="0,0,200,200">
					<ellipse cx="95" cy="70" rx="90" ry="60" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" />
				</svg>
			</td>
		</tr>
	</table>
	
	<table width="310" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Οριμός έλλειψης</h2></td>
		</tr>
	</table>
	
	<table width="630" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Έλλειψη</b> καλείται ο γεωμετρικός τόπος των σημείων του επιπέδου, των οποίων<br/>
	το άθροισμα των αποστάσεων από δύο δεδομένα σημεία είναι σταθερό.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="right" valign="middle" class="text"><p></p></td>
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Τα δεδομένα σημεία ονομάζονται <b>εστίες</b> της έλλειψης και συμβολίζονται με E1, E2.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="right" valign="middle" class="text"><p></p></td>
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Η απόσταση μεταξύ των δύο εστιών ονομάζεται <b>εστιακή απόσταση</b>.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="right" valign="middle" class="text"><p></p></td>
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Κάθε ευθύγραμμο τμήμα που έχει ως άκρα δύο διαφορετικά σημεία της έλλειψης <br/>και διέρχεται από το κέντρο αυτής ονομάζεται <b>διάμετρος</b> της έλλειψης.</td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<tr>
			<td align="right" valign="middle" class="text"><p></p></td>
		</tr>
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Η έλλειψη έχει δύο κύριες διαμέτρους που είναι ο <b>μικρός</b> και ο <b>μεγάλος άξονας</b> της.<br/>Το μισό των μικρού και του μεγάλου αξονάς της έλλειψης μας δίνει τις αντίστοιχες ακτίνες.</td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<?php //http://www.calcfun.com/calc-25-perimetros-elleipsis.html?>
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Περίμετρος έλλειψης</h2></td>
		</tr>
	</table>
	
	<br/>
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω την περίμετρο μίας έλλειψης χρησιμοποιούμε τον ακόλουθο τύπο:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="630" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td><img src="images/per_ell.png" alt=" "/>  </td>		
		</tr>
		<tr>		
			<td align="right" valign="middle" class="text"><p><b>όπου π = 3.14 ,</b></p></td>	
			<td align="right" valign="middle" class="text"><p><b>r<sub>1</sub> η ακτίνα του μεγάλου άξονα ,</b></p></td>	
			<td align="right" valign="middle" class="text"><p><b>r<sub>2</sub> η ακτίνα του μικρού άξονα</b></p></td>	
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
					<ellipse cx="95" cy="70" rx="90" ry="50" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" />
					<line x1="95" y1="70" x2="5" y2="70" stroke="red" stroke-width="3"/>
					<text x="15" y="60" font-family="Verdana" font-size="10" fill="black">r1 = 3 εκ.</text>
					<line x1="95" y1="70" x2="95" y2="20" stroke="red" stroke-width="3"/>
					<text x="10" y="60" transform="rotate(90,80,82)" font-family="Verdana" font-size="10" fill="black">r2 = 1.5 εκ.</text>
				</svg>
			</td>
			<td><img src="images/p_ell_ask.png" alt=" "/>  </td>		
		</tr>
	</div>
	</table>
	
	<?php //http://www.calcfun.com/calc-23-emvadon-elleipsis.html?>
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Εμβαδόν έλλειψης</h2></td>
		</tr>
	</table>

	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω το εμβαδόν της έλλειψης:</p></td>
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
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/square_red.png" alt=" "/>  </td>
			<td align="right" valign="middle" class="text"><p>Πολλαπλασιάζω τον αριθμό π με το γινόμενο των ακτίνων της έλλειψης.'</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/>
	<table width="630" border="0" align="center" cellpadding="0" cellspacing="0">		
		<tr>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td><b>Εμβαδόν έλλειψης = π * r<sub>1</sub> * r<sub>2</sub><b/></td>		
		</tr>
		<tr>		
			<td align="right" valign="middle" class="text"><p><b>όπου π = 3.14 ,</b></p></td>	
			<td align="right" valign="middle" class="text"><p><b>r<sub>1</sub> η ακτίνα του μεγάλου άξονα ,</b></p></td>	
			<td align="right" valign="middle" class="text"><p><b>r<sub>2</sub> η ακτίνα του μικρού άξονα</b></p></td>	
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
					<ellipse cx="95" cy="70" rx="90" ry="50" style="fill:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" />
					<line x1="95" y1="70" x2="5" y2="70" stroke="red" stroke-width="3"/>
					<text x="15" y="60" font-family="Verdana" font-size="10" fill="black">r1 = 3 εκ.</text>
					<line x1="95" y1="70" x2="95" y2="20" stroke="red" stroke-width="3"/>
					<text x="10" y="60" transform="rotate(90,80,82)" font-family="Verdana" font-size="10" fill="black">r2 = 1.5 εκ.</text>
				</svg>
			</td>
			<td>
				Εμβαδόν έλλειψης = 2 x 3 x 1.5 = 9 τ.εκατ
			</td>		
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="ellipse.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/paint.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box"> Ζωγράφισε την έλλειψη</div>
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
//http://users.sch.gr/spangs/kepler/ellipsis.htm

echo '<h1>Έλλειψη</h1>';

echo '<h2>Οριμός έλλειψης</h2>';
echo '<b>Έλλειψη</b> καλείται ο γεωμετρικός τόπος των σημείων του επιπέδου, των οποίων<br/>
	το άθροισμα των αποστάσεων από δύο δεδομένα σημεία είναι σταθερό. <br/> Τα δεδομένα σημεία ονομάζονται <b>εστίες</b> της έλλειψης (E1, E2).';
echo '<br/><br/>';
echo 'Η απόσταση μεταξύ των δύο εστιών ονομάζεται <b>εστιακή απόσταση</b>.';
echo '<br/><br/>';
echo 'Χαρακτηριστικά της έλλειψης είναι ο <b>μεγάλος άξονας</b> και ο <b>μικρός άξονας</b>.';
echo '<br/><br/>';
echo 'Κάθε ευθύγραμμο τμήμα που έχει ως άκρα δύο διαφορετικά σημεία της έλλειψης <br/>και διέρχεται από το κέντρο αυτής ονομάζεται <b>διάμετρος</b> της έλλειψης.';
echo '<br/><br/>';
echo 'Η έλλειψη έχει δύο κύριες διαμέτρους που είναι ο μικρός και ο μεγάλος αξονάς της.';
echo '<br/><br/>';
echo 'Το μισό των μικρού και του μεγάλου αξονάς της έλλειψης μας δίνει τις αντίστοιχες ακτίνες.';
echo '<br/><br/>';

//axones ellipsis
$x1=125-90;
$y1=125-60;
$x2=125+90;
$y2=125+60;

//esties ellipsis	
$xe1=($x1+125)/2;
$xe2=($x2+125)/2;


echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"135\" height=\"125\" viewbox=\"0,0,220,220\">";
echo "<ellipse cx=\"125\" cy=\"125\" rx=\"90\" ry=\"60\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
//esties elleipsis
echo "<circle cx=$xe1 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=$xe1 y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">Ε1</text>";
echo "<circle cx=$xe2 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=$xe2 y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">Ε2</text>";
//megalos axonas
echo "<line x1=$x1 y1=\"125\" x2=$x2 y2=\"125\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=$x1 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=$x1 y=\"125\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">A</text>";
echo "<circle cx=$x2 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=$x2 y=\"125\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">B</text>";
//mikros axonas
echo "<line x1=\"125\" y1=$y1 x2=\"125\" y2=$y2 stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=\"125\" cy=$y1 r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"125\" y=$y1 font-family=\"Verdana\" font-size=\"18\" fill=\"black\">Γ</text>";
echo "<circle cx=\"125\" cy=$y1 r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"125\" y=$y2 font-family=\"Verdana\" font-size=\"18\" fill=\"black\">Δ</text>";
//echo "<text x=$xe1 y=\"140\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">μεγάλος άξονας</text>";
echo "</svg>";	
echo '<br/>';
echo 'όπου ΑΒ: μεγάλος άξονας,<br/>';
echo 'ΓΔ: μικρός άξονας,<br/>';

//http://www.calcfun.com/calc-25-perimetros-elleipsis.html
echo '<h2>Περίμετρος έλλειψης</h2>';
echo 'Για να υπολογίσω την περίμετρο μίας έλλειψης χρησιμοποιούμε τον ακόλουθο τύπο:<br/>';
echo 'πολλαπλασιάζουμε την διάμετρο με τον αριθμό π(=3,14)';
echo '</br></br>';
echo '<h2 style="background-color:red;">ΡΙΖΑ</h2>';
echo 'Περίμετρος έλλειψης = 2 * π * (r<sub>1</sub><sup>2</sup>+r<sub>2</sub><sup>2</sup>) /2';
echo '</br></br>';
echo 'όπου π = 3,14 ,<br/> r<sub>1</sub> = η ακτίνα του μεγάλου άξονα και <br/> r<sub>2</sub> = η ακτίνα του μικρού άξονα.';
echo '<br/>';

$xr1=($x1+$x2)/2;
$yr1=($y1+$y2)/2;
$yrr1=$y1+50;
$yrr2=$y2-40;


echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"135\" height=\"125\" viewbox=\"0,0,220,220\">";
echo "<ellipse cx=\"125\" cy=\"125\" rx=\"90\" ry=\"60\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
//esties elleipsis
//echo "<circle cx=$xe1 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
//echo "<text x=$xe1 y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">Ε1</text>";
//echo "<circle cx=$xe2 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
//echo "<text x=$xe2 y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">Ε2</text>";
//megalos axonas
echo "<line x1=$x1 y1=\"125\" x2=$xr1 y2=\"125\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=$x1 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
//echo "<text x=$x1 y=\"125\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">A</text>";
//echo "<circle cx=$x2 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
//echo "<text x=$x2 y=\"125\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">B</text>";
//mikros axonas
echo "<line x1=\"125\" y1=$y1 x2=\"125\" y2=$yr1 stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=\"125\" cy=$y1 r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"125\" y=$yrr1 font-family=\"Verdana\" font-size=\"18\" fill=\"black\">r1 = 3 εκ</text>";
echo "<circle cx=\"125\" cy=$y1 r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"40\" y=$yrr2 font-family=\"Verdana\" font-size=\"18\" fill=\"black\">r2 = 2 εκ</text>";
//echo "<text x=$xe1 y=\"140\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">μεγάλος άξονας</text>";
echo "</svg>";	
echo '<br/>';
//echo 'όπου ΑΒ: μεγάλος άξονας,<br/>';
//echo 'ΓΔ: μικρός άξονας,<br/>';	

echo '</br>';
echo '<h2 style="background-color:red;">ΡΙΖΑ</h2>';
echo 'Περίμετρος έλλειψης = 2 * 3,14 * (3<sup>2</sup> + 2<sup>2</sup>) / 2 = <br/> 2 * 3,14 * ((4+9)/2) εκατ. = 17.21';
echo '</br><br/>';

//http://www.calcfun.com/calc-23-emvadon-elleipsis.html
echo '<h2>Εμβαδόν έλλειψης</h2>';
echo 'Το εμβαδόν της έλλειψης είναι ίσο με το γιμόμενο του αριθμού π επί το γινόμενο των ακτίνων της <br/>έλλειψης<br/>';
echo 'Το εμβαδόν της έλλειψης δίνεται από τον ακόλουθο τύπο: <br/>';
echo '</br>';
echo 'Εμβαδόν κύκλικού δίσκου = π * r<sub>1</sub> * r<sub>2</sub>';
echo '</br></br>';
echo 'όπου π = 3,14 , <br/> r<sub>1</sub> = η ακτίνα του μεγάλου άξονα , <br/>r<sub>2</sub> = η ακτίνα του μικρού άξονα.';
echo '<br/>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"135\" height=\"125\" viewbox=\"0,0,220,220\">";
echo "<ellipse cx=\"125\" cy=\"125\" rx=\"90\" ry=\"60\" style=\"fill:rgb($x1,$x2,$x3)\" stroke=\"black\" stroke-width=\"3\"/>";
//esties elleipsis
//echo "<circle cx=$xe1 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
//echo "<text x=$xe1 y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">Ε1</text>";
//echo "<circle cx=$xe2 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
//echo "<text x=$xe2 y=\"120\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">Ε2</text>";
//megalos axonas
echo "<line x1=$x1 y1=\"125\" x2=$xr1 y2=\"125\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=$x1 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
//echo "<text x=$x1 y=\"125\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">A</text>";
//echo "<circle cx=$x2 cy=\"125\" r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
//echo "<text x=$x2 y=\"125\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">B</text>";
//mikros axonas
echo "<line x1=\"125\" y1=$y1 x2=\"125\" y2=$yr1 stroke=\"black\" stroke-width=\"3\"/>";
echo "<circle cx=\"125\" cy=$y1 r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"125\" y=$yrr1 font-family=\"Verdana\" font-size=\"18\" fill=\"black\">r1 = 3 εκ</text>";
echo "<circle cx=\"125\" cy=$y1 r=\"3\" fill=\"black\" stroke=\"black\" stroke-width=\"3\"/>";
echo "<text x=\"40\" y=$yrr2 font-family=\"Verdana\" font-size=\"18\" fill=\"black\">r2 = 2 εκ</text>";
//echo "<text x=$xe1 y=\"140\" font-family=\"Verdana\" font-size=\"18\" fill=\"black\">μεγάλος άξονας</text>";
echo "</svg>";	


echo '</br>';
echo 'Εμβαδόν κυκλικού δίσκου = 3,14 * 3 * 2 = 18,84 τ.εκατ.';
*/
dispCloseBody();
?> 