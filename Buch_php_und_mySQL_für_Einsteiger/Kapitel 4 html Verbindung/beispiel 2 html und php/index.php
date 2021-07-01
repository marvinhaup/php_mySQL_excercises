<!DOCTYPE html>
<html lang="de">
    <head> // vor kodierungszeichen werden im print-Befehl backslash\ Zeichen benötigt
        <?php print "<title>Individueller Titel der Website</title>\n"; ?>
        <?php print "<meta name=\"description\" content=\"Individuelle Beschreibung der Homepage\" \n" ?>
        <link rel="stylesheet" href="Der Link zum Stylesheet ist für alle Seiten gleich">
    </head>
    <body>
        <h1>Hauptüberschrift für alle Websites</h1>
        <?php 
        print "<h2> Artikelüberschrift </h2> \n";
        print "<h2> Individueller Textblock </h2> \n";
        ?>
        <p>Fußzeile</p>
    </body>
</html>