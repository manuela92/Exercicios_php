<?php
$lado1 = $_POST["l1"];
$lado2 = $_POST["l2"];
$lado3 = $_POST["l3"];

if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
    echo "É um triângulo. ";

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Tipo: Equilátero";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Tipo: Isósceles";
    } else {
        echo "Tipo: Escaleno";
    }

} else {
    echo "Os lados não formam um triângulo.";
}
?>