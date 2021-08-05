<?php

function Quadrat($wert) {
    return ($wert**2); // ** Quadrat-operator
} 

$var = 5;
$var = Quadrat($var); // abspeichern des Quadrats in eigener Variable
print $var;

?>