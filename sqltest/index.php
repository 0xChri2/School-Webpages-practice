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
        </form>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";
            $conn = new mysqli($hostname, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            if(isset($_POST['submit'])){
                $vname = $_POST['vname'];
                $nname = $_POST['nname'];
                $birthday = $_POST['birthday'];
                $sql = "INSERT INTO person (vname, nname, birthday) VALUES ('$vname', '$nname', '$birthday')";
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            if(isset($_POST['submit'])){
                $sql = "SELECT * FROM person";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<table><tr><th>Vorname</th><th>Nachname</th><th>Geburtstag</th></tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["vname"]. "</td><td>" . $row["nname"]. "</td><td>" . $row["birthday"]. "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
            }

            $conn->close();
        ?>
    </body>
</html>