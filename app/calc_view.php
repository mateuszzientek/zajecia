<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>

<body>

<table align="center">
<tr> 
   <td colspan="3" style="padding: 30px; margin-bottom: 20px; width:700px; font-size:40px; text-align: center;">Kalkulator kredytowy</td>
</tr>
   <td style="font-size:30px; padding:10px;" >
      <form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
       <label >Podaj kwote: <input type="text" name="kwota"/></label >
       <label >Podaj lata: <input type="text" name="lata"/></label >
       <label >Podaj oprocentowanie: <input type="text" name="opr"/></label >
       <label ><input type="submit" value="Przelicz"/></label >
       </form>
    </td>
</tr>

<tr>
	<td colspan="2" style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
      <?php
	   if (isset($messages)) 
	{
		if (count ( $messages ) > 0) 
		{
		echo '<ul>';
		foreach($messages as $msg )
		  {
            echo '<li style="font-size:30px;" >'.$msg.'</li>';
		  }
		echo '</ul>';
	   }
	}
	   
if (isset($wynik))
{ 
 echo '<p style="font-size:30px;"> Rata miesieczna: '. $wynik;
}
?>

    </td>
</tr>
</table>

</body>
</html>