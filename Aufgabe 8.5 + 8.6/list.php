<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <title>Liste</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <center><h1>Liste</h1> <br />
        <h3>Bundeskanzler</h3>
        <?php
        
            $bkopen = fopen("bk.csv","r");
            $bkcsv = file("bk.csv");
            echo"<table class='table table-striped'>";
            echo"<thead>";
            echo "<tr scope='row'>";
            echo "<th scope='col'>Vorname</th><th scope='col'>Nachname</th><th scope='col'>Alter</th>";
            echo"</tr  scope='row'>";
            echo"</thead>";
            echo"<tbody>";
            foreach($bkcsv as $bk)
            {       
                    $bk = explode(";", $bk);
                    echo"<tr scope='row'>";
                    for($i = 0; $i <= 2;$i++)
                    {
                    echo"<td>". $bk[$i] ."</td>";
                    }
                    echo"</tr>";
            }
            echo"</tbody>";
           echo "</table> </center>";
            

           $bpopen = fopen("bp.csv","r");
           $bpcsv = file("bp.csv");
           echo"<br /><center><h3>Bundespräsident</h3>";
           echo"<table class='table table-striped'>";
           echo"<thead>";
           echo "<tr scope='row'>";
           echo "<th scope='col'>Vorname</th><th scope='col'>Nachname</th><th scope='col'>Alter</th>";
           echo"</tr  scope='row'>";
           echo"</thead>";
           echo"<tbody>";
           foreach($bpcsv as $bp)
           {       
                   $bp = explode(";", $bp);
                   echo"<tr scope='row'>";
                   for($i = 0; $i <= 2;$i++)
                   {
                   echo"<td>". $bp[$i] ."</td>";
                   }
                   echo"</tr>";
           }
           echo"</tbody>";
          echo "</table> </center>";
           
        ?>
    </body>
</html> 