<?php

require_once dirname(__FILE__).'/../config.php';


$kwota= $_REQUEST['kwota'];
$lata= $_REQUEST['lata'];
$oprocentowanie= $_REQUEST['opr'];

if(!(isset($kwota) && isset($lata) && isset($oprocentowanie)))
{
  $messages[]="Bledne wykonanie aplikacji";
}

if($kwota =="")
{
	$messages[]="Nie podano kwoty";
}

if($lata =="")
{
	$messages[]="Nie podano lat";
}

if($oprocentowanie =="")
{
	$messages[]="Nie podano oprocentowania";
}

if(empty($messages))
{
  if(!is_numeric($kwota))
  {
	$messages[]="Nie podano wartosci calkowitej kwoty";
  }
  if(!is_numeric($lata))
  {
	$messages[]="Nie podano wartosci calkowitej lat";
  }
  if(!is_numeric($oprocentowanie))
  {
	$messages[]="Nie podano wartosci calkowitej oprocentowania";
  }

}
if(empty($messages))
{
    if($kwota>0 && $lata>0 && $oprocentowanie>0)
	{
	$kwota = intval($kwota);
	$lata = intval($lata);
	$oprocentowanie = intval($oprocentowanie);
	
    $procenty= $kwota*($oprocentowanie/100);
	$wynik= ($kwota/($lata*12))+$procenty;
	}
	else $messages [] ='Podano wartosci ujemne';
}


include 'calc_view.php';
