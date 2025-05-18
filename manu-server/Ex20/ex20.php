<?php
$n1 = $_POST["nota1"];
$n2 = $_POST["nota2"];
$n3 = $_POST["nota3"];

$media = ($n1 + $n2 + $n3) / 3;
echo "Média: $media\n";

if ($media == 10) { 
    echo "Aprovado com Distinção"; 
} elseif ($media >= 7 && $media < 10) { 
    echo "Aprovado"; 
} elseif ($media <7) { 
    echo "Reprovado"; 
} else {
    echo "Nota inválida";
}
?> 
