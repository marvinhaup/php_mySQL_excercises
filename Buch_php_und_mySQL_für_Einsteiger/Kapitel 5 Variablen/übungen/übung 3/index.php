<?php

$kunden = array();

$kunden[0]["Kundennummer"] = 1;
$kunden[0]["Vorname"] = "Hans";
$kunden[0]["Nachname"] = "Günther";

$kunden[1]["Kundennummer"] = 2;
$kunden[1]["Vorname"] = "Gernhart";
$kunden[1]["Nachname"] = "Gerhart";

$kunden[2]["Kundennummer"] = 3;
$kunden[2]["Vorname"] = "Felix";
$kunden[2]["Nachname"] = "Blume";


print "Kundennummer: ".$kunden[0]["Kundennummer"]."\n".", Vorname: ".$kunden[0]["Vorname"]."\n".", Nachname: ".$kunden[0]["Nachname"]."<br>\n";

print "Kundennummer: ".$kunden[1]["Kundennummer"]."\n".", Vorname: ".$kunden[1]["Vorname"]."\n".", Nachname: ".$kunden[1]["Nachname"]."<br>\n";

print "Kundennummer: ".$kunden[2]["Kundennummer"]."\n".", Vorname: ".$kunden[2]["Vorname"]."\n".", Nachname: ".$kunden[2]["Nachname"]."<br>\n";

?>