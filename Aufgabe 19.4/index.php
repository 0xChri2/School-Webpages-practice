<!DOCTYPE html>
    <head>
        <meta content="utf-8" />
    </head>

    <body>
        <center>
            <h1>CD</h1>
                <form method="post">
                <h3>CD Anzahl:<input type="number" name="cds" max="1000" min="1"/> <br />
                <table><td>
                <tr>Vorname </tr><tr><input type="text" name="vname" /></tr></td><br />
                Nachname<input type="text" name="nname" /> <br />
                Adresse <input type="text" name="address" placeholder="Musterstrasse 20"  /> <br />
                PLZ:    <input type="text" name="plz" placeholder="40724" min="5" max="5" /> <br />
                Ort:    <input type="text" name="place" placeholder="Hilden" />
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
                $cd = $_POST['cds'];
                $vname = $_POST['vname'];
                $nname = $_POST['nname'];
                $address = $_POST['address'];
                $plz = $_POST['plz'];
                $place = $_POST['place'];


                if($cd >= 500)
                {
                    $sending = 0;
                    $netto = (10 * $cd + $sending) * 0.75;
                    $brutto = $netto * 1.19;
                    
                }
                
                if($cd >= 100)
                {
                    $sending = 0;
                    $netto = (10 * $cd + $sending) * 0.88;
                    $brutto = $netto * 1.19;
                }
            }
        
        ?>
    </body>
</html>


