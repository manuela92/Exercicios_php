<?php 
//Maior e menor entre três números
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$n3 = $_POST["numero3"]; 
 
echo "Maior: " . max($n1, $n2, $n3) . "<br>"; 
echo "Menor: " . min($n1, $n2, $n3); 
?> 