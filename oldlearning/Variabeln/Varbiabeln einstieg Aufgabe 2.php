
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
	 <head>
		  <title>Hallo Welt mit PHP</title>
		  <meta http-equiv="content-type" content="text/plain; charset=utf-8" />
		  <meta http-equiv="content-language" content="de" />
		  <link type = "text/css" rel = "stylesheet" href = "../CSS/stylesheet.css" />
	</head>

<body>
	<font face="calibri">
	<h1>Rechnung</h1>
	<div id="line">
	..........................................................................................................................................................
	</div><br/>
	
	<?php
		$ArtikelA ="4.95";
		$ArtikelB ="1.95";
		$ArtikelC ="2.10";
		$Ergebnis = ($ArtikelA + $ArtikelA + $ArtikelB + $ArtikelC) * 1.19 * 1.04;
		$gerundet = round($Ergebnis,2,2);
		echo"</br> <font size=\"2\">Hilden, 14.04.2015</font> <br/><br/>";
		echo"Sehr geehrte Frau Meier,<br/>vielen Dank für Ihren Auftrag!<br/><br/>";
		echo"Der Rechnungsbetrag hat eine Höhe von: $Ergebnis Euro, gerundet : $gerundet Euro.";
	?>
	</font>
</body>
</html>

