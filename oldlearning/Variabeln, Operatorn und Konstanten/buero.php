<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
	 <head>
		  <title>Variblen, Operatoren und Konstanten arbeiten Aufgabe 3</title>
		  <meta http-equiv="content-type" content="text/plain; charset=utf-8" />
		  <meta http-equiv="content-language" content="de" />
		  <!---<link type = "text/css" rel = "stylesheet" href = "../CSS/stylesheet.css" />-->
	</head>

<body>
	<font face="calibri">
	
	<?php
        $bezeichnung_tisch = "Schreibtisch";
        $bezeichnung_stuhl = "Bürostuhl";
        $bezeichnung_lampe = "Lampe";
        $bezeichnung_pctisch = "Computertisch";

        $preis_tisch = "1999.00";
        $preis_stuhl = "589.00";
        $preis_lampe = "29.00";
        $preis_pctisch = "999.00";

        $netto_gesamt = $preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;
        const MWST = "1.19";
        $brutto_gesamt = MWST * $netto_gesamt;
        const EURO ="Euro";
        $Bruttopreis_tisch = MWST * $preis_tisch;
        $Bruttopreis_stuhl = MWST * $preis_stuhl;
        $Bruttopreis_lampe = MWST * $preis_lampe;
        $Bruttopreis_pctisch = MWST * $preis_pctisch;

        echo "<h1>Übung (Kapitel 4): Mit Variablen, Operatoren und Konstanten arbeiten</h1><br/><br/>";
        echo "Netto-Gesamtpreis der eingekauften Artikel: ".$netto_gesamt." ".Euro."<br/><br/>";
        echo "Brutto-Gesamtpreis der eingekauften Artikel: ".$brutto_gesamt." ". Euro ."<br/><br/>";
        echo "........................................................................................................................................................................................................................<br/> <br/>";
        echo "Brutto-Preis <strong>".$bezeichnung_tisch. "</strong>: ".$Bruttopreis_tisch. " ". Euro ."<br/><br/>";
        echo "Brutto-Preis <strong>".$bezeichnung_stuhl. "</strong>: ".$Bruttopreis_stuhl. " ". Euro ."<br/><br/>";
        echo "Brutto-Preis <strong>".$bezeichnung_lampe. "</strong>: ".$Bruttopreis_lampe. " ". Euro ."<br/><br/>";
        echo "Brutto-Preis <strong>".$bezeichnung_pctisch. "</strong>: ".$Bruttopreis_pctisch. " ". EURO ."<br/><br/>";
    ?>
	</font>
</body>
</html>
