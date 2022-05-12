<?php
    session_start();
    require_once("../QRcodeTele/lib/phpqrcode/qrlib.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAVE A NICE DAY</title>
</head>
<body>
<?php
    if($_SESSION["access"] == true)
    {
        echo"<h1>YOU GOT ACCCESS NICE JOB!!!</h1>";
        $qr = QRcode::png("http://chris-industries.de");
        echo"<img src='$qr'/>";
    }
    else
    {
        echo"<center><h1>Access denied</h1></center>";
    }
?>

    
</body>
</html>
