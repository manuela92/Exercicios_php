<?php
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];


if (checkdate($mes, $dia, $ano)) {
    echo "A data é válida.\n";
} else {
    echo "A data é inválida.\n";
}
?>
