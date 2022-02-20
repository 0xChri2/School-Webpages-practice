<!DOCTYPE html>
<head>
    <meta content="utf-8" />
    
</head>
    <body>
    <?php
        session_start();
        if($_SESSION['verify'] == true)
        {
            $bkopen = fopen("bk.csv", "r");
            $bkcsv = file("bk.csv");
            $bpopen = fopen("bp.csv", "r");
            $bpcsv = file("bp.csv");
        ?>
        <center> <h1>Bundeskanzler</h1>
        <table border="1 px">
        <tr><td>Vorname</td><td>Nachname</td><td>Geburtstag</td></tr>
        
        <?php
        foreach($bkcsv as $bk)
        {      
            $bk = explode(";", $bk);
            echo"<tr>";
            for($i = 0;$i <=2;$i++)
            {
                echo"<td>".$bk[$i]."</td>";
            }
            echo "</tr>";
        }
        
        ?>
        </tr>
        
        </table>
        </center> 

        <center> <h1>Bundespräsident</h1>
        <table border="1 px">
        <tr><td>Vorname</td><td>Nachname</td><td>Geburtstag</td></tr>
        
        <?php
        foreach($bpcsv as $bp)
        {      
            $bp = explode(";", $bp);
            echo"<tr>";
            for($i = 0;$i <=2;$i++)
            {
                echo"<td>".$bp[$i]."</td>";
            }
            echo "</tr>";
        }
        
        ?>
        </tr>
        
        </table>
        </center>     
        <?php     
        }
        if($_SESSION['verify'] == false)
        {
            echo"<center><h1>Kein Zugriff</h1></center>";
        }
    
    ?>

    </body>
</html