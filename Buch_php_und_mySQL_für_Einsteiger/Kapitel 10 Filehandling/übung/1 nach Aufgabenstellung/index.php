<form action="index.php" method="POST">
    Zahl mit der Multipliziert werden soll: <input type="text" name="Feld1"><br>
    <input type="submit" value="Berechnen">
</form>

<?php

$bekannteZahl;
$handle =fopen("bestehendeZahl.txt", "r");
if ($handle) {
    $bekannteZahl = intval(fgets($handle));
    fclose($handle);
}

$handle = fopen("neueZahl.txt", "w");
if ($handle) {
    if (!empty($_POST["Feld1"])) {
        if ($_POST["Feld1"] != "" && is_numeric($_POST["Feld1"])){
            $eingabezahl = $_POST["Feld1"];
            fputs($handle, ($bekannteZahl * $eingabezahl));
        }
    }
    fclose($handle);
}

?>








