

<!--Christoph Riedel-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
	 <head>
		  <title>Allround Handwerkbetrieb</title>
		  <meta http-equiv="content-type" content="text/plain; charset=utf-8" />
		  <meta http-equiv="content-language" content="de" />
		  <link type = "text/css" rel = "stylesheet" href = "../style.css" />
	</head>

<body bgcolor="#101010">

        <div id="heading">
            <h1> Allround Handwerkerbetrieb! </h1>


        </div>
        <div id="menu">
            <ul>
                <li class="topmenu">
                    <a href=""><img src="../pictures/Drei Striche.png" alt="Drei Striche"/></a>
                    
                    <ul>
                        <li class="submenu"><a href="../index.php">Startseite</a></li>
                        <li class="submenu"><a href="Über uns.php">Über uns</a></li>
						<li class="submenu"><a href="nachrichten.php">nachrichten</a></li>
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
		<div class="headline"><h1><u>Regestierung</u></h1></div>
		<div class="form">
			<center>	
			<p>
				Anrede <select name="Anrede" size="1" value="<?php echo $_POST['Anrede'] ?>">
				<option>Herr</option>
				<option>Frau</option>
				</select>
				<br /><br />
				Vorname:<input type="text" name="vorname"  <?php if(isset($_POST['Senden'])==true){echo 'value="'.$_POST['vorname']. '"';} else {echo "placeholder='Max'";} ?> require/><br /><br />
				Nachname:<input type="text" name="nachname" <?php if(isset($_POST['Senden'])==true){echo 'value="'.$_POST['nachname']. '"';} else {echo "placeholder='Mustermann'";} ?> require/><br /><br />      
				Telefon:<input type="tel" name="telefon"<?php if(isset($_POST['Senden'])==true){echo 'value="'.$_POST['telefon']. '"';} else {echo "placeholder='+12345678'";} ?> require/><br /><br />
				<hr />
			<input type="submit" name="Senden" value="Regestireren"/>
			<input type="reset"/>
			</p>
			</center>
		</div>
        </form>

        <?php
			
			if(isset($_POST['Senden'])==true)
			{
                //vorname
				$vorname = trim($_POST['vorname']);
				if($vorname=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben Sie bitte Ihren Vornamen ein.";
				}
				$vorname = ucwords($vorname);

				//nachname
				$nachname = trim($_POST['nachname']);
				if($nachname=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben Sie bitte Ihren Nachnamen ein.";
				}
				$nachname = ucfirst($nachname);

                //telefon
				$telefon = trim($_POST['telefon']);
				if($telefon=="")
				{
				$error = true;
				$fehler_nachricht[]="Geben Sie bitte Ihren Telefonnummer an";
				}
				if(strrpos($telefon, "+")!= strpos($telefon,"+"))
				{
				$error = true;
				$fehler_nachricht[]="Bitte nutzen Sie nur ein Pluszeichen in der Telefonnummer.";
				}

                //error message
				if($error == true)
				{
					echo"<div class='centertext'><h1>Fehlermeldung</h1></div><br/>";
				}
				foreach ($fehler_nachricht as $fehler)
				{		
					echo "<div class='centertext'><h2>".$fehler."</h2></div>";
				}
                
                //success message
				$anrede = $_POST['Anrede'];
				if($error == false)
				{
				echo"<br /><br /><div class='centertext'><h2> Vielen Dank, ". $_POST['Anrede'] . " " . $_POST['nachname'] . ". </h2><h2>Danke für Ihre Regestierung!</h2>";
                echo"</div><br />";
                

                if($zeiger)
                {
                    //user daten
						$today = time();
						$today = date("d.m.Y - H:i",$today);
                        $pfad = "../data";
        		        $messagetxt = "user.csv";
						$formdata = $vorname ."\t". $nachname ."\t". $telefon ."\t".$today."\n";
						$zeiger = fopen($pfad.$messagetxt,"a+");
						fputs($zeiger,$formdata);
						fclose($zeiger);	
                }
            
                }
            }
        ?>

        </div>


        <div id="footer">
              <a href="Impressum.php">Impressum</a> | <a href="Kontakte.php"> Kontakt </a>
        </div>

   
</body>
</html>

