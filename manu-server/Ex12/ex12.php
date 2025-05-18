<?php 
$valorHora = $_POST["valorHora"]; 
$horasTrabalhadas = $_POST["horas"]; 
 
$salarioBruto = $valorHora * $horasTrabalhadas; 
$fgts = $salarioBruto * 0.08; 
$sindicato = $salarioBruto * 0.03; 
 
if ($salarioBruto <= 1500) { 
    $ir = $salarioBruto * 0.075; 
} elseif ($salarioBruto <= 2500) { 
    $ir = $salarioBruto * 0.15; 
} elseif ($salarioBruto > 2500) { 
    $ir = $salarioBruto * 0.224; 
} else { 
    echo "Salário inválido"; 
} 
 
$salarioLiquido = $salarioBruto - $ir - $sindicato; 
 
echo "Salário Bruto: R$ $salarioBruto<br>"; 
echo "Desconto IR: R$ $ir<br>"; 
echo "Desconto Sindicato: R$ $sindicato<br>"; 
echo "FGTS (depositado): R$ $fgts<br>"; 
echo "Salário Líquido: R$ $salarioLiquido<br>"; 
?> 