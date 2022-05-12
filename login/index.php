<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css"/>
    <title>Login</title>
</head>
<body>
    
    <div class="login">
        <h1>Login</h1>
        <form method="post">
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" /><br />
            <input type="submit" value="Login" name="login" />
    </form>
    </div>
    <?php
        if(isset($_POST["login"]))
        {   
            $username = $_POST["username"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0)
            {
                echo "Login Successful";
                $_SESSION["access"] = true; 
                echo"<a href='access.php'>Access</a>";
            }
            else
            {
                echo "Login Failed";
                $_SESSION["access"] = false;
            }
        }
    ?>
    </body>
</html>