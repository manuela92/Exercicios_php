<?php 
$letra = $_POST["letra"]; 
 
//strtolower converte as letras em minusculas 
if (strtolower($letra) <> 'a'|| 'e'|| 'i'||'o'||'u') { 
    echo "Vogal"; 
} else { 
    echo "Consoante"; 
} 
?> 