<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

$media = ($nota1 + $nota2) / 2;

if($media >=0 && $media <=10){
if ($media >= 9 && $media <= 10) {
    $conceito = "Nota: A";
} elseif ($media >= 7.5 && $media < 9) {
    $conceito = "Nota: B";
} elseif ($media >= 6 && $media < 7.5) {
    $conceito = "Nota: C";
} elseif ($media >= 4 && $media < 6) {
    $conceito = "Nota: D";
} else {
    $conceito = "Nota: E";
}


echo "Nota 1: $nota1<br>";
echo "Nota 2: $nota2<br>";
echo "Média: $media<br>";
echo "Conceito: $conceito<br>";

if ($conceito == "A" || $conceito == "B" || $conceito == "C") {
    echo "APROVADO";
} else {
    echo "REPROVADO";
}
}else{
    echo "Nota inválida";
}
?>
