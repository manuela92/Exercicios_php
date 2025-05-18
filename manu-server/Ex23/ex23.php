<?php
$num = $_POST["n"];
if (round($num) == $num) { //arredonda para o inteiro mais próximo
    echo "Número inteiro.\n";
} else {
    echo "Número decimal.\n";
}
?>
