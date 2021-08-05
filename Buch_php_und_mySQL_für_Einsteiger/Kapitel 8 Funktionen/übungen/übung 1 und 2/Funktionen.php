<?php

$quadratArray = array();
function QuadrateBisZehn($basis) {
    for ($i = 1; $i <= 10; $i++) {
        $quadratArray[($i-1)] = $basis**$i;
    }
    return $quadratArray;
}

function ArrayAusgabe($Arr) {
    for ($i = 0; $i < count($Arr); $i++) {
        print "Array-Wert an Stelle: ".$i.", ist gleich: ".$Arr[$i]."<br>\n";
    }
}

?>