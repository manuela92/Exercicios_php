<?php 
$sexo = $_POST["letra"];
 
if ($sexo == "F" || $sexo == "f") { 
    echo "F - Feminino"; 
} elseif ($sexo == "M" || $sexo == "m") { 
    echo "M - Masculino"; 
} else { 
    echo "Sexo Inválido"; 
} 
?> 