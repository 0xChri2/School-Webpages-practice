
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
	 <head>
		  <title>Operatoren, Variablen und Konstanten</title>
		  <meta http-equiv="content-type" content="text/plain; charset=utf-8" />
		  <meta http-equiv="content-language" content="de" />
		  <link type = "text/css" rel = "stylesheet" href = "../CSS/stylesheet.css" />
	</head>

<body>
	<font face="calibri">
	<h1>Operatoren, Variablen und Konstanten</h1>
	<div id="line">
	..........................................................................................................................................................
	</div><br/>
	<?php
       $Potenzzahl = "2";
	   $Zahl = "5";
	   $potenz = $Zahl ** $Potenzzahl;
	   echo"Potenz: Die 5 wird mit der 2 Potenziert. Potenz =" .$potenz." .";
	   $Zahl1 = "10";
	   $Zahl2 = "3";
	   $Modulo = $Zahl1 % $Zahl2;
	   echo "<br/> <br/>Modulo: Beim Einkauf habe ich 10 Euro. Pro Apfel muss ich 3 Euro zahlen wie viel Geld habe ich noch wenn ich 3 mal ein Apfel kaufe. Das Restgeld ist ". $Modulo . " Euro";
	   $praeinkrement1="10";
	   $praeinkrement2="2";
	   $praeinkrementErgbnis= ++$praeinkrement1 + $praeinkrement2;
	   echo"<br/><br/>Praeinkrement: Wenn ich 10 habe und ". $praeinkrement2 ." habe. Dann erhöhe ich die 10 um eins und rechen die beiden zusammen. Dann kommt: ".$praeinkrementErgbnis." raus.<br/>";
	   $praeinkrementErgbnis = --$praeinkrement1 + $praeinkrement2;
	   echo"Oder wenn ich 11 nehme, es um eins verringer und ".$praeinkrement2." dazu rechne kommt ". $praeinkrementErgbnis." raus.";
	   $postinkrement1 = "10";
	   $postinkrement2 = "2";
	   $postinkrementErgbnis = $postinkrement1++ + $postinkrement2;
	   echo "<br/><br/>Postinkrement: Wenn ich 10 nehme, eins dazu später dazu rechne rechne  und dann ". $postinkrement2. " dazu rechne. Dann kommt: ". $postinkrementErgbnis ." heraus.<br/>";
	   $postdekrement1 = "10";
	   $postdekrement2 = "2";
	   $postdekrementErgbnis = $postdekrement1-- + $postdekrement2;
	   echo "Postdekrement: Wenn ich 10 nehme nach der rechnung eins abziehe und ". $postdekrement2 . " dazu rechne. Dann kommt ". $postdekrementErgbnis. " heraus.";
	   $Zusweisungsoperator1 = "10";
	   $Zusweisungsoperator2 = "5";
	   $Zusweisungsoperator1 += $Zusweisungsoperator2;
	   echo "<br/><br/>Zuweisungsoperator: Wenn ich 10 habe und addire". $Zusweisungsoperator2 ." dann kommt ". $Zusweisungsoperator1 . " raus.<br/>";
	   $Zusweisungsoperator3 = "10";
	   $Zusweisungsoperator4 = "5";
	   $Zusweisungsoperator3 -= $Zusweisungsoperator4;
	   echo "Wenn ich 10 habe und subtrahiere ". $Zusweisungsoperator4 ." dann kommt ". $Zusweisungsoperator3 . " raus.";
	   $Zusweisungsoperator5 = "10";
	   $Zusweisungsoperator6 = "5";
	   $Zusweisungsoperator5 *= $Zusweisungsoperator6;
	   echo "<br/>Wenn ich 10 habe und multipliziere ". $Zusweisungsoperator6 ." dann kommt ". $Zusweisungsoperator5 . " raus.";
	   $Zusweisungsoperator7 = "10";
	   $Zusweisungsoperator8 = "5";
	   $Zusweisungsoperator7 /= $Zusweisungsoperator8;
	   echo "<br/>Wenn ich 10 habe und dividiere ". $Zusweisungsoperator8 ." dann kommt ". $Zusweisungsoperator7 . " raus.";
	?>
	</font>
</body>
</html>

