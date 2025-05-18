<?php 
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$n3 = $_POST["numero3"]; 
 
$maior = max($n1, $n2, $n3); 
echo "O maior número é: $maior"; 
?> 
