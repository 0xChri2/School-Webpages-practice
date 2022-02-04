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
                        <li class="submenu"><a href="../index.php">Startseite</a></li>
                        <li class="submenu"><a href="Über uns.php">Über uns</a></li>
						<li class="submenu"><a href="Tätigkeiten.php">Tätigkeiten</a></li>
						<li class="submenu"><a href="FAQ.php">FAQ</a></li>
						<li class="submenu"><a href="Kontakte.php">Kontakte</a></li>
						<li class="submenu"><a href="Impressum.php">Impressum</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <div id="banner">
        </div>
        <div id="article">

		<?php 
			//if(isset($_POST['Senden'])==0)
			//{
		?>

        <form action="" method="post">
		<div class="headline"><h1><u>Maler</u></h1></div>
		<div class="form">
			<center>	
			<p>
				Anrede <select name="Anrede" size="1" value="<?php echo $_POST['Anrede'] ?>">
				<option>Herr</option>
				<option>Frau</option>
				</select>
				<br /><br />
				Vorname:<input type="text" name="vorname" placeholder="Max" value="<?php echo $_POST['vorname'] ?>"/><br /><br />
				Nachname:<input type="text" name="nachname" placeholder="Mustermann" value="<?php echo $_POST['nachname'] ?>"/><br /><br />
				<h3>Nachricht</h3>
				<textarea name="message" cols="50" rows="10"> 
				</textarea>
				
			<hr />
			
			<input type="submit" name="Senden" value="Anfrage abschicken!">
			<input type="reset">
			</p>
			</center>
		</div>
        </form>
		
		<?php
			
			if(isset($_POST['Senden'])==true)
			{			

				//error message 
				$error = false;
				$fehler_nachricht=array();
			
				//vorname
				$vorname = trim($_POST['vorname']);
				if($vorname=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Vornamen ein";
				}

				//nachname
				$nachname = trim($_POST['nachname']);
				if($nachname=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben sie bitte ihren Nachnamen ein";
				}
				
				//message textbox 
				$message = trim($_POST['message']);
				$today = time();
				$today = date("d.m.Y - H:i",$today);
				$pfad = "Eingabe/";
                $messagetxt = "Eingabe.docx";
				$formdata = $vorname ."\t". $nachname ."\t". $message."\t".$today."\n";
				$zeiger = fopen($pfad.$messagetxt,"a+");
				fputs($zeiger,$formdata);
				fclose($zeiger);
				
				//error message
				if($error == true)
				{
					echo"<center><h1>Fehlermeldung</h1></center><br/>";
				}
				foreach ($fehler_nachricht as $fehler)
				{		
					echo "<center><h2>".$fehler."</h2></center>";
				}
				
				//success message
				$anrede = $_POST['Anrede'];
				if($error == false)
				{
				echo"<br /><br /><center><h2> Vielen Dank, ". $_POST['Anrede'] . " " . $_POST['nachname'] . ". Wir melden uns bald bei Ihnen!</h4>";
				echo($formdata);
				}				

			}
		
		
		?>      


        </div>


        <div id="footer">
              <a href="Impressum.php">Impressum</a> | <a href="Kontakte.php"> Kontakt </a>
        </div>

   
</body>
</html>

