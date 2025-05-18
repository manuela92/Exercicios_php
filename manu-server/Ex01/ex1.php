<?php 
//Faça um Programa que peça dois números e imprima o maior deles

$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];

if ($n1 > $n2) { 
    echo "O maior número é: $n1"; 
} else { 
    echo "O maior número é: $n2"; 
}
?>