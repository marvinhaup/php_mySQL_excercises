<?php

// erstellen eines Arrays mit Produkten

$sortiment = array();

$sortiment[0]["Artikelname"] = "Stichsäge";
$sortiment[0]["Preis"] = 19.99;
$sortiment[0]["Vorrat"] = 3;

$sortiment[1]["Artikelname"] = "Bohrmaschine";
$sortiment[1]["Preis"] = 29.99;
$sortiment[1]["Vorrat"] = 0;

$sortiment[2]["Artikelname"] = "Hammer";
$sortiment[2]["Preis"] = 9.99;
$sortiment[2]["Vorrat"] = 4;

$sortiment[3]["Artikelname"] = "Kreissäge";
$sortiment[3]["Preis"] = 39.99;
$sortiment[3]["Vorrat"] = 5;

// ausgabe der Array-Inhaltes

// einfache, elegante version
foreach ($sortiment as $ebene1) {

    foreach ($ebene1 as $ebene2) {
        print $ebene2."<br>\n";    
    }
    print "<br>";

}


// umständliche version
$i = 0;
foreach ($sortiment as $inhalt) {
    $inhaltlen = count($inhalt);
    print("Länge des Feldes an Array-Position: ".$i.", ist: ".$inhaltlen."<br>");
    for ($j = 0; $j < $inhaltlen; $j++) {
        if ($j == 0) {
            print "Artname: ".$inhalt["Artikelname"]."<br>";
        }
        elseif ($j == 1) {
            print "Preis: ".$inhalt["Preis"]."<br>";
        }
        else {
            print "Vorrat: ".$inhalt["Vorrat"]."<br>";
        }
    }
    $i++;
    print "<br>";
}

?>