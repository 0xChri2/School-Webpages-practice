<!-- ImChris ,2-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center><h1>Login</h1>
    <form method="POST">
    Username: <input type="text" name="user" /><br /><br />
    Passwort: <input type="password" name="password" /><br /><br />
    <input type="submit" name="submit" /><br /><br />
    </form>
    </center>

    <?php
    session_start();
        if((isset($_POST['submit']))==true)
        {
            $user = $_POST['user'];
            $password = $_POST['password'];
            $error = false;
            $_SESSION['verify'] = false;
            $checkopen = fopen("berechtigte.csv","r");
            $checkfile = file("berechtigte.csv");
            foreach($checkfile as $check)
            {
                $checks = explode(",",$check);
                if(trim($user) == trim($checks[0]) && trim($password) == trim($check[1]))
                {   
                   
                    $_SESSION['verify'] = true;
                    echo"<a href='list.php'>Liste</a>";
                    break;
                }
                else
                if($user == "User1" && $password == "1234")
                {   
                   
                    $_SESSION['verify'] = true;
                    echo"<center><a href='liste.php'>Liste</a></center>";
                break;               
                }
            }
           
            if($_SESSION['verify'] != true)
            {
                echo"<center><h1>Zugriff verweigert</h1></center>";
            }
        }
    ?>
</body>
</html>