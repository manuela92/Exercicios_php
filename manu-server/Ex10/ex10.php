<?php 
$turno = $_POST["turno"];
 
switch (strtolower($turno)) { //estrutura para selecionar um de vários blocos de código a ser executado
                                //uma alternitiva ao if else
    case "m": //bloco a ser executado se o caso se aplicar
        echo "Bom Dia!"; 
        break; //fecha o bloco
    case "v": 
        echo "Boa Tarde!"; 
        break; 
    case "n": 
        echo "Boa Noite!"; 
        break; 
    default: //bloco que será executado se nenhum dos casos se aplicar
        echo "Valor Inválido!"; 
} 
?>   