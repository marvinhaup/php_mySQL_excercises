<?php

    // Anwendungsbeispiel mit serverseitig erzeugtem html-code

    // SQL-Abfrage in Variable speichern
    $sql = "SELECT * FROM os_inhalt WHERE i_id = 1;";
    
    try 
    {
        // Data Source Name konfigurieren
        $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
        // Wenn Verbindung erfolgreich, Meldung ausgeben
        print "Verbindung erfolgreich hergestellt.";
        
        // Überprüfen, ob eine Referenz auf einen zu löschenden Kunden besteht
        if (isset($_POST["Kunden-Referenz"]))
        {
            $sql2 = "DELETE FROM os_kunden WHERE k_kundennummer =".$_POST['Kunden-Referenz'].";";
            $dbh->query($sql2);
        }

        // Rückgabe der Datenbank zu dem SQL-Befehl in Variable speichern
        $rueckgabe = $dbh->query($sql);
        // konvertieren des Rückgabewertes(PDO-Statement) zu einem assoziativen Array
        $ergebnis = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);
        $meta_title = $ergebnis[0]["i_title"];
        $meta_description = $ergebnis[0]["i_description"];
        $ueberschrift = $ergebnis[0]["i_headline"];
        $seiteninhalt = $ergebnis[0]["i_content"];
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
    <?php print $seiteninhalt ?>
</body>
</html>