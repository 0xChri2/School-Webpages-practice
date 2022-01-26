
<! DOCTYPE html>
    <head>
        <meta content="uft-8"/>
    </head>

        <body>
          <form method="post">
              Vorname<input type="text" name="vname" /> <br />
              Nachname<input type="text" name="nname" />  <br />
              Geburtsdatum <input type="date" name="birth" /><br />
              Staatsangehörigkeit
              <Select name="nationality">
                  <option value="Deutsch">Deutsch</option>
                  <option value="Nicht Deutsch">Nicht Deutsch</option> 
              </select><br />
              <input type="submit" name="submit" value="Submit!" />
          </form>  
          <?php 
          if((isset($_POST['submit']))==true){
         // if(isset($_POST['birth']) && preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $_POST['birth']) && !empty(trim($_POST['brith'])))
          //{
            $error = true;
            $message = array();
            $birth = $_POST['birth'];
            $birth = strtotime(date("Y-m-d", strtotime($birth)));
            $time = strtotime(date("Y-m-d" ,time()));

            $nationality = $_POST['nationality'];

            $age = $time - $birth;
            if($age >= 40 && $nationality == "Deutsch")
            {
               $message[] = "Sie können Bundespräsident werden.";
               $error = false;
            }
            if($age >= 18 && $nationality == "Deutsch")
            {
                $message[] = "Sie können Bundeskanzler werden.";
                $error = false;
            }
            


            foreach($message as $messages)
            {   
                echo "";
                if($error == false)
                {
                    echo "<center><h1>".$messages."</h1></center>";
                }
                if($error == true)
                {
                    echo"<center><h1>".$messages."</center> </h1>";
                }
            }
          }
         
          
          ?>

        </body>
</html>