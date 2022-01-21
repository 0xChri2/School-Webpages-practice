<?php
    function field_phonenumber($telefon, &$fehler_nachricht)
    {   
        $success = 1;
        if($telefon=="")
		{
		    $success = 0;
	        $fehler_nachricht[]="Geben Sie bitte Ihren Telefonnummer an";
		}

        if(strpos($telefon, "+") === NULL)
        {
            $success = 0;
            $fehler_nachricht[]="Ihre Telefonnummer muss mit einem Plus beginnen.";
        }

        if(strpos($telefon, "+") === false)
        {
            $success = 0;
            $fehler_nachricht[]="Das Plus muss am Anfang stehen.";
        }
		
        if(strrpos($telefon, "+") != strpos($telefon,"+"))
	    {
	        $success = 0;
	        $fehler_nachricht[]="Bitte nutzen Sie nur ein Pluszeichen in der Telefonnummer.";
		}

        if(strlen($telefon) >= 15)
        {
            $success = 0;
            $fehler_nachricht[]="Ihre Telefonnummer ist zu lang.";
        }

        if(strlen($telefon) <= 8)
        {
            $success = 0;
            $fehler_nachricht[]="Ihre Telefonnummer ist zu kurz.";
        }

        for($i = 1; $i < strlen($telefon); $i++)
        {
            if($telefon[$i] != "+" && $telefon[$i] != "0" && $telefon[$i] != "1" && $telefon[$i] != "2" && $telefon[$i] != "3" && $telefon[$i] != "4" && $telefon[$i] != "5" && $telefon[$i] != "6" && $telefon[$i] != "7" && $telefon[$i] != "8" && $telefon[$i] != "9")
            {
                $success = 0;
                $fehler_nachricht[]="Ihre Telfonnummer enthält etwas anderes wie zahlen";
            }
        }
        
        return $success;
    }

    ?>