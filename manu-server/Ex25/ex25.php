<?php
$perguntas = [ $_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"]];

$sim = 0;
foreach ($perguntas as $resp) {//foreach percorre o array
    if (strtolower($resp) === 's') {
        $sim++;
    }
}

if ($sim == 2) {
    echo "Classificação: Suspeita";
} elseif ($sim == 3 || $sim == 4) {
    echo "Classificação: Cúmplice";
} elseif ($sim == 5) {
    echo "Classificação: Assassino";
} else {
    echo "Classificação: Inocente";
}
?>
