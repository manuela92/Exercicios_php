<?php
$numero = $_POST["numero"];

switch ($numero) {
    case 1:
        echo "1 - Domingo";
        break;
    case 2:
        echo "2 - Segunda-feira";
        break;
    case 3:
        echo "3 - Terça-feira";
        break;
    case 4:
        echo "4 - Quarta-feira";
        break;
    case 5:
        echo "5 - Quinta-feira";
        break;
    case 6:
        echo "6 - Sexta-feira";
        break;
    case 7:
        echo "7 - Sábado";
        break;
    default:
        echo "Valor inválido";
}
?>
