<?php
require'phpqrcode/qrlib.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lottozahlen</title>
</head>
<body>
    <div class="start">
    <center>
    <u><h1>Lottzahlen</h1></u>
    <br />
    <h4>Dies ist ein Lottospiel ohne Einsatz. Sie müssen mindestens 18 Jahre sein<br /> und können pro Zahl nur zwischen 1 und 49 angeben.</h4><br />
    <form method="POST">
        Alter <input type="number" name="Alter" placeholder="20" required /><br /><br />
        Zahl 1 <input type="number" name="Zahl1" placeholder="12" min="1" max="49" required /><br /><br />
        Zahl 2 <input type="number" name="Zahl2" placeholder="32" min="1" max="49" required /><br /><br />
        Zahl 3 <input type="number" name="Zahl3" placeholder="49" min="1" max="49" required /><br /><br />
        Zahl 4 <input type="number" name="Zahl4" placeholder="12" min="1" max="49" required /><br /><br />
        Zahl 5 <input type="number" name="Zahl5" placeholder="5" min="1" max="49" required /><br /><br />
        Zahl 6 <input type="number" name="Zahl6" placeholder="2" min="1" max="49" required /><br /><br />
        <input type="submit" value="Tippen abgeben" name="submit" />

    </form>
    <?php
        
        if(isset($_POST['submit'])){
            $Alter = $_POST['Alter'];
            $tipp[0] = $_POST['Zahl1'];
            $tipp[1] = $_POST['Zahl2'];
            $tipp[2] = $_POST['Zahl3'];
            $tipp[3] = $_POST['Zahl4'];
            $tipp[4] = $_POST['Zahl5'];
            $tipp[5] = $_POST['Zahl6'];
            $Zahlen = array();
            $Zahlen[0] = rand(1,49);
            $Zahlen[1] = rand(1,49);
            $Zahlen[2] = rand(1,49);
            $Zahlen[3] = rand(1,49);
            $Zahlen[4] = rand(1,49);
            $Zahlen[5] = rand(1,49);

            $errormsg = array();
            $error = false;
            if($Alter <= 18){
                
                $errormsg[] = "Du bist zu jung um Lottozahlen zu tippen!";
                $error = true;
            }
            if($Alter >= 120){
                
                $errormsg[] = "Du bist zu alt um Lottozahlen zu tippen!";
                $error = true;
            }
            if($error == false)
            {   
               
                $gesamtlotto = $Zahlen[0] ." ". $Zahlen[1] ." ". $Zahlen[2] ." ". $Zahlen[3] ." ". $Zahlen[4] ." ". $Zahlen[5];
                $gesamttipp = $tipp[0] ." ". $tipp[1] ." ". $tipp[2] ." ". $tipp[3] ." ". $tipp[4] ." ". $tipp[5];
                $qrcode = "Lotto:".$gesamtlotto. "Dein Tipp:".$gesamttipp;
                if($gesamtlotto == $gesamttipp){
                    echo"<br/> <img src='https://www.langweiledich.net/wp-content/uploads/2016/06/giphy-2.gif' /> <br />";
                    echo "<h2>Glückwunsch du hast gewonnen!</h2>";
                    echo"<h3>Jetzt bist du Reich</h3>";
                    $won = true;
                }
                else{
                    echo"<br /> <img src='https://i.gifer.com/origin/b4/b4993c2b9410a7df76c72bf42af21fc4.gif' /> <br/>";
                    echo "<h2>Du hast leider verloren!</h2>";
                    echo"<h3>Viel Glück beim nächtsen mal.</h3>";
                    $won = false;
                }
                
                echo"<br/><table border='1px' width='100%'><tr><td><h4>Die Lottozahlen:</td>";
                foreach($Zahlen as $Zahl){
                    echo "<td>". $Zahl . "</td>";
                }
                echo"</h4></tr>";
                echo"<tr><td><h4>Ihre Lottozahlen: </td>";

                foreach($tipp as $Zahl){
                    echo "<td>". $Zahl . "</td>";
                }
                echo"</tr>";
                QRcode::png($qrcode ,'QRCODE/Zahlen.png');
                echo"</h4></table></div><br/><br /><div class='qrcode_img'><img src='QRCODE/Zahlen.png' /></div>";
                echo "<br /><br /><div class='ending'>";
               
            }
            else if($error == true)
            {
                echo "<h1>Fehlernachricht</h1>";
                foreach($errormsg as $msg){
                    echo $msg . "<br />";
                }
            }
        }
    
    ?>
    </div>
    </center>
</body>
</html>