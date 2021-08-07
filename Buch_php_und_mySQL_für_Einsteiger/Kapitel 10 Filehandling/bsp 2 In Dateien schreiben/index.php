<?php

// Programm zum schreiben einer Zahlenfolge in eine Datei

$handle = fopen("beispiel.txt", "w");

if ($handle) {
    for ($i = 0; $i < 20; $i++) { // schreibt die Folge 0 bis 19 in Datei "beispiel.txt"
        fputs($handle, "Durchlauf Nummer: ".$i."\n");
    }
    fclose($handle);
}
else {
    print "Die Datei konnte nicht geöffnet werden";
}

?>