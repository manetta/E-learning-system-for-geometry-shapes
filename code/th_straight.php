<?php

require_once('include.php');

dispHeader();
dispBody();

//dispShapes_TH(0);

$x1=rand(0,255);
$x2=rand(0,255);
$x3=rand(0,255);

$xm=(5+100)/2;
$ym=(100+140)/2;
?>

	<table width="380" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><h1><font color="#A9B63D">Ευθύγραμμό τμήμα</font></h1></td>
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

	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Ορισμός ευθύγραμμου τμήματος</h2></td>
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
			<td align="right" valign="middle" class="text"><p>Ευθύγραμμό τμήμα ΑΒ είναι εκείνο το γεωμετρικό σχήμα που περιέχεται μεταξύ δύο σημείων Α και Β <br/> μιας ευθείας ε.</p></td>
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
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Μήκος</b> ευθυγράμμου σχήματος, ονομάζεται η απόσταση μεταξύ των δύο άκρων.</p></td>
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
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p><b>Μέσο</b> ευθυγράμμου τμήματος, ονομάζεται το σημείο (Μ) που ισαπέχει από τα άκρα του.</br></p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<table width="370" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/important-icon.png" alt=" "/></td>
			<td align="right" valign="middle" class="text"><p><b>Κάθε ευθύγραμμο τμήμα έχει ένα μόνο μέσο.</b></p></td>
		</tr>
	</table>

	<br/><br/><br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Είδη ευθυγράμμου τμήματος</h2></td>
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
			<td align="right" valign="middle" class="text"><p>Όταν τα άκρα ενός ευθυγράμμου τμήματος δεν ανήκουν σ΄ αυτό, τότε ονομάζεται <b><br/>ανοιχτό ευθύγραμμο τμήμα</b>.</p></td>
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
			<td align="right" valign="middle" class="text"><p>Όταν αντίθετα, τα άκρα ανήκουν σ΄ αυτό ονομάζεται <b>κλειστό ευθύγραμμο τμήμα</b>.</p></td>
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
			<td align="right" valign="middle" class="text"><p>Όταν τα άκρα Α και Β συμπίπτουν, (Α=Β), τότε ονομάζεται <b>μηδενικό ευθύγραμμο τμήμα</b>.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
		<br/>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Μήκος ευθύγραμμου τμήματος</h2></td>
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
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Για να υπολογίσω το μήκος ενός ευθύγραμμου τμήματος χρησιμοποιώ τον τύπο της απόστασης μεταξύ δύο<br/> σημείων.</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
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
			<td align="right" valign="middle" class="text"><p>Η απόσταση μεταξύ των σημείων ( x<sub>1</sub> , y<sub>1</sub> ) και ( x<sub>2</sub> , y<sub>2</sub> ) δίνεται από τον ακόλουθο τύπο:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
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
			<td align="center">&radic; <span style="text-decoration:overline">d = x<sub>2</sub> - x<sub>1</sub> )<sup>2</sup> +  ( y<sub>2</sub> - y<sub>1</sub> )<sup>2</sup></span></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	</table>
	
	<br/><br/>
	<table width="600" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός μήκους ευθύγραμμου τμήματος</h2></td>
		</tr>
	</table>
	
	<table width="700" border="0" align="left" cellpadding="0" cellspacing="0">
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
					<line x1="5" y1="25" x2="100" y2="140"  style="stroke:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" stroke-width="3"/>
					<text x="5" y="25" font-family="Verdana" font-size="15" fill="black" >Α ( 25 , 25 )</text>
					<circle cx="5" cy="25" r= "3" fill="black" stroke="black" stroke-width="2" />
					<text x="100" y="140" font-family="Verdana" font-size="15" fill="black">B ( 30 , 40 )</text>
					<circle cx="100" cy="140" r="3" fill="black" stroke="black" stroke-width="2" />
				</svg>
			</td>
			<td>
				Μήκος ευθύγραμμου τμήματος = &radic; <span style="text-decoration:overline"> ( 30 - 25 )<sup>2</sup> +  ( 40 - 25 )<sup>2</sup></span> = <br/><br/>
				&radic; <span style="text-decoration:overline"> 5 <sup>2</sup> +  15<sup>2</sup></span> = 
				&radic; <span style="text-decoration:overline"> 25 +  225</span> = &radic; <span style="text-decoration:overline"> 250 </span> = 15.81 εκατ.
				</br><br/>
			</td>
		</tr>
	</div>
	</table>
	
	<br/><br/>
	<table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="images/theory.png" alt=" "/>  </td>
			<td><h2>Μέσο ευθύγραμμου τμήματος</h2></td>
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
			<td align="left" valign="top">&nbsp;</td>
			<td align="right" valign="middle" class="text"><p>Tο μέσο ενός ευθύγραμμου τμήματος με άκρα (x<sub>1</sub>, y<sub>1</sub>) και (x<sub>2</sub>, y<sub>2</sub>) δίνεται από τα ακόλουθα σημεία:</p></td>
			<td align="left" valign="top">&nbsp;</td>			
		</tr>
	<table>	
	
	<br/>
	<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">		
		
		<tr>		
			<td align="center"> x<sub>M</sub>=<span class="num"><sup>( x<sub>1</sub> + x<sub>2</sub> )</sup></span>/<span class="den"> <sub>2</sub></span></td>
			<td align="center">y<sub>M</sub>=<span class="num"><sup>( y<sub>1</sub> + y<sub>2</sub> )</sup></span>/<span class="den"> <sub>2</sub></span></td>		
		</tr>
	</table>
	
	<br/><br/>
	<table width="600" border="0" align="left" cellpadding="0" cellspacing="10">
		<tr>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td><img src="images/cal.png" alt=" "/>  </td>
			<td><h2>Υπολογισμός μέσου ευθύγραμμου τμήματος</h2></td>
		</tr>
	</table>
	


	
	<table width="650" border="0" align="left" cellpadding="0" cellspacing="0">
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
					<line x1="5" y1="25" x2="100" y2="140"  style="stroke:rgb(<?php echo $x1;?>,<?php echo $x2;?>,<?php echo $x3;?>)" stroke-width="3"/>
					<text x="5" y="25" font-family="Verdana" font-size="15" fill="black" >Α ( 25 , 25 )</text>
					<circle cx="5" cy="25" r= "3" fill="black" stroke="black" stroke-width="2" />
					<text x="100" y="140" font-family="Verdana" font-size="15" fill="black">B ( 30 , 40 )</text>
					<circle cx="100" cy="140" r="3" fill="black" stroke="black" stroke-width="2" />
					<text x="52" y="83" font-family="Verdana" font-size="15" fill="black">M ( 27.5 , 32.5 )</text>
					<circle cx="52" cy="83" r="3" fill="black" stroke="black" stroke-width="2" />
				</svg>
			</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>x<sub>M</sub> = <span class="num"><sup>( 25 + 30 )</sup></span>/<span class="den"> <sub>2</sub></span> = <span class="num"><sup>50</sup></span>/<span class="den"> <sub>2</sub></span>= 27.5</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td align="left" valign="top">&nbsp;</td>
			<td>y<sub>M</sub> = <span class="num"><sup>( 25 + 40 )</sup></span>/<span class="den"> <sub>2</sub></span> = <span class="num"><sup>65</sup></span>/<span class="den"> <sub>2</sub></span>= 32.5</td>
		</tr>
	</div>
	</table>
	
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<a href="straight.php">
					<span onmouseover="ShowText('Message'); return true;" onmouseout="HideText('Message'); return true;" href="javascript:ShowText('Message')">
						<img src="images/paint.png" alt="error"/>
					</span>
				</a>
				<div id="Message" class="box2"> Ζωγράφιζω το ευθύγραμμο τμήμα </div>
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
$xm=(25+185)/2;
$ym=(25+140)/2;

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"370\" height=\"150\" viewbox=\"0,0,200,200\">";
echo "<line x1=\"25\" y1=\"25\" x2=\"185\" y2=\"140\"  style=\"stroke:rgb($x1,$x2,$x3)\" stroke-width=\"3\"/>";
echo "<text x=\"25\" y=\"25\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\" >Α ( 25 , 25 )</text>";
echo "<circle cx=\"25\" cy=\"25\" r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "<text x=\"185\" y=\"140\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">B ( 185 , 140 )</text>";
echo "<circle cx=\"185\" cy=\"140\" r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "<text x=$xm y=$ym font-family=\"Verdana\" font-size=\"20\" fill=\"black\">Μ ( $xm , $ym )</text>";
echo "<circle cx=$xm cy=$ym r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "</svg>";

