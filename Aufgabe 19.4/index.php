<!DOCTYPE html>
    <head>
        <meta content="utf-8" />
    </head>

    <body>
        <center>
            <h1>CD</h1>
                <form method="post">
                <h3>CD Anzahl:<input type="number" name="cds" max="1000" min="1" required /> <br />
                <table><td>
                <tr>Vorname </tr><tr><input type="text" name="vname" required /></tr></td><br />
                Nachname<input type="text" name="nname" required /> <br />
                Adresse <input type="text" name="address" placeholder="Musterstrasse 20" required /> <br />
                PLZ:    <input type="text" name="plz" placeholder="40724" min="5" max="5" required /> <br />
                Ort:    <input type="text" name="place" placeholder="Hilden" required />
                </table>
            <input type="submit" name="submit" value="Submit!"/></h3>
        </form>
        <br /><br /><br />
        <table border="1" style="margin-left: auto; margin-right: auto;">
        <tbody><tr>
        <td><b>Anzahl der CD's</b> </td>
        <td><b>Rabatt pro CD</b> </td>
        <td><b>Versandkosten in €</b> </td>
        </tr>
        <tr>
        <td>1-9</td> 
        <td align="right">keine Lieferung</td>
        <td align="right">kein Versand</td>
        </tr>
        <tr>
        <td>ab 10 </td>
        <td align="right">0%</td>
        <td align="right">4,00</td>
        </tr>
        <tr>
        <td>ab 50</td>
        <td align="right">8%</td>
        <td align="right">8,00</td>
        </tr>
        <tr>
        <td>ab 100</td>
        <td align="right">12%</td>
        <td align="right">15,00</td>
        </tr>
        <tr>
        <td>ab 500</td> 
        <td align="right">25%</td>
        <td align="right">kostenlos</td>
        </tr>
        </tbody></table>
        </center>

        <?php 
            if(isset($_POST['submit']) == true)
            {
                $cd = intval(trim($_POST['cds']));
                $vname = trim($_POST['vname']);
                $nname = trim($_POST['nname']);
                $address = trim($_POST['address']);
                $plz = trim($_POST['plz']);
                $place = trim($_POST['place']);
                $error = false;
                $errormessage[] = array();

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
                if(is_numeric($plz))
                {
                    $errormessage[] = "Die Postleitzahl darf keine Buchstaben enthalten.";
                    $error = true; 
                }
                if(strlen($plz) == 5)
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
                }
                if($error == false)
                {   
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
                    $netto = '10' * $cd;
                    $netto = $netto + $sending;
                    $netto = $netto * $discount;
                    //$netto = (10 * $cd + $sending) * $discount;
                    $MwSt = $netto * 0.19;
                    $brutto = $netto * 1.19;
                    $skonto = $brutto * 0.03;
                    echo"<br /><br /><br /><center><h2>Danke für ihre Bestellung ".$vname." ".$nname.":</h2><br/>";
                    echo "<table border='1' text-decoration='center'><tr><th>Anzahl</th><th>EP</th><th>Rabatt</th><th>Nettobetrag</th><th>Versand</th><th>MwSt</th><th>Gesamtbetrag</th><th>Skontobetrag</th></tr>";
                    echo"<tr><td>".$cd."</td>"."<td>10,00</td><td>".$discounttxt."%</td><td>".$netto.",00</td><td>".$sending."</td><td>".$MwSt."</td><td>".$brutto."</td><td>".$skonto."</td></tr></table></center>";
                }
            
            }
        
        ?>
    </body>
</html>


