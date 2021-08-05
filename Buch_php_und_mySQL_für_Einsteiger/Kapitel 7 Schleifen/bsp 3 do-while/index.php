<?php

$anzahl = 50;
$bedingung = true;

do {
    print "Die Bedingung ist wahr. Anzahl beträgt: ".$anzahl."<br>\n";
    $anzahl--;
    $bedingung = ($anzahl > 20);
} while ($bedingung);

?>