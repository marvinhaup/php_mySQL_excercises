<?php

// Lese bekannte Zahl aus der Datei "bekannteZahl.txt aus"
$bekanntezahl; 
$handle = fopen("bekannteZahl.txt", "r");
if ($handle) {
    $bekanntezahl = fgets($handle);
    fclose($handle);
}

?>

<form action="index.php" method="POST">
    In "bestehendeZahl.txt" geschriebene Zahl: 
    <input type="text" id="Feld1" value="<?php print $bekanntezahl; ?>"><br>
    Mit welcher Zahl soll Multipliziert werden: 
    <input type="text" name="Feld2"><br>
    <input type="submit" value="Berechnen">
</form>

<?php


// Prüfe ob die Zahl aus Feld2 in dem POST-body enthalten ist und eine Zahl ist
if ( !empty($_POST["Feld2"]) ) {
    if (is_numeric($_POST["Feld2"])) {
        $eingabeZahl = $_POST["Feld2"];
        
        // öffne die Datei "neueZahl.txt" und speichere darin die Multiplikation der Zahl
        // aus "bekannteZahl.txt" und Feld2
        $handle = fopen("neueZahl.txt", "w");
        if ($handle) {
            fputs($handle, ($bekanntezahl * $eingabeZahl));
            fclose($handle);
        }
    }
}

?>