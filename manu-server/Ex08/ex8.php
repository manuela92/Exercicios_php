<?php 
//Maior e menor entre três números
$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST["p3"]; 
 
$menor = min($p1, $p2, $p3); 
echo "Compre o produto de R$$menor";
?> 