<?php 
$salario = $_POST["salario"]; 
 
if ($salario <= 280) { 
    $percentual = 20; 
} elseif ($salario <= 700) { 
    $percentual = 15; 
} elseif ($salario <= 1500) { 
    $percentual = 10; 
} else { 
    $percentual = 5; 
} 
 
$aumento = $salario * ($percentual / 100); 
$novoSalario = $salario + $aumento; 
 
echo "Salário antes do reajuste: R$ $salario<br>";
echo "Percentual de aumento aplicado: $percentual%<br>"; 
echo "Valor do aumento: R$ $aumento<br>"; 
echo "Novo salário após o aumento: R$ $novoSalario<br>"; 
?> 