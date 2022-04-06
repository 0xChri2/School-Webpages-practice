<?php
require'phpqrcode/qrlib.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottozahlen</title>
</head>
<body>
    <center>
    <h1>Lottzahlen</h1>
    <br />
    <form method="POST">
        Alter<input type="number" name="Alter" placeholder="20" /><br /><br />
        Zahl 1 <input type="number" name="Zahl1" placeholder="1" /><br /><br />
        Zahl 2 <input type="number" name="Zahl2" placeholder="2" /><br /><br />
        Zahl 3 <input type="number" name="Zahl3" placeholder="3" /><br /><br />
        Zahl 4 <input type="number" name="Zahl3" placeholder="4" /><br /><br />
        Zahl 5 <input type="number" name="Zahl3" placeholder="5" /><br /><br />
        Zahl 6 <input type="number" name="Zahl3" placeholder="6" /><br /><br />
        <input type="submit" value="Tippen!" name="submit" />

    </form>
    <?php
        
        if(isset($_POST['submit'])){
            $Alter = $_POST['Alter'];
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
            if($error == false)
            {   
                echo"<h2>Ihre Lottozahlen sind:</h2>";
                foreach($Zahlen as $Zahl){
                    echo $Zahl . " ";
                }
                $gesamtlotto = $Zahlen[0] + $Zahlen[1] + $Zahlen[2] + $Zahlen[3] + $Zahlen[4] + $Zahlen[5];
                
                QRcode::png($gesamtlotto,'QRCODE/Zahlen.png');
                echo"<br /><img src='QRCODE/Zahlen.png' />";
    
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
    </center>
</body>
</html>