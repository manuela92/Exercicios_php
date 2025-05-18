<?php
$num = $_POST["n"];
if ($num < 0 || $num >= 1000) {
    echo "Número inválido.\n";
    exit();
}
$centenas = intval($num / 100); //intval vai extrair a parte inteira do valor
$dezenas = intval(($num % 100) / 10); //módulo de 100 para retornar os dois ultimos digitos
$unidades = $num % 10;
echo "$num = ";
if ($centenas > 0) echo "$centenas centena(s)";
if ($centenas > 0 && ($dezenas > 0 || $unidades > 0)) echo ", ";
if ($dezenas > 0) echo "$dezenas dezena(s)";
if ($dezenas > 0 && $unidades > 0) echo " e ";
if ($unidades > 0) echo "$unidades unidade(s)";
echo "\n";
?>
