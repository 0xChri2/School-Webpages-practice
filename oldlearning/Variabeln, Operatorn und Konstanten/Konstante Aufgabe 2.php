<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
	 <head>
		  <title>Konstanten Aufgabe 2</title>
		  <meta http-equiv="content-type" content="text/plain; charset=utf-8" />
		  <meta http-equiv="content-language" content="de" />
		  <!---<link type = "text/css" rel = "stylesheet" href = "../CSS/stylesheet.css" />-->
	</head>

<body>
	<font face="calibri">
	
	<?php
        const TAG_MIN ="1440";
        const TAG_SEK = TAG_MIN * 60;
        const WOCHE_SEK = TAG_SEK * 7;
        echo "<br/><br/>Ein Tag hat ". TAG_MIN . " Minuten oder ". TAG_SEK ." Sekunden.<br/>";
        echo "<br/> Eine Woche besteht aus ". WOCHE_SEK . " Sekunden. <br/><br/>";
        echo "Eine Woche besteht aus 7* SEK_TAG Sekunden.<br/> <br/>";
        echo "..........................................................................................................................................................";
        echo "<br/><br/>Ich wünche Ihnen noch einen schönen Tag. <br/> Herzliche Grüße... <br/> <br/>";
        echo "GRUSS<br/> <br/>";
        const MWST = "0.19";
        const BRUTTO = MWST * 100 +100;
        echo "Die Mehrwertsteuer beträgt ". MWST ."%.<br/><br/>";
        echo "Die Bruttopreis berechnet sich zu ". BRUTTO . "% aus dem Nettopreis.";
	?>
	</font>
</body>
</html>

