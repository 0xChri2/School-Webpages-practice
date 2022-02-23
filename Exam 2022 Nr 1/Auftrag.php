<!-- ImChris,3-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kontaktdaten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
    <h1>Kontaktdaten</h1><br />
    <form method="POST">
    Unternehmen: <input type="text" name="company" required /><br /><br />
    Ansprechpartner: <input type="text" name="contact" required /><br /><br />
    Ort: <input type="text" name="place" required /><br /><br />
    PLZ: <input type="number" name="plz" minlength="5" maxlength="5" required /><br /><br />
    Telefonnummer: <input type="number" name="phone" required /><br /><br />
    E-mail: <input type="text" name="mail" required /><br /><br />
    <input type="submit" name="submit" value="Absenden" /><br /><br />
    </form>
    <?php
     if((isset($_POST['submit']))==true)
     {
         $company = $_POST['company'];
         $contact = $_POST['contact'];
         $place = $_POST['place'];
         $plz = $_POST['plz'];
         $phone = $_POST['phone'];
         $mail = $_POST['mail'];
        $error = false;

        if(strpos($phone,0)!= 0 && strpos(strrev($phone),0) != strlen($phone))
        {
            $error = true;
            $message[] = "Ihre Telefonnummer muss mit 0 beginnen";
        }
        if(strlen($plz) != 5)
        {
            $error = true;
            $message[] = "Ihre Postleitzahl ist nicht richtig";
        }
        if($error == true)
        {   
            echo"<center><h1>Fehler</h1></center>";
            foreach($message as $messages)
            {
                echo"<center><h3>".$messages."</h3></center>";
            }
        }
        if($error == false)
        {
            echo"<center><h1>Kontakt wurde Gespeichert</h1>";
            echo"</center>";
            $kundeopen = fopen("kunden.csv", "a+");
            fputcsv($kundeopen,array($company,$contact,$place,$plz,$phone,$mail),";");
            fclose($kundeopen);
        }
     }
    ?><center>
</body>
</html>