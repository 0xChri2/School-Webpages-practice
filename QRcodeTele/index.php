<!DOCTYPE html>
    <header>
    <title>QRCODE</title>

    </header>

    <body>
    <form method="POST"> 
    <center>
    <h1>Geben Sie bitte Ihre Telefonnummer an</h1><br />
    Telfon: <input type="tel" name="tel" placeholder="+49123456789" minlength="8" maxlenght="15" <?php if(isset($_POST['submit'])==true){echo 'value="'.$_POST['tel']. '"';}?> ></input><br /><br />
    <input type="submit" name="submit" value="Submit">
    </center>
    </form>
    <?php
        include("lib/phpqrcode/qrlib.php");
        include("lib/phonecheck.php");

        if((isset($_POST['submit']))==true)
        {
            $error = 0;
            $errormessage = array();
            $phone = $_POST['tel'];
            if(field_phonenumber($phone, $errormessage) == 0)
            {   
                foreach($errormessage AS $errors)
                {
                echo "<center>";
                echo "<h4>".$errors ."</h4>";
                echo"</center>";
                }
            }
            else
            {   
                echo"<center><h1>Ihre Telefonnummer ist richtig.</h1>";
                QRcode::png($_POST['tel'], "test.png");
                echo "<img src='test.png' width='150px' height='150px' /></center>";
            }
           
        }
    
    ?>

    </body>

</html>