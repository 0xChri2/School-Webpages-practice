<!DOCTYPE HTML>
<html>
	<head>
		<title>Datumsfunktionen</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<style type = "text/css">
	
			body {
				background-color: #ffffcc;
				color: #3333cc;
				font-family: Arial, sans-serif;
				font-size:12px;
				}
				
			h1{
				font-size:16px;
				color: red;
				}
				
			h2{
				font-size:14px;
				}
				
			span{
				text-decoration:  underline;
				}
				
		</style>
	</head>
	<body>
		<h1>Datumsberechnungen und -ausgabe<br /><br /></h1>
	
		<?php
			$tagk = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
			
			echo "<h2><br />Aktuelles <span>Datum</span> laut Systemdatum ausgeben</h2>";
			$tagzahl = date("w");
			$heute = date("d.m.Y");
			echo "Heutiges Datum: ".$heute.". <br />";
			echo "<br /><br />";
			
			echo "<h2><br />Aktuellen <span>Wochentag</span> laut Systemdatum ausgeben</h2>";
			echo "Heute ist $tagk[$tagzahl] <br />";
			echo "<br /><br />";
			
			echo "<h2>Aktuellen <span>Monat</span> laut Systemdatum ausgeben</h2>";
			$monatk = array("Januar","Februar","Maerz","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember");
			$monatzahl = date("n");
			echo "Aktueller Monat: " .$monatk[$monatzahl-1] . "<br />";
			echo "<br /><br />";
			
			echo "<h2><span>Anzahl der Tage</span> bis zu den Osterferien</h2>";
			$letzterSchultagstr = strtotime("2021-03-26");
			$heutetime = time();
			echo "Heute mit time() (Unix-Timestamp): ".$heutetime ."<br />";
			echo "Letzter Schultag vor den Osterferien: ".$letzterSchultagstr ."<br />";
			$restlicheTage = ($letzterSchultagstr - $heutetime)/60/60/24;
			echo "Noch " .$restlicheTage. " Tage bis zu den Osterferien!<br />";
			echo "Aufgerundet auf ganze Tage: " .ceil($restlicheTage). "<br />";	
		?>
	</body>
</html>