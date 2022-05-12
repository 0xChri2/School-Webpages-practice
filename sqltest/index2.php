<!DOCTYPE html>
<head>
    <meta content="utf-8"/>
    <link rel="stylesheet" href="main.css"/>
</head>
    <body>
        <h1>SQL Test</h1>
        <form method="POST">
            Name <input type="text" name="vname"/><br/>
            Vorname <input type="text" name="nname"/><br/>
            Geburtstag<input type="date" name="birthday"/><br/>
            <input type="submit" value="Absenden" name="submit" />
            <button value="Abfrage" name="request">Abfrage</button>
        </form>
        
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";
            $conn = mysqli_connect($hostname, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            if(isset($_POST['submit'])){
                $vname = $_POST['vname'];
                $nname = $_POST['nname'];
                $birthday = $_POST['birthday'];
                $text = [$vname, $nname, $birthday];
                $open = fopen("test.txt", "a+");
                if($open == false){
                    echo "Error data can not be saved";
                }
                else
                {
                    fputcsv($open, $text,";");
                    fclose($open);
                }
                $sql = "INSERT INTO person (vname, nname, birthday) VALUES ('$vname', '$nname', '$birthday')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
               
            }
            if(isset($_POST['request']))
            {
                $sql = "SELECT * FROM person;";
                $result = mysqli_query($conn, $sql);
                echo "<table><tr><th>Vorname</th><th>Nachname</th><th>Geburtstag</th></tr>";
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>" . $row["vname"]. "</td><td>" . $row["nname"]. "</td><td>" . $row["birthday"]. "</td></tr>";
                }
               
            }
            }
            
        ?>
    </body>
</html>