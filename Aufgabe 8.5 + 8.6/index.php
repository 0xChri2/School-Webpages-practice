
<! DOCTYPE html>
    <head>
        <meta content="uft-8"/>
    </head>

        <body>
           <center> <h1>Bundeskanzler oder Bundespräsident</h1>
          <form method="post">
              Vorname<input type="text" name="vname" required/> <br />
              Nachname<input type="text" name="nname" required />  <br />
              Geburtsdatum <input type="date" name="birth" required /><br />
              Staatsangehörigkeit
              <Select name="nationality">
                  <option value="Deutsch">Deutsch</option>
                  <option value="Nicht Deutsch">Nicht Deutsch</option> 
              </select><br />
              <input type="submit" name="submit" value="Submit!" />
              <button><a href="list.php">Liste</a></button>
          </form>  </center>
          <?php 
          if((isset($_POST['submit']))==true){
         
            $bp = false;
            $bk = false;
            $error = false;
            $message = array();

            $vname = $_POST['vname'];
            $nname = $_POST['nname'];
            $nationality = $_POST['nationality'];
            $birth = date("Y", strtotime($_POST['birth']));
            $time = date("Y" , time());
            
            $age = $time - $birth;
            
            if($age >= 40 && $nationality == "Deutsch")
            {
               $message[] = "Sie können Bundespräsident werden.";
               $bp = true;
            }
            if($age >= 18 && $nationality == "Deutsch")
            {
                $message[] = "Sie können Bundeskanzler werden.";
                $bk = true;
            }
            if($nationality != "Deutsch")
            {
                $message[] = "Ihre Staatsangehörigkeit muss Deutsch sein um Bundespräsident oder Bundeskanzler zu werden.";
            }
            if($age < 18)
            {
                $message[] = "Sie sind zu jung um Bundeskanzler oder Bundespräsident zu werden.";
            }
            if($age <= 0)
            {
                $errormessage[] = "Dieses Alter ist ungültig";
                $error = true;
            }
            if($age >= 120)
            {
                $errormessage[] = "Ihr alter ist unrealistisch";
                $error = true;
            }

            if($error == false)
            {
                foreach($message as $messages)
                {   
                        echo"<center><h1>".$messages."</center> </h1>";
                }
                if($bp == true)
                {
                    $bpopen = fopen("bp.csv", "a+");
                    fputcsv($bpopen, array($vname, $nname, $age), ";");
                }
                if($bk == true)
                {
                    $bkopen = fopen("bk.csv", "a+");
                    fputcsv($bkopen, array($vname, $nname, $age),";");
                }
            }

            if($error == true)
            {
                foreach($errormessage as $errorm)
                {
                    echo"<center><h1>".$errorm."</center> </h1>";
                }
            }
            

          }
         
          
          ?>

        </body>
</html>