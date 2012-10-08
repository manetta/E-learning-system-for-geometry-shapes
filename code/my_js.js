/************************************************************************************************
* ARXEIO ME SYNARTISEIS JAVASCRIPT GIA TON ELEGXO TWN STOIXEIWN TWN FORMWN	KAI TI DIMIOURGIA	*
*							SVG SXHMATWN														*
************************************************************************************************/

//global metavlites
var NS="http://www.w3.org/2000/svg";


//sunartisi mesw tis opoias elenxoume an exoun sublirwthei ta stoixeia mias formas
function nonEmpty(elem,msg)
{
	if(elem.value.length==0||elem.value== " ")
	{
		alert(msg);
		elem.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//sunartisi mesw tis opoias elenxoume to mikos tou kwdikou pou dinei o xristis
function apprLength(elem,min,max,msg)
{
	if((elem.value.length>=min)&&(elem.value.length<=max))
	{
		return true;
	}
	else
	{
		alert(msg);
		elem.focus();
		return false;
	}

}


//elenxoume an oi kwdikoi pou edwse o xristis einai idioi metaxu tous
function samePass(elem1,elem2,msg)
{
	if(elem1.value==elem2.value)
	{
		return true;
	}
	else
	{
		alert(msg);
		elem1.focus();
		return false;
	}
}


//sunarthsh pou elegxei an ena pedio periexei mono ari8mous
function is_Numeric(elem,msg)
{
	var re = /^[0-9]+$/;
	
	var result=re.test(elem.value);
	
	//alert(home.value.length);
	if(result==true)
	{
		return true;
	}
	else
	{
		alert(msg);
		elem.focus();
		return false;
	}
}


//elenxoume an oi kwdikoi pou edwse o xristis einai idioi metaxu tous
function is_ten(elem,msg)
{
	if(elem.value.length==10)
	{
		return true;
	}
	else
	{
		alert(msg);
		elem.focus();
		return false;
	}
}





var Point = 1;
var X1, Y1, X2, Y2;

function FindPosition(oElement)
{
  if( typeof( oElement.offsetParent ) != "undefined" )
  {
    for( var posX = 0, posY = 0; oElement; oElement = oElement.offsetParent )
    {
      posX += oElement.offsetLeft;
      posY += oElement.offsetTop;
    }
    return [ posX, posY ];
  }
  else
  {
    return [ oElement.x, oElement.y ];
  }
}

 
function GetCoordinates(e)
{
 var PosX = 0;
 var PosY = 0;
 var ImgPos;
 ImgPos = FindPosition(myImg);
 if (!e) var e = window.event;
 if (e.pageX || e.pageY)
 {
  PosX = e.pageX;
  PosY = e.pageY;
 }
 else if (e.clientX || e.clientY)
   {
    PosX = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
    PosY = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
 }
 PosX = PosX - ImgPos[0];
 PosY = PosY - ImgPos[1];
 if (Point == 1)
 {
	
  // X1 = PosX;
  // Y1 = PosY;
   Point = 2;
   //document.getElementById("x1").innerHTML = PosX;
   //document.getElementById("y1").innerHTML = PosY;
   document.pointform.form_x1.value = PosX;
   document.pointform.form_y1.value = PosY;
 }
 else if(Point ==2)
 {
   X2 = PosX;
   Y2 = PosY;
   Point = 3;
  // document.getElementById("x2").innerHTML = PosX;
  // document.getElementById("y2").innerHTML = PosY;
   //document.form1.drawbutton.disabled = false;
   document.pointform.form_x2.value = PosX;
   document.pointform.form_y2.value = PosY;
 }
 else if(Point == 3)
 {
   X3 = PosX;
   Y3 = PosY;
   Point = 4;
  // document.getElementById("x3").innerHTML = PosX;
  // document.getElementById("y3").innerHTML = PosY;
   //document.form1.drawbutton.disabled = false;
   document.pointform.form_x3.value = PosX;
   document.pointform.form_y3.value = PosY;
 }
}





function point_it(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	document.getElementById("cross").style.left = (pos_x-1) ;
	document.getElementById("cross").style.top = (pos_y-15) ;
	document.getElementById("cross").style.visibility = "hidden" ;
	document.pointform.form_x.value = pos_x;
	document.pointform.form_y.value = pos_y;
}

function getX_Y()
{
	var x=document.getElementById("x");
	var jx=event.clientX;
	var y=event.clientY;
	
	
	x.innerHTML='hello';
	//alert(x);
	alert(jx);
	alert(y);
}	
	

/************************************************************************************************
* Sunartiseis gia tin forma syndesis 															*
*************************************************************************************************/

//sunartisi mesw tis opoias elenxoume an exoyn symplirwthei ola ta pedia tis formas sundesis
function loginCheck()
{
	//username xristi
	var username=document.getElementById('username');
	//password xristi
	var password=document.getElementById('password');
	
	//elenxoume an ta parapanw stoixeia einai symplirwmena
	if(nonEmpty(username,'Δεν έχετε σμπληρώσει το όνομα χρήστη'))
	{
		if(nonEmpty(password,'Δεν έχετε σμπληρώσει το κωδικό χρήστη'))
		{
			return true;
		}
	}
	
	return false;
}


/************************************************************************************************
* Sunartiseis gia tin formas eggrafis															*
*************************************************************************************************/

// Sunartisi mesw tis opoias elenxoume tin isxis tou kwdikou										
function strongPass()
{
	
	var strength=document.getElementById('strength');
	var password1=document.getElementById("password1");
	var strongRE=new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$","g");
	var mediumRΕ=new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$","g");
	var weakRE=new RegExp("^(?=.{6,}).*","g");
	

	if(password1.value.length==0)
	{
		strength.innerHTML='';
	}
	if(false==weakRE.test(password1.value))
	{
		strength.innerHTML='Πολύ μικρός!';
	}
	else if(strongRE.test(password1.value)==true)
	{
		strength.innerHTML='<span style="color:green">Δυνατός!</span>'
	}
	else if(mediumRΕ.test(password1.value))
	{	
		strength.innerHTML='<span style="color:orange">Μέτριος!</span>';
	}
	else
	{
		strength.innerHTML='<span style="color:red">Αδύναμος!</span>';
	}	
}


//Sunartisi mesw tis opoias elenxoume an oi duo kwdikoi pou dinei o xristis tairiazoyn
function samePassRT()
{
	var password1=document.getElementById('password1');
	var password2=document.getElementById('password2');
	var same=document.getElementById('same');
	
	if(password2.value.length!=0)
	{
		if(password1.value==password2.value)
		{
			same.innerHTML='<span style="color:green">Οι κωδικοί ταιρίαζουν!</span>';
		}
		else
		{
			same.innerHTML='<span style="color:red">Οι κωδικοί που έχετε δώσει δεν ταιριάζουν!</span>';
		}
	}
}


// Sunartisi gia ton elenxo tis morfis enos email										
function checkEmailRT()
{
	var email=document.getElementById('email');
	var right=document.getElementById('right');
	var re=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	//elenxoume an to mail exei dwthei sti swsti morfi
	var result=re.test(email.value);

	if(email.value.length!=0)
	{
		if(result==true)
		{
			right.innerHTML='<span style="color:green">Αποδεκτο email!</span>';
		}
		else
		{
			right.innerHTML='<span style="color:red">Το email σας δεν έχει αποδεκτή μορφή</span>';
		}
	}
}


//sunarthsh pou elegxei an ena pedio periexei mono ari8mous me deka psifia REAL TIME(stathero)
function RTisNumeric()
{
	var home = document.getElementById('home');
	var shome = document.getElementById('shome');
	var re = /^[0-9]+$/;
	
	var result=re.test(home.value);
	
	//alert(home.value.length);
	if((home.value.length==10))
	{
		if(result==true)
		{
			shome.innerHTML = '<span style="color:green">Αποδεκτό τηλέφωνο!</span>';
		}
		else
		{
			shome.innerHTML = '<span style="color:red">Μη αποδεκτό τηλέφωνο!</span>';
		}
		
	}
	else
	{
		shome.innerHTML = '<span style="color:red">Μη αποδεκτό τηλέφωνο!</span>';
	}
}

//sunarthsh pou elegxei an ena pedio periexei mono ari8mous me deka psifia REAL TIME(kinito)
function RTisNumericM()
{
	var mobile = document.getElementById('mobile');
	var shome = document.getElementById('shome');
	var re = /^[0-9]+$/;
	
	var result=re.test(mobile.value);
	
	//alert(home.value.length);
	if((mobile.value.length==10))
	{
		if(result==true)
		{
			smobile.innerHTML = '<span style="color:green">Αποδεκτό τηλέφωνο!</span>';
		}
		else
		{
			smobile.innerHTML = '<span style="color:red">Μη αποδεκτό τηλέφωνο!</span>';
		}
		
	}
	else
	{
		smobile.innerHTML = '<span style="color:red">Μη αποδεκτό τηλέφωνο!</span>';
	}
}


//sunartisi gia ton elegxo swstis sumplirwsis olwn twn apaitoumenwn stoixeiwn
function signupCheck()
{
	
	var name=document.getElementById('name');
	var surname=document.getElementById('surname');
	var username=document.getElementById('username');
	var password1=document.getElementById('password1');
	var school=document.getElementById('school');
	var level=document.getElementById('level');
	var level_section=document.getElementById('level_section');
	
	if(nonEmpty(name,'Δεν έχετε σμπληρώσει το όνομα σας!'))
	{
		if(nonEmpty(surname,'Δεν έχετε σμπληρώσει το επώνυμό σας!'))
		{
			if(nonEmpty(username,'Δεν έχετε σμπληρώσει το όνομα σύνδεσης!'))
			{
				if(nonEmpty(password1,'Δεν έχετε σμπληρώσει το κωδικό πρόσβασης'))
				{
					apprLength(password1,4,16,'Ο κωδικός σας πρέπει να έχει μήκος τουλάχιστον 4 χαρακτήρες');
			
					if(nonEmpty(password2,'Δεν έχετε σμπληρώσει την επαληθευση του κωδικού πρόσβασης'))
					{
						samePass(password1,password2,'Οι κωδικοί που έχετε δώσει δεν ταιριάζουν μεταξύ τους!');
				
						if(nonEmpty(school,'Δεν έχετε σμπληρώσει το σχολείο σας'))
						{
							if(nonEmpty(level,'Δεν έχετε σμπληρώσει την τάξη σας'))
							{
								if(nonEmpty(level_section,'Δεν έχετε σμπληρώσει το τμήμα σας'))
								{
									if(nonEmpty(email,'Δεν έχετε σμπληρώσει το email σας'))
									{
										if(nonEmpty(home,'Δεν έχετε σμπληρώσει το σταθερό σας τηλέφωνο'))
										{
											is_Numeric(home,'Το τηλεφωνό σας θα πρέπει να αποτελείται μόνο από αριθμούς');
											is_ten(home,'Το τηλεφωνό σας θα πρέπει να αποτελείται από 10 ψηφία');
											if(nonEmpty(mobile,'Δεν έχετε σμπληρώσει το κινητό σας τηλέφωνο'))
											{
												is_Numeric(mobile,'Το κινητό σας θα πρέπει να αποτελείται μόνο από αριθμούς');
												is_ten(mobile,'Το κινητό σας θα πρέπει να αποτελείται από 10 ψηφία');
												return true;
											}
										}
									}	
								}
							}
						}
					}
						
				}
		
			}
		}
	}
	
	return false;	
}


/************************************************************************************************
* Sunartiseis gia tin elenxo tis allagis tou kwdikou sundesis toy xristi						*
*************************************************************************************************/
function checkModPass()
{
	var old_pass=document.getElementById('old_pass');
	var new_pass1=document.getElementById('password1');
	var new_pass2=document.getElementById('password2');	
	
	if(nonEmpty(old_pass,'Δεν έχετε συμπληρώσει το παλίο κωδικό σας!'))
	{
		if(nonEmpty(new_pass1,'Δεν έχετε συμπληρώσει το νέο κωδικό σας!'))
		{
			if(nonEmpty(new_pass2,'Δεν έχετε συμπληρώσει την επαλήθευση του νέου κωδικό σας!'))
			{
				if(apprLength(new_pass1,4,16,'Ο κωδικός σας πρέπει να έχει μήκος τουλάχιστον 4 χαρακτήρες'))
				{
					if(samePass(new_pass1,new_pass2,'Οι κωδικοί που έχετε δώσει δεν ταιριάζουν μεταξύ τους!'))
					{
						return true;
					}
				}
			}
		}
	}
	
	return false;
}

/************************************************************************************************
* Sunartiseis gia tin elenxo tis allagis tou email toy xristi									*
*************************************************************************************************/
function checkModMail()
{
	var email=document.getElementById('email');
	
	if(nonEmpty(email,'Δεν έχετε συμπληρώσει ένα νέο email!'))
	{
		if(checkEmail(email,'Δεν έχετε δώσει μία σωστή διεύθυνση ηλεκτρονικού ταχυδρομείου!'))
		{
			return true;
		}
	}
	
	return false;
}


/************************************************************************************************
* Sunartiseis gia tin elenxo tis allagis tou sxoleioy toy xristi									*
*************************************************************************************************/
function checkModSch()
{
	var school=document.getElementById('school');
	var level=document.getElementById('level');
	var level_section=document.getElementById('level_section');
	
	if((school.value.length!=0) && (level.value.length!=0) && (level_section.value.length!=0))
	{
		if(nonEmpty(school,'Δεν έχετε συμπληρώσει το σχολείο σας!'))
		{
			if(nonEmpty(level,'Δεν έχετε συμπληρώσει τον αριθμό την τάξη σας!'))
			{
				if(nonEmpty(level_section,'Δεν έχετε συμπληρώσει το τμήμα σας!'))
				{
					return true;
				}
			}
		}
	}
	
	return false;
}


/************************************************************************************************
* Sunartiseis gia tin elenxo tis allagis tou tilefwnou toy xristi								*
*************************************************************************************************/
function checkModTHome()
{
	var home=document.getElementById('home');
	var mobile=document.getElementById('mobile');
	
	if(nonEmpty(home,'Δεν έχετε συμπληρώσει τον αριθμό του σταθερού σας τηλεφώνου!'))
	{
		if(is_Numeric(home,'Το τηλεφωνό σας θα πρέπει να αποτελείται μόνο από αριθμούς'))
		{
			if(is_ten(home,'Το τηλεφωνό σας θα πρέπει να αποτελείται από 10 ψηφία'))
			{
				if(nonEmpty(mobile,'Δεν έχετε συμπληρώσει τον αριθμό του κινητού σας τηλεφώνου!'))
				{
					if(is_Numeric(mobile,'Το κινητό σας θα πρέπει να αποτελείται μόνο από αριθμούς'))
					{
						if(is_ten(mobile,'Το κινητό σας θα πρέπει να αποτελείται από 10 ψηφία'))
						{
							return true;	
						}
					}
				}
			}
		}
	}
	
	return false;
}





/************************************************************************************************
* Sunartiseis gia tin emfanisi minimatwn otan pame to pontiki panw se mia eikona				*
*************************************************************************************************/
//http://www.wallpaperama.com/forums/javascript-onmouseover-show-small-windows-then-hide-t6718.html

var cX = 0; var cY = 0; var rX = 0; var rY = 0; 

function UpdateCursorPosition(e)
{ 
	cX = e.pageX; 
	cY = e.pageY;
} 

function UpdateCursorPositionDocAll(e)
{ 
	cX = event.clientX; 
	cY = event.clientY;
} 

if(document.all) 
{ 	
	document.onmousemove = UpdateCursorPositionDocAll;
} 
else 
{ 
	document.onmousemove = UpdateCursorPosition; 
} 

function AssignPosition(d) 
{ 
	if(self.pageYOffset) 
	{ 
		rX = self.pageXOffset; 
		rY = self.pageYOffset; 
	} 
	else if(document.documentElement && document.documentElement.scrollTop) 
	{ 
		rX = document.documentElement.scrollLeft; 
		rY = document.documentElement.scrollTop; 
	} 
	else if(document.body) 
	{ 
		rX = document.body.scrollLeft; 
		rY = document.body.scrollTop; 
	} 
	if(document.all) 
	{ 
		cX += rX; 
		cY += rY; 
	} 
	d.style.left = (cX+10) + "px"; 
	d.style.top = (cY+10) + "px"; 
} 

function HideText(d) 
{ 
	if(d.length < 1) { return; } 
	document.getElementById(d).style.display = "none"; 
} 

function ShowText(d) 
{ 
	if(d.length < 1) { return; } 
	var dd = document.getElementById(d); 
	AssignPosition(dd); 
	dd.style.display = "block"; 
} 

function ReverseContentDisplay(d) 
{ 
	if(d.length < 1) { return; } 
	var dd = document.getElementById(d); 
	AssignPosition(dd); 
	if(dd.style.display == "none") { dd.style.display = "block"; } 
	else { dd.style.display = "none"; } 
} 




/************************************************************************************************
* Sunartiseis gia tin anavei kai na svinei i lamba												*
*************************************************************************************************/
//http://www.openjs.com/tutorials/advanced_tutorial/picture.php
//Preload both the images
var images = new Array(2);
images[0] = new Image();
images[0].src = "images/roll1.gif"
images[1] = new Image();
images[1].src = "images/roll2.gif"

//Toggles the image
function changer() 
{
	if(document.images['roller'].src == images[0].src) 
		document.images['roller'].src = images[1].src 
	else document.images['roller'].src = images[0].src 
}









//dimiourgia enos svg antikeimenoy
function SvgObject(w,h)
{
	var svg=document.createElementNS(NS,"svg");
	
	svg.width=w;
	svg.height=h;

	return svg;
	
}

//sunartisi gia ti dimiourgia tou plaisiou gia tin topothetisi sximatwn
function table(w,h,q)
{
	var x=200;
	var y=50;
		
	svg=SvgObject(w,h);
	document.body.appendChild(svg);
			
	r=rect(x,y,w,h,"white","black");
	svg.appendChild(r);
	
	//svg.setAttribute("onclick","hello()")
	
	if(q==1)
	{
	f=rect(220,50,120,120,"blue","red");
	svg.appendChild(f);
	}
	
}

//sunartisi gia ti dimiourgia tetragwnwn kai parallilogramwn me xrisi svg
function rect(x,y,w,h,fill,stroke)
{	
	var rect=document.createElementNS(NS,"rect");
	rect.setAttribute("x", x);
	rect.setAttribute("y", y);
	//rect.width.baseVal.value=w;
	//rect.height.baseVal.value=h;
	rect.setAttribute("width",w);
	rect.setAttribute("height",h);
	rect.style.fill=fill;
	
	rect.style.stroke=stroke;
	//rect.style.stroke.width="111";
	return rect;	
}

function draw_rect()
{
	var length=document.getElementById("length");
	var fill=document.getElementById("fill");
	var stroke=document.getElementById("stroke");
	
	
	
	if(nonEmpty(length,"Δεν έχετε συμπληρώσει το μήκος του τετραγώνου!"))
	{
		//alert(length.value);
		if(nonEmpty(fill,"Δεν έχετε συμπληρώσει το χρώμα του τετραγώνου!"))
		{
			//alert(fill.value);
			if(nonEmpty(stroke,"Δεν έχετε συμπληρώσει το χρώμα του περιγράμματος του τετραγώνου!"))
			{
				//alert(stroke.value);
				var r=rect(20,105,length.value,length.value,fill.value,stroke.value)
	
				svg.appendChild(r);
			}
		}
	}
	
	
}






function point()
{
	svg=SvgOdject(0,0,1);
	document.body.appendChild(svg);
	
	
	alert(event.clientX);
	alert(event.clientY);
	

	/*
	var NS="http://www.w3.org/2000/svg";
	var s=document.createElementNS(NS,"svg");
	s.width=500;
	s.height=400;
	document.body.appendChild(s);
	*/
	
	//var x=event.clientX-500;
	//alert(x);
	
	var c1 = document.createElementNS("http://www.w3.org/2000/svg", "circle");
	c1.setAttribute("cx", event.clientX);
	c1.setAttribute("cy", event.clientY);
	c1.setAttribute("r", "5");
	c1.setAttribute("fill", "#336699");
	svg.appendChild(c1);
	
	var c2 = document.createElementNS("http://www.w3.org/2000/svg", "circle");
	c2.setAttribute("cx", event.clientX);
	c2.setAttribute("cy", event.clientY);
	c2.setAttribute("r", "4");
	c2.setAttribute("fill", "white");
	svg.appendChild(c2);
	
	var c3 = document.createElementNS("http://www.w3.org/2000/svg", "circle");
	c3.setAttribute("cx", event.clientX);
	c3.setAttribute("cy", event.clientY);
	c3.setAttribute("r", "3");
	c3.setAttribute("fill", "#336699");
	svg.appendChild(c3);
	
}
