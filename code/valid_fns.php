<?php

/******************************************************************************
* sunarthsh pou afairei ton keno xwro apo tin arxi kai to telos tis 
* sumvoloseiras kai elegxei an mia metavlhth uparxei kai einai gemismenh me 
* dedomena kai epistrefei katallhlh boolean metavlhth
****************************************************************************/
function filled_out($var)
{	
	//afaroume ton keno xwro apo tin arxi kai to telos tis sumvoloseiras
	$var=trim($var);
	//elegxos gia to an mia metavliti periexei mia timi
	if(!isset($var)||$var=='')
		return false;
	else	return true;
}


/*********************************************************************************
* sunarthsh mesw tis opoias elenxoume an ena pedio apoteleitai mono apo grammata *
*********************************************************************************/
function is_alphabet($str)
{
	$alpha_re_gr="^[ΑαάΒβΓγΔδΕεέΖζΗηήΘθΙιίϊΐΚκΛλΜμΝνΞξΟοόΠπΡρΣσςΤτΥυύϋΰΦφΧχΨψΩωώ ]+$";
	$alpha_re_en="^[a-zA-Z]+$";
	
	if(@ereg($alpha_re_gr,$str))
		return true;
	else if(@ereg($alpha_re_en,$str))
		return true;
	else	
		return false;
	
}

/*****************************************************************************
* sunartisi gia tin egkurotita tou email
******************************************************************************/
function valid_email($email)
{

//var re=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	//diko mou arxiko
	$email_re="^[a-zA-Z0-9_\-\.]+@([a-zA-Z0-9][a-zA-Z0-9\-]*\.)+[a-zA-Z]+$";
	
	//$email_re="^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$";
	
	if(@ereg($email_re,$email))
		return true;
	else	return false;
}

/*********************************************************************************
* sunarthsh mesw tis opoias elenxoume an ena pedio apoteleitai mono apo noumera   *
*********************************************************************************/
function is_num($num)
{
	$num_re="^[0-9]+$";
	
	if(@ereg($num_re,$num))
		return true;
	else
		return false;
}
?> 