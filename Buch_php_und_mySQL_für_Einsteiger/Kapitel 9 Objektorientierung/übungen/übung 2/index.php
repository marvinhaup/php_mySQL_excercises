<?php

// Aufgabe: Objektstruktur mit Passenden Variablennamen erstellen. 
// + setter-Methoden für alle Variablen erzeugen
// Vergleiche Kapitel 5, bsp 4 zusammengesetzte Arrays

class Produkt {

    private $artikelnummer; // kein Zugriff außerhalb der Klasse
    private $bezeichnung;   // kein Zugriff außerhalb der Klasse
    private $preis;         // kein Zugriff außerhalb der Klasse

    public function SetArtikelnummer($artNr) {
        $this->artikelnummer = $artNr;
    }
    public function SetBezeichnung($bezeichnung) {
        $this->bezeichnung = $bezeichnung;
    }
    public function SetPreis($preisNeu) {
        $this->preis = $preisNeu;
    }

    public function GetArtikelnummer() {
        return $this->artikelnummer;
    }
    public function GetBezeichnung() {
        return $this->bezeichnung;
    }
    public function GetPreis() {
        return $this->preis;
    }

}

// Objekt "Bohrmaschine" erzeugen {123,"Bohrmaschine", 19.99}

$bohrmaschine = new Produkt();

$bohrmaschine->SetArtikelnummer(123);
$bohrmaschine->SetBezeichnung("Bohrmaschine");
$bohrmaschine->SetPreis(19.99);

print "Das Objekt mit der Bezeichnung: ".$bohrmaschine->GetBezeichnung().", der Artikelnummer: ".$bohrmaschine->GetArtikelnummer()." und dem Preis: ".$bohrmaschine->GetPreis().", wurde angelegt.<br>\n";

?>