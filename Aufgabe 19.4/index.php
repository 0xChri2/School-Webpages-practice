<!DOCTYPE html>
    <head>
        <meta content="utf-8" />
        
    </head>

    <body>
        <center>
            <h1>CD</h1>
                <form method="post">
                <h3>CD Anzahl:<input type="number" name="cds" max="1000" min="1"/> <br />
                Vorname <input type="text" name="vname" /><br />
                Nachname<input type="text" name="nname" /> <br />
                Adresse <input type="text" name="adress" placeholder="Musterstrasse 20" /> <br />
                PLZ:    <input type="text" name="plz" placeholder="40724" min="5" max="5" /> <br />
                Ort:    <input type="text" name="place" placeholder="Hilden" />
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
            if(isset($_POST))
        
        ?>
    </body>
</html>