echo '</br>';
echo 'Μέσο ευθύγραμμου τμήματος';
echo '</br></br>';
echo '<h2 style="background-color:green;">ΚΛΑΣΜΑ</h2>';
echo 'Σημείο x = (25+185)/2';
echo '</br></br>';
echo 'Σημείο y = (25+140)/2';

echo '</br></br>';
echo 'Οπότε το μέσο του ευθύγραμμου τμήματος θα είναι το ( ';
echo $xm;
echo ' , ';
echo $ym;
echo ' ) ';
*/


/*
echo '<h1>Ευθύγραμμό τμήμα</h1>';

echo '<h2>Οριμός ευθύγραμμου τμήματος</h2>';

echo 'Ευθύγραμμό τμήμα ΑΒ είναι εκείνο το γεωμετρικό σχήμα που περιέχεται μεταξύ δύο σημείων Α και Β <br/> μιας ευθείας ε';
echo '<br/><br/>';

echo '<b>Μήκος</b> ευθυγράμμου σχήματος, ονομάζεται η μεταξύ απόσταση των δύο άκρων.';
echo '<br/><br/>';

echo '<b>Μέσο</b> ευθυγράμμου τμήματος, ονομάζεται το σημείο του εκείνο, (Μ), που ισαπέχει από τα άκρα του.</br>';
echo 'Κάθε ευθύγραμμο τμήμα έχει ένα μόνο μέσο.';

echo '<h2>Είδη ευθυγράμμου τμήματος</h2>';
echo '<ul><li>Όταν τα άκρα ενός ευθυγράμμου τμήματος δεν ανήκουν σ΄ αυτό, τότε ονομάζεται <b>ανοιχτό ευθύγραμμο τμήμα</b>.</li>
<li>Όταν αντίθετα, τα άκρα ανήκουν σ΄ αυτό ονομάζεται <b>κλειστό ευθύγραμμο τμήμα</b>.</li>
<li>Τέλος όταν τα άκρα Α και Β συμπίπτουν, (Α=Β), τότε ονομάζεται <b>μηδενικό ευθύγραμμο τμήμα</b>.</li></ul>';
*/

