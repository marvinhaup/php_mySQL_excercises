<?php 

// einfaches Programm zur Bestandabfrage
// print-Ausgabe, falls kein Betand mehr vorhanden ist.

$warenbestand = array('Hämmer' => 3, 'Nägel' => 5, 'Schrauben' => 0);

if ($warenbestand["Schrauben"] < 1) {
    print "Es sind keine Schrauben mehr vorrätig.";
}

?>