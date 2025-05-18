<?php
echo "Equação do 2º grau: ax² + bx + c\n";

$A = $_POST["a"];
$B = $_POST["b"];
$C = $_POST["c"];

if ($A == 0) {
    echo "Não é equação do 2º grau (A não pode ser zero)";
    exit;
}

$delta = $B*$B - 4*$A*$C;

if ($delta < 0) {
    echo "Não tem raízes reais (Delta negativo)";
} else if ($delta == 0) {
    $raiz = -$B / (2*$A);
    echo "Tem uma raiz real: $raiz";
} else {
    $raiz1 = (-$B + $delta ** 0.5) / (2 * $A);
    $raiz2 = (-$B - $delta ** 0.5) / (2 * $A);
    echo "Tem duas raízes reais: $raiz1 e $raiz2";
}
?>
