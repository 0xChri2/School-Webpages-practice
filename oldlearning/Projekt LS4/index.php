<!-- Jan Werth, Christoph Riedel-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
	 <head>
		  <title>Allround Handwerkbetrieb</title>
		  <meta http-equiv="content-type" content="text/plain; charset=utf-8" />
		  <meta http-equiv="content-language" content="de" />
		  <link type = "text/css" rel = "stylesheet" href = "style.css" />
	</head>

<body bgcolor="#101010">
    
        <div id="heading">
            <h1> Allround Handwerkerbetrieb! </h1>
            


        </div>
        <div id="menu">
            <ul>
                <li class="topmenu">
                    <a href=""><img src="pictures/Drei Striche.png"></a>
                    
                    
                    <ul>
                    <li class="submenu"><a href="index.php">Startseite</a></li>
                        <li class="submenu"><a href="pages/über uns.php">Über uns</a></li>
						<li class="submenu"><a href="pages/Tätigkeiten.php">Tätigkeiten</a></li>
						<li class="submenu"><a href="pages/FAQ.php">FAQ</a></li>
						<li class="submenu"><a href="pages/Kontakte.php">Kontakte</a></li>
						<li class="submenu"><a href="pages/Impressum.php">Impressum</a></li>
						
                    </ul>
                </li>
                
            </ul>
            <div id="register">
                    <a href="pages/register.php"><img src="pictures/register.png"></a>
            </div>
        </div>
        <div id="banner">
        </div>
                   
        <?php
 

			$pfad = "data/";
			$datei = "usercounter.csv";

			$zeiger = fopen($pfad.$datei, "r");
	
			if ($zeiger) {
				while (!feof($zeiger)) {
					
					$dieseZeile = fgets($zeiger, 4096);
					$zeilenarray = explode("\t",$dieseZeile);
					foreach($zeilenarray as $Vnummer){
					}
				
					}
				}
				fclose($zeiger); 
                
                $zaehler = $Vnummer;
				$zaehler++;
				
				
				$zeiger = fopen($pfad.$datei, "w");
				fputs ($zeiger, $zaehler);
				fclose($zeiger);
			
		?>
        <div id="article">
            
            <div class="headline"><h1>Allgemeines</h1></div>
           
            <h4>Wenn Sie auf der Suche nach einem allaround Handswerkerbetrieb sind, in dem Sie hochqualifiziert und
            freundlich beraten werden, dann sind Sie bei uns genau richtig! Unser Team aus professionellen und
            erfahrenen Mitarbeitern bietet Ihnen stets zuverlässige Ausführungen sämtlicher Handswerklicher dienstleistungen.
            Höchste Präzision und Gewissenhaftigkeit sind bei unserer Arbeit maßgebende Grundsätze, die wir stets einhalten.
            Unsere Firma besteht aus erfahrenen Fachkräften, die Sie nach bestem Wissen und Gewissen beraten und Ihnen kostengünstige Lösungen anbieten.</h4>

            <img src="pictures/Startseite.jpg" width="60%"/>
            <br />
            <a href="http://www.freepik.com">Designed by cookie_studio / Freepik</a>
            <br/>
            <h4>Wir sind ein Handwerkerbetrieb für alle <a href="pages/Tätigkeiten.php">Tätigkeiten</a>. Unsere Firma ist dabei auf Malerei und Lackiererei spezialisiert.</h4>
            <hr>
            <div class="centertext"><h3><a href="https://bit.ly/3sznVYz" style="text-decoration: none;">Diese Seite wurde erstellt von Chris und Berty auf Grundlage unser Handwerker Seite </a></h3></div>

        </div>


        <div id="footer">
              <a href="pages/Impressum.php">Impressum</a> | <a href="pages/Kontakte.php"> Kontakt </a>
        </div>

   
</body>
</html>

