<?php

// Erstellen einer Kunden-Klasse zum Abspeichern von Werten

class Kunde {

    // alle member-Variablen als privat deklarieren
    private $nachname;
    private $vorname;
    private $straße;
    private $postleitzahl;
    private $ort;
    private $email;
    private $telefonnummer;
    private $passwort;
    private $kundennummer;
    
    // setter und getter Methoden anlegen

    public function setNachname($wert)
    {
        $this->nachname = $wert;
    }
    public function getNachname()
    {
        return $this->nachname;
    }
    
    public function setVorname($wert)
    {
        $this->vorname = $wert;
    }
    public function getVorname()
    {
        return $this->vorname;
    }

    public function setStraße($wert)
    {
        $this->straße = $wert;
    }
    public function getStraße()
    {
        return $this->straße;
    }

    public function setPostleitzahl($wert)
    {
        $this->postleitzahl = $wert;
    }
    public function getPostleitzahl()
    {
        return $this->postleitzahl;
    }

    public function setOrt($wert)
    {
        $this->ort = $wert;
    }
    public function getOrt()
    {
        return $this->ort;
    }

    public function setEmail($wert)
    {
        $this->email = $wert;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setTelefonnummer($wert)
    {
        $this->telefonnummer = $wert;
    }
    public function getTelefonnummer()
    {
        return $this->telefonnummer;
    }

    public function setPasswort($wert)
    {
        $this->passwort = $wert;
    }
    public function getPasswort()
    {
        return $this->passwort;
    }

    public function setKundennummer($handle)
    {
        $sql1 = "Select COUNT(k_kundennummer) FROM os_kunden";
        $rueckgabe1 = $handle->query($sql1);
        $ergebnis1 = $rueckgabe1->fetchAll(PDO::FETCH_ASSOC);
        
        if ($ergebnis1[0]["COUNT(k_kundennummer)"] == 0)
        {
            $this->kundennummer = 1;
        }
        else
        {
            $sql2 = "SELECT MAX(k_kundennummer) FROM os_kunden";
            $rueckgabe2 = $handle->query($sql2);
            $ergebnis2 = $rueckgabe2->fetchAll(PDO::FETCH_ASSOC);
            $this->kundennummer = ($ergebnis2[0]["MAX(k_kundennummer)"] + 1);
        }

    }
    public function getKundennummer()
    {
        return $this->kundennummer;        
    }

}

?>