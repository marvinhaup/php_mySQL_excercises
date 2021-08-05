<?php

function Doppelt_Quadrat($wert) {
    $doppelt = $wert*2;
    $quadrat = $wert**2;
    $rueckgabeArr = array("Verdoppelt" => $doppelt, "Quadriert" => $quadrat);
    return $rueckgabeArr;
}

$var = 4;
$ergArr = Doppelt_Quadrat($var);
print "Der doppelte Wert von: ".$var.", ist: ".$ergArr["Verdoppelt"]."<br>\n";
print "Der quadrierte Wert von: ".$var.", ist: ".$ergArr["Quadriert"]."<br>\n";

?>