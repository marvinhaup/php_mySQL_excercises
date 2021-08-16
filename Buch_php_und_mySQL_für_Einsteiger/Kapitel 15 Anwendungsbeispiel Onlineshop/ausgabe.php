<?php

// Struktur der Bestätigungsseite vorgeben

$sql = "SELECT * FROM os_inhalt WHERE i_id = 2;";

try
{
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");

    $rueckgabe = $dbh->query($sql);
    $ergebnis = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);
    $meta_title = $ergebnis[0]["i_title"];
    $meta_description = $ergebnis[0]["i_description"];
    $meta_headline = $ergebnis[0]["i_headline"];

    $dbh = null;
}
catch (PDOException $e)
{
    print $e->getMessage();
}

?>

<html lang="de">
<head>
    <title><?php print $meta_title ?></title>
    <meta name="description" content="<?php print $meta_description ?>">
</head>
<body>
    <h1><?php print $ueberschrift ?></h1>

<?php

// $_POST Daten im Objekt Kunde ablegen

include("Klassen.php");

$neuerKunde = new Kunde();

if (!empty($_POST["Nachname"]))
{
    if ($_POST["Nachname"] != "")
    {
        $neuerKunde->setPasswort($_POST["Nachname"]);
    }
}

if (!empty($_POST["Vorname"]))
{
    if ($_POST["Vorname"] != "")
    {
        $neuerKunde->setVorname($_POST["Vorname"]);
    }
}

if (!empty($_POST["Straße"]))
{
    if ($_POST["Straße"] != "")
    {
        $neuerKunde->setStraße($_POST["Straße"]);
    }
}

if (!empty($_POST["PLZ"]))
{
    if ($_POST["PLZ"] != "")
    {
        $neuerKunde->setPostleitzahl($_POST["PLZ"]);
    }
}

if (!empty($_POST["Ort"]))
{
    if ($_POST["Ort"] != "")
    {
        $neuerKunde->setOrt($_POST["Ort"]);
    }
}

if (!empty($_POST["Email"]))
{
    if ($_POST["Email"] != "")
    {
        $neuerKunde->setEmail($_POST["Email"]);
    }
}

if (!empty($_POST["Telefonnummer"]))
{
    if ($_POST["Telefonnummer"] != "")
    {
        $neuerKunde->setTelefonnummer($_POST["Telefonnummer"]);
    }
}

if (!empty($_POST["Passwort"]))
{
    if ($_POST["Passwort"] != "")
    {
        $neuerKunde->setPasswort($_POST["Passwort"]);
    }
}

try 
{
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");

    $neuerKunde->setKundennummer($dbh);

    $sql = "INSERT INTO os_kunden (k_nachname, k_vorname, k_straße, k_postleitzahl, k_ort, k_email, k_telefonnummer, k_passwort, k_kundennummer) VALUES ".
    "('".$neuerKunde->getNachname()."', ".
    "'".$neuerKunde->getVorname()."', ".
    "'".$neuerKunde->getStraße()."', ".
    "'".$neuerKunde->getPostleitzahl()."', ".
    "'".$neuerKunde->getOrt()."', ".
    "'".$neuerKunde->getEmail()."', ".
    "'".$neuerKunde->getTelefonnummer()."', ".
    "'".$neuerKunde->getPasswort()."', ".
    "'".$neuerKunde->getKundennummer()."');";
    
    // print $sql."<br>";
    $dbh->query($sql);

    $sql1 = "SELECT * FROM os_kunden WHERE k_kundennummer = ".$neuerKunde->getKundennummer().";";

    $rueckgabe = $dbh->query($sql1);
    $ergebnis = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);

    // Ausgabe der Zeilenabfrage abhängig von Kundennummer

    print "Für den neuen Kunden mit der Kundennummer: ".$ergebnis[0]["k_kundennummer"].", wurden folgende Daten entgegengenommen:<br>\n";
    print "Nachname: ".$ergebnis[0]["k_nachname"]."<br>\n";
    print "Vorname: ".$ergebnis[0]["k_vorname"]."<br>\n";
    print "Straße: ".$ergebnis[0]["k_straße"]."<br>\n";
    print "Posteleitzahl: ".$ergebnis[0]["k_postleitzahl"]."<br>\n";
    print "Ortsname: ".$ergebnis[0]["k_ort"]."<br>\n";
    print "E-mail Adresse: ".$ergebnis[0]["k_email"]."<br>\n";
    print "Telefonnummer: ".$ergebnis[0]["k_telefonnummer"]."<br>\n";
    print "Passwort: ".$ergebnis[0]["k_passwort"]."<br>\n";

    $error = $dbh->errorInfo();


    $dbh = null;

    print "<form action=\"bestaetigung.php\" method=\"POST\"><input type=\"submit\" value=\"Klicken zum Bestätigen\"></form><br>\n";

    print "<form action=\"index.php\" method=\"POST\"><input type=\"hidden\" name=\"Kunden-Referenz\" value=\"".$neuerkunde->getKundennummer()."\"><input type=\"submit\" value=\"Korrigieren\"></form>\n";

}
catch (PDOException $e)
{
    print $e->getMessage();
}

?>

</body>
</html>
