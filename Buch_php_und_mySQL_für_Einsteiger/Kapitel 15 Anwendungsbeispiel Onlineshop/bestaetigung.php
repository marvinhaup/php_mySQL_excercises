<?php

// SQL_Abfrage zur Bestätigung der Eingaben tätigen

$sql = "SELECT * FROM os_inhalt WHERE i_id = 3";

try
{
    $dbh = new PDO("mysql:dbname=onlineshopDB; host=localhost", "admin", "passwort");
    $rueckgabe = $dbh->query($sql);
    $ergebnis = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);
    $meta_title = $ergebnis[0]["i_title"];
    $meta_description = $ergebnis[0]["i_description"];
    $meta_headline = $ergebnis[0]["i_headline"];
    $meta_content = $ergebis[0]["i_content"];
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
    <h1><?php print $meta_headline ?></h1>
    <?php print $meta_content ?>
</body>
</html>