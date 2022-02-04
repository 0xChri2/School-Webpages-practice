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
    
            <h1> Array Üben </h1>
			
			<?php 
				$adresse = array( "Ben","19","Max","23");
			?>
			
			<form action="" method="post">
			
			<input type="Submit" name="ausgabe" value="Ausgabe"/>
			
			</form>

			<?php 
				if(isset($_POST['ausgabe'])==true)
				{
					$anzahl = count($adresse);
					$i = 0;
					echo "<h4><br />Anzahl= ".$anzahl;
					echo"<br /><br /><table width='100%' border='2'>";
					echo"<tr><td><b>Name</b></td><td><b>Alter</b></td></tr></h4><h5>";
					do
					{
						echo"<tr>";
						for($i;$i < 2;$i++)
						{
							echo"<td>".$adresse[$i]."</td>";
						} 
						echo"</tr>";
						for($i;$i < 4;$i++)
						{
							echo"<td>".$adresse[$i]."</td>";
						} 
					} while($i < $anzahl);
					echo"</table></h5>";
				}
			?>

			<?php
				
			?>

            

</body>
</html>