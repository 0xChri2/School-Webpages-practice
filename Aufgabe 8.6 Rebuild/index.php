<!DOCTYPE html>
<head>
    <meta content="utf-8" />
    <title>Bundeskanzler oder Bundespräsident</title>
</head>
    <body>
        <center><h1>Bundeskanzler oder Präsident</h1></center>

        <center>
        <form>
        Vorname <input type="text" name="vname"/><br /><br />
        Nachname <input type="text" name="nname"/><br /><br />
        Geburtstag <input type="date" name="birth" /><br /><br />
        Staatsangehörigkeit
        <select name="nationality">
        <option>Deutsch</option>
        <option>Etwas anderes</option>
        </select>
        <input type="submit" name="submit" />
        </form>
        <?php
            if(isset($_POST['submit']) == true)
            {
                $vname = $_POST['vname'];
                $nname = $_POST['nname'];
                $birth = $_POST['birth'];
                $nationality = $_POST['nationality'];

            }
        ?>

        </center>
    </body>
</html>