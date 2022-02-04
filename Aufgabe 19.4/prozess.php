<?php 

session_start();

if(isset($_POST['submit']) == true)
{
    $cd = intval(trim($_POST['cds']));
    $vname = trim($_POST['vname']);
    $nname = trim($_POST['nname']);
    $address = trim($_POST['address']);
    $plz = intval($_POST['plz']);
    $place = trim($_POST['place']);
    $error = false;
    
    $errormessage = array();
    $costs = 10;

    if($vname == "")
    {
        $errormessage[] = "Bitte Geben Sie Ihren Vornamen an.";
        $error = true; 
    }
    if($nname == "")
    {
        $errormessage[] = "Bitte Geben Sie Ihren Vornamen an.";
        $error = true; 
    }
    if(!is_numeric($plz))
    {
        $errormessage[] = "Die Postleitzahl darf keine Buchstaben enthalten.";
        $error = true; 
    }
    if($error == true)
    {   
        echo"<center><h1>Fehlernachricht</h1></center>";
        foreach($errormessage as $errors)
        {
        
            echo"<center><h3>".$errors."</h3></center>";
        }
        session_unset();   
        session_destroy();
        exit;
    }
    if($error == false)
    {       
        $_SESSION["permit"] = "permit";
        if($cd >= 1)
        {
            $sending = "Keine Versand";
            $discount = 0;
            $discounttxt = "Keine Rabatt";
        }
        if($cd >= 10)
        {
            $sending = 4;
            $discount = 1;
            $discounttxt = 0;
        }                
        if($cd >= 50)
        {
            $sending = 8;
            $discount = 0.92;
            $discounttxt = 8;
        }
        if($cd >= 100)
        {
            $sending = 15;
            $discount = 0.88;
            $discounttxt = 12;
        }
        if($cd >= 500)
        {
            $sending = 0;
            $discount = 0.75;
            $discounttxt = 25;
        }

            $netto = ($costs * $cd + $sending) * $discount;
            $MwSt = $netto * 0.19;
            $brutto = $netto * 1.19;
            $skonto = $brutto * 0.03;
            echo "<br /><br /><br /><center><h2>Danke für ihre Bestellung ".$vname." ".$nname.":</h2><br/>";
            echo "<table border='1' text-decoration='center'><tr><th>Anzahl</th><th>EP</th><th>Rabatt</th><th>Nettobetrag</th><th>Versand</th><th>MwSt</th><th>Gesamtbetrag</th><th>Skontobetrag</th></tr>";
            echo "<tr><td>".$cd."</td>"."<td>10,00</td><td>".$discounttxt."%</td><td>".$netto.",00</td><td>".$sending."</td><td>".$MwSt."</td><td>".$brutto."</td><td>".$skonto."</td></tr></table></center>";
            


            if($_SESSION["permit"] == "permit")
            {
                echo"<br /><center><a href='rechnung.php'><button>PDF Rechnung</button></a></center>";
            }                    
    }

}

?>