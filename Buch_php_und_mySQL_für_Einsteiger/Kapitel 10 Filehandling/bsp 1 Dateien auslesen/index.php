<?php

$handle = fopen("beispiel.txt", "r");

$ergebnis = array();

if ($handle) {
    $i = 0;
    while (!feof($handle)) {
        $inhalt = fgets($handle);
        $ergebnis[$i] = $inhalt;
        $i++;
        print $inhalt."<br>\n";
    }
    fclose($handle);
}
else {
    print "Die Datei konnte nicht geöffnet werden.";
}

?>