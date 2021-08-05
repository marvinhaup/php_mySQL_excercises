<?php

if (!empty($_GET["Basis"])) {
    if (isset($_GET["Basis"])) {
        $basis = $_GET["Basis"];
    }
}

include("Funktionen.php");
$ergArr = QuadrateBisZehn($basis);
ArrayAusgabe($ergArr);

?>