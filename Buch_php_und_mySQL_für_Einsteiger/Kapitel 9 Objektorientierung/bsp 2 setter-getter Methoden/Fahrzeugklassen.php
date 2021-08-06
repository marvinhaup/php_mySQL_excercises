<?php

class Auto {

    // private Variablen, zugriff nur innerhalb der Klasse
    private $sitzplaetze = 5;
    private $verbrauch;
    private $maxGeschwindigkeit;

    // setter-Methoden zur Änderung der Privaten Variablen
    /*  Sitzplätze sollen vorerst nicht veränderbar sein
    public function setSitzplaetze($wert) { 
        $this->sitzplaetze = $wert;
    }
    */
    public function setVerbrauch($wert) {
        $this->verbrauch = $wert;
    }
    public function setMaxGeschwindigkeit($wert) {
        $this->maxGeschwindigkeit = $wert;
    }

    // getter-Methoden zur Ausgabe der privaten Variablen
    public function getSitzplaetze() {
        return ($this->sitzplaetze);
    }
    public function getVerbrauch() {
        return ($this->verbrauch);
    }
    public function getMaxGeschwindigkeit() {
        return ($this->maxGeschwindigkeit);
    }

}


?>