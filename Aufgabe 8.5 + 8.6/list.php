<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <title>Liste</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <center><h1>Liste</h1>
        <h3>Bundeskanzler</h3>
        <?php
        
            $bkopen = fopen("bk.csv","r");
            $bkcsv = file("bk.csv");
            //$bpopen = file(fopen("bp.csv","r"));

            echo"<table>";
            echo "<tr>";
            echo "<th>Vorname<th> <th>Nachname<th> <th>Alter<th>";
            echo"</tr>";
            echo"<tbody>";
            foreach($bkcsv as $bk)
            {       

                    $bk = explode(";", $bk);
                    echo"<tr>";
                    for($i = 0; $i <= 2;$i++)
                    {
                    echo"<td>". $bk[$i] ."</td>";
                    }
                    echo"</tr>";
            }
            echo"</tbody>";
           echo "</table> </center>";
            

            
        ?>
    </body>
</html> 