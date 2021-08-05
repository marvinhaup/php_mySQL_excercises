<?php

$sortiment = array();

$sortiment[0]["Produkt"] = "Äpfel";
$sortiment[0]["Preis"] = 0.99;
$sortiment[0]["Sonderangebot"] = false;

$sortiment[1]["Produkt"] = "Birnen";
$sortiment[1]["Preis"] = 1.19;
$sortiment[1]["Sonderangebot"] = false;

$sortiment[2]["Produkt"] = "Tomaten";
$sortiment[2]["Preis"] = 0.69;
$sortiment[2]["Sonderangebot"] = true;

$sortiment[3]["Produkt"] = "Zuchini";
$sortiment[3]["Preis"] = 0.89;
$sortiment[3]["Sonderangebot"] = true;

foreach ($sortiment as $inhalt) {
    if ($inhalt["Sonderangebot"] == true) {
        print "Achtung Sonderangebot!<br>\n";
    }
    print "Produktname: ".$inhalt["Produkt"].",  Preis: ".$inhalt["Preis"]."<br><br>\n";
}

?>