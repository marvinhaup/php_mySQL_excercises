<form action="index.php" method="POST"> 
    Name: <input type="text" name="Name" size="30"><br>
    email-Adresse: <input type="text" name="Email" size="30"><br>
    <input type="submit" value="Absenden">
</form>

<?php

if ( !empty($_POST["Name"]) && !empty($_POST["Email"]) ) {
    $handle = fopen("nutzerdaten.txt", "w");
    if ($handle) {
        if ($_POST["Name"] != "") {
            $nutzername = $_POST["Name"];
            fputs($handle, $nutzername."\n");
        }

        if ($_POST["Email"] != "") {
            $nutzeremail = $_POST["Email"];
            fputs($handle, $nutzeremail."\n");
        }
        fclose($handle);
    }
    else {
        print "Die Datei \"nutzerdaten.txt\" konnte nicht geöffnet werden";
    }
}

?>