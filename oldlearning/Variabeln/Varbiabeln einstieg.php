
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
	<h1>Ausgabe von Variablen</h1>
	<div id="line">
	..........................................................................................................................................................
	</div><br/>
	<?php
        $vorname ="Christoph";
        $nachname="Riedel";
		$komplettname = "Christoph Riedel";
        echo "</br> Hallo $vorname $nachname, herzlich willkommen!</br>";
        echo "Hier wurden \$vorname und \$nachname hinterneinander ausgegeben.";
        echo "</br> </br> Hallo $komplettname, herzlich willkommen!";
		echo "</br>Hier wurde \$komplettname ausgegeben.";
	?>
	</font>
</body>
</html>