/*
echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"370\" height=\"150\" viewbox=\"0,0,200,200\">";
echo "<line x1=\"25\" y1=\"25\" x2=\"185\" y2=\"140\"  style=\"stroke:rgb($x1,$x2,$x3)\" stroke-width=\"3\"/>";
echo "<text x=\"25\" y=\"25\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\" >Α ( 25 , 25 )</text>";
echo "<circle cx=\"25\" cy=\"25\" r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "<text x=\"185\" y=\"140\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">B ( 185 , 140 )</text>";
echo "<circle cx=\"185\" cy=\"140\" r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "</svg>";


echo '<h2>Μήκος ευθύγραμμου τμήματος</h2>';
echo 'Για να υπολογίσω το μήκος ενός ευθύγραμμου τμήματος χρησιμοποιώ τον τύπο της απόστασης μεταξύ δύο σημείων.';
echo '<br/><br/>';
echo 'Η απόσταση μεταξύ των σημείων ( x<sub>1</sub> , y<sub>1</sub> ) και ( x<sub>2</sub> , y<sub>2</sub> ) δίνεται από τον ακόλουθο τύπο:';
echo '</br><br/>';
echo '<h2 style="background-color:red;">ΡΙΖΑ</h2>';
echo '</br><br/>';
echo 'd = ( x<sub>2</sub> - x<sub>1</sub> )<sup>2</sup> +  ( y<sub>2</sub> - y<sub>1</sub> )<sup>2</sup>';
echo '</br>';

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"370\" height=\"150\" viewbox=\"0,0,200,200\">";
echo "<line x1=\"25\" y1=\"25\" x2=\"185\" y2=\"140\"  style=\"stroke:rgb($x1,$x2,$x3)\" stroke-width=\"3\"/>";
echo "<text x=\"25\" y=\"25\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\" >Α ( 25 , 25 )</text>";
echo "<circle cx=\"25\" cy=\"25\" r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "<text x=\"185\" y=\"140\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">B ( 185 , 140 )</text>";
echo "<circle cx=\"185\" cy=\"140\" r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "</svg>";

echo '</br>';
echo '<h2 style="background-color:red;">ΡΙΖΑ</h2>';
echo 'Μήκος ευθύγραμμου τμήματος = ( 185 - 25 )<sup>2</sup> + ( 140-25 )<sup>2</sup> = 
	<br/> 160<sup>2</sup> + 115<sup>2</sup> = 25600 + 13225 =  38825 = 197.04 εκατ.';
echo '</br><br/>';


echo '<h2>Μέσο ευθύγραμμου τμήματος</h2>';
echo 'Tο μέσο ενός ευθύγραμμου τμήματος με άκρα (x<sub>1</sub>, y<sub>1</sub>) και (x<sub>2</sub>, y<sub>2</sub>)';
echo '<br/>';
echo 'δίνεται από τον ακόλουθο τύπο:';
echo '<br/>';
echo '<h2 style="background-color:green;">ΚΛΑΣΜΑ</h2>';
echo '( x<sub>1</sub> + x<sub>2</sub> )/ 2 , y<sub>1</sub> + y<sub>2</sub> )/ 2 ).';
echo '<br/>';

$xm=(25+185)/2;
$ym=(25+140)/2;

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"370\" height=\"150\" viewbox=\"0,0,200,200\">";
echo "<line x1=\"25\" y1=\"25\" x2=\"185\" y2=\"140\"  style=\"stroke:rgb($x1,$x2,$x3)\" stroke-width=\"3\"/>";
echo "<text x=\"25\" y=\"25\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\" >Α ( 25 , 25 )</text>";
echo "<circle cx=\"25\" cy=\"25\" r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "<text x=\"185\" y=\"140\" font-family=\"Verdana\" font-size=\"20\" fill=\"black\">B ( 185 , 140 )</text>";
echo "<circle cx=\"185\" cy=\"140\" r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "<text x=$xm y=$ym font-family=\"Verdana\" font-size=\"20\" fill=\"black\">Μ ( $xm , $ym )</text>";
echo "<circle cx=$xm cy=$ym r= \"3\" fill=\"black\" stroke=\"black\" stroke-width=\"2\" />";
echo "</svg>";

echo '</br>';
echo 'Μέσο ευθύγραμμου τμήματος';
echo '</br></br>';
echo '<h2 style="background-color:green;">ΚΛΑΣΜΑ</h2>';
echo 'Σημείο x = (25+185)/2';
echo '</br></br>';
echo 'Σημείο y = (25+140)/2';

echo '</br></br>';
echo 'Οπότε το μέσο του ευθύγραμμου τμήματος θα είναι το ( ';
echo $xm;
echo ' , ';
echo $ym;
echo ' ) ';
*/
dispCloseBody();
?> 