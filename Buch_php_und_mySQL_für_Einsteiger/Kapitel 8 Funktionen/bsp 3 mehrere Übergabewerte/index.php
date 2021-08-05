<?php

function Begruessung ($vorname, $nachname) {
    print "Guten Tag, ".$vorname." ".$nachname;
}

$vName = "Karl-Heinz";
$nName = "Haupenthal";

Begruessung($vName, $nName); 

?>