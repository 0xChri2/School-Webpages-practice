<!DOCTYPE html>
<head>
    <meta content="utf-8" />
    <title>Bundeskanzler oder Bundespräsident</title>
</head>
    <body>
        <center><h1>Bundeskanzler oder Präsident</h1></center>

        <center>
        <form method="post">
        Vorname <input type="text" name="vname"/><br /><br />
        Nachname <input type="text" name="nname"/><br /><br />
        Geburtstag <input type="date" name="birth" /><br /><br />
        Staatsangehörigkeit
        <select name="nationality">
        <option>Deutsch</option>
        <option>Etwas anderes</option>
        </select><br /><br />
        <input type="submit" name="submit" /> <button><a href="list.php">Liste</a></button>
        </form>
        <?php
            
            session_start();
            if((isset($_POST['submit'])) == true)
            {
                $vname = $_POST['vname'];
                $nname = $_POST['nname'];
                $birth = $_POST['birth'];
                $nationality = $_POST['nationality'];
                $error_array = array();
                $bk = false;
                $bp = false;
                $error = false;
                $birth = date("Y", strtotime($_POST['birth']));
                $today = date("Y", time());
                $age = $today - $birth;
                if($vname == "")
                {  
                    $error = true;
                    $error_array[] = "Bitte geben Sie ihren Vornamen an.";
                }
                if($nname == "")
                {
                    $error = true;
                    $error_array[] = "Bitte geben Sie ihren Nachnamen an.";
                }
                if($nationality == "")
                {
                    $error = true;
                    $error_array[] = "Bitte geben Sie ihre Nationalität an.";
                }
                if($age >= 120 | $age <= 0)
                {
                    $error = true;
                    $error_array[] = "Ihr Alter ist unrealistisch";
                }
                if($age >= 18 && $nationality == "Deutsch")
                {
                    $bk = true;
                    $message[] = "Sie können Bundeskanzler werden.";
                }
                if($age >= 40 && $nationality == "Deutsch")
                {
                    $bp = true;
                    $message[] = "Sie können Bundepräsident werden.";
                }

                if($error == true)
                {   
                    $_SESSION['verify'] = false;
                    echo"<center><h1>Fehlermeldung</h1></center>";
                    foreach($error_array as $errormessage)
                    {
                        echo"<center><h3>".$errormessage."</h3></center>";
                    }
                }
                if($error == false)
                {   
                    $_SESSION['verify'] = true;
                    echo "<center><h1>Erfolg</h1></center>";
                    foreach($message as $messages)
                    {
                        echo"<center><h3>".$messages."</h3></center>";
                    }
                    if($bk == true)
                    {
                        $bkopen = fopen("bk.csv","a+");
                        fputcsv($bkopen,array($vname, $nname, $birth),";");
                        fclose($bkopen);
                    }
                    if($bp == true)
                    {   
                        $bpopen = fopen("bp.csv","a+");
                        fputcsv($bpopen,array($vname, $nname, $birth),";");
                        fclose($bpopen);
                    }
                }
                
            }
        ?>

        </center>
    </body>
</html>