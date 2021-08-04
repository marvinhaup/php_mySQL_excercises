<?php

$sortiment = array();

$sortiment[0]["Artikelnummer"] = 1;
$sortiment[0]["Bezeichnung"] = "Hammer";
$sortiment[0]["Preis"] = 19.99;

$sortiment[1]["Artikelnummer"] = 2;
$sortiment[1]["Bezeichnung"] = "Schraubendreher";
$sortiment[1]["Preis"] = 24.99;

$sortiment[2]["Artikelnummer"] = 3;
$sortiment[2]["Bezeichnung"] = "Kreissäge";
$sortiment[2]["Preis"] = 39.99;

print $sortiment[0]["Bezeichnung"]."<br>\n";
print $sortiment[0]["Preis"]."<br>\n";

print $sortiment[1]["Bezeichnung"]."<br>\n";
print $sortiment[1]["Preis"]."<br>\n";

print $sortiment[2]["Bezeichnung"]."<br>\n";
print $sortiment[2]["Preis"]."<br>\n";

?>