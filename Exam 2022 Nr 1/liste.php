<!-- ImChris,1.-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
    <h1>Liste</h1>
    <table border="1px">
    <tr><td>Nummer</td><td>Name</td><td>Größe</td><td>Farbcode</td><td>Farbname</td><td>Feld mit der Hintergrundfarbe</td></tr>
    <?php
    session_start();
    $farbshirtsopen = fopen("farbshirts.csv","r");
    $farbshirts = file("farbshirts.csv");
    $j = 0;
    foreach($farbshirts as $shirts)
    {   
        $shirt = explode(",",$shirts);
        $j++;
            echo"<tr><td>".$j."</td>";
            for($i = 0; $i <= 3;$i++)
            {
                echo"<td>".$shirt[$i]."</td>";
            }
            echo"</tr>";
           
    }
    ?>
    </table>
    </center>
    <br /><br /><br />
    <center><h3>Eingelesene Personen:<?php $j--; echo$j;?></h3></center>
</body>
</html>