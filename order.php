<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Podsumowanie zamówienia</title>
</head>
<body>
<?php
	$storczyk=$_POST['storczyk'];
	$cyklamen=$_POST['cyklamen'];
	$fiolek=$_POST['fiolek'];
	$kompozycja_wiosenna=$_POST['kompozycja_wiosenna'] ;
	$roslina_doniczkowa=$_POST['roslina_doniczkowa'];
	$kompozycja_balkonowa=$_POST['kompozycja_balkonowa'];
	$bukiet_roz=$_POST['bukiet_roz'];
	$astry=$_POST['astry'];
	$bukiet_kolorowy_ogrod=$_POST['bukiet_kolorowy_ogrod'];
	$suma=127.00*$storczyk+125.00*$cyklamen+123.00*$fiolek+129.00*$kompozycja_wiosenna+179.00*$roslina_doniczkowa+197.00*$kompozycja_balkonowa+220.00*$bukiet_roz+80.00*$astry+160.00*$bukiet_kolorowy_ogrod;
	
echo<<<END
	<h2>Podsumowanie zamówienia</h2>
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
	<td>Storczyk(127.00 PLN/szt)</td><td>$storczyk</td>
	</tr>
	<tr>
	<td>Cyklamen(125.00 PLN/szt)</td><td>$cyklamen</td>
	</tr>
	<tr>
	<td>Fiołek(123.00 PLN/szt)</td><td>$fiolek</td>
	</tr>
	<tr>
	<td>Kompozycja_wiosenna(129.00 PLN/szt)</td><td>$kompozycja_wiosenna</td>
	</tr>
	<tr>
	<td>Roślina_doniczkowa(179.00 PLN/szt)</td><td>$roslina_doniczkowa</td>
	</tr>
	<tr>
	<td>Kompozycja_balkonowa(197.00 PLN/szt)</td><td>$kompozycja_balkonowa</td>
	</tr>
	<tr>
	<td>Bukiet_róż(220.00 PLN/szt)</td><td>$bukiet_roz</td>
	</tr>
	<tr>
	<td>Astry(80.00 PLN/szt)</td><td>$astry</td>
	</tr>
	<tr>
	<td>Bukiet_kolorowy_ogród(160.00 PLN/szt)</td><td>$bukiet_kolorowy_ogrod</td>
	</tr>
	<tr>
	<td>SUMA</td><td>$suma PLN</td>
	</tr>
	</table>
	<br><a href="kwiaciarnia.php">Powrót do strony głównej</a>
END;
?>
</body>
</html>
