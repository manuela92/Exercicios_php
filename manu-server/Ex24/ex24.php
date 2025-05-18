<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

switch($op) {
    case '+': $res = $n1 + $n2; break;
    case '-': $res = $n1 - $n2; break;
    case '*': $res = $n1 * $n2; break;
    case '/': $res = $n1 / $n2; break;
    default: echo "Operação inválida."; exit();
}
echo "Resultado: $res,\n";
if ($res % 2 == 0) {
    echo "Par, ";
} else {
    echo "Ímpar, ";
}

if ($res >= 0) {
    echo "Positivo, ";
} else {
    echo "Negativo, ";
}

if (intval($res) == $res) {
    echo "Inteiro\n";
} else {
    echo "Decimal\n";
}
?>
