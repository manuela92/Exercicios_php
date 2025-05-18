<?php 
$n1 = $_POST["nota1"]; 
$n2 = $_POST["nota2"]; 
$media = ($n1 + $n2) / 2; 
 
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