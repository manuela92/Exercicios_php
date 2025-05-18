<?php
$valor = $_POST["valor"];
if ($valor < 10 || $valor > 600) {
    echo "Valor inválido.\n";
    exit();
}
$notas100 = intdiv($valor, 100); //intdiv faz a divisão e descarta a parte decimal, se houver
$valor %= 100;
$notas50 = intdiv($valor, 50);
$valor %= 50;
$notas10 = intdiv($valor, 10);
$valor %= 10;
$notas5 = intdiv($valor, 5);
$valor %= 5;
$notas1 = $valor;
echo "Notas fornecidas:\n";
echo "$notas100 nota(s) de 100,\n";
echo "$notas50 nota(s) de 50,\n";
echo "$notas10 nota(s) de 10,\n";
echo "$notas5 nota(s) de 5,\n";
echo "$notas1 nota(s) de 1\n";
?>
