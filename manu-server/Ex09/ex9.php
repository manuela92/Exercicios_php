<?php 

$valores = [$_POST["n1"], $_POST["n2"], $_POST["n3"]]; //array
rsort($valores); //rsort ordena em ordem decrescente

foreach ($valores as $v) { //foreach lê o array
    echo $v . " "; //$v representa cada valor individual do array
}

?> 