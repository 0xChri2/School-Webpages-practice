<?php
if ($_POST['gesendet']) 
{
	$sort1 = $_POST['sort1'];
	$sort2 = $_POST['sort2'];
	$sort3 = $_POST['sort3'];
	$sort4 = $_POST['sort4'];
	$sort5 = $_POST['sort5'];
	$sort6 = $_POST['sort6'];
	$sort7 = $_POST['sort7'];
	$sort8 = $_POST['sort8'];
	$sort9 = $_POST['sort9'];
	$sort10 = $_POST['sort10'];
	$anrede = $_POST['anrede'];
  	$nachname = $_POST['nachname'];
  	$adresse = $_POST['adresse'];
	$sortecount = array();
	$fehler_nachricht=array(); 
	if ($anrede=="") { 
		$fehler_nachricht[]="Bitte geben Sie Ihre Geschlecht an";
	}
	if ($nachname=="") { 
		$fehler_nachricht[]="Bitte geben Sie Ihren Nachnamen ein";
	}
	if ($adresse=="") { 
		$fehler_nachricht[]="Bitte geben Sie Ihre Adresse an";
	}
	if(($sort1 || $sort2 || $sort3 || $sort4 || $sort5 || $sort7 || $sort8 || $sort9 || $sort10 )== false) 
	{
		$fehler_nachricht[]="Bitte geben sie eine Kekssorte an";
	}
	
	if($sort1==true){$sortecount[]="Kekssorte 1";}
	if($sort2==true){$sortecount[]="Kekssorte 2";}
	if($sort3==true){$sortecount[]="Kekssorte 3";}
	if($sort4==true){$sortecount[]="Kekssorte 4";}
	if($sort5==true){$sortecount[]="Kekssorte 5";}
	if($sort6==true){$sortecount[]="Kekssorte 6";}
	if($sort7==true){$sortecount[]="Kekssorte 7";}
	if($sort8==true){$sortecount[]="Kekssorte 8";}
	if($sort9==true){$sortecount[]="Kekssorte 9";}
	if($sort10==true){$sortecount[]="Kekssorte 10";}

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Verarbeitung von Formularen</title>
		<link type = "text/css" rel = "stylesheet" href = "style.css" />
	</head>
	
	<body>
		<h1> Weihnachtskekse </h1>
		<div id="content">
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<h3>Wählen sie ihre Kekssorten: </h3>
			Herr<input type="radio" name="anrede" value="Herr"/>
			Frau<input type="radio" name="anrede" value="Frau"/><br /><br />
			Nachnamen:<input type="text" name="nachname"/><br /><br />
			Adresse:<input type="text" name="adresse"/><br /><br />
			<input type="checkbox" name="sort1">Kekssorte 1</input><br /><br />
			<input type="checkbox" name="sort2">Kekssorte 2</input><br /><br />
			<input type="checkbox" name="sort3">Kekssorte 3</input><br /><br />
			<input type="checkbox" name="sort4">Kekssorte 4</input><br /><br />
			<input type="checkbox" name="sort5">Kekssorte 5</input><br /><br />
			<input type="checkbox" name="sort6">Kekssorte 6</input><br /><br />
			<input type="checkbox" name="sort7">Kekssorte 7</input><br /><br />
			<input type="checkbox" name="sort8">Kekssorte 8</input><br /><br />
			<input type="checkbox" name="sort9">Kekssorte 9</input><br /><br />
			<input type="checkbox" name="sort10">Kekssorte 10</input><br /><br />
			<input type="submit" name="gesendet" value="Senden" />
			<?php
					if ($fehler_nachricht) {
						$anzahl_fehler= count($fehler_nachricht);
						echo "<br /><br />Anzahl der Fehler: ".$anzahl_fehler;
						echo "<ul>"; 
						 $i=0;
						 for($i;$i<$anzahl_fehler;$i++){
							echo "<li>".$fehler_nachricht[$i]."</li>";
							}
						echo "</ul>";
					} 
					
					else 
					{	
						echo"<br /> <br />Vielen Dank für die Bestellung ".$anrede. " ".$nachname;
						echo"<br />Ihre Adresse ist: ".$adresse;
						$sortenanzahl= count($sortecount);
						echo"<br /><br />Anzahl der Sorten:".$sortenanzahl."<br />";
						echo"<br /> Ausgewählte Sorten:";
						$j=0;
						for($j;$j<$sortenanzahl;$j++)
						{
							echo"<br />".$sortecount[$j]."<br />";
						}
					}
				?>
		</form>
	  </div>
	</body>
</html>

