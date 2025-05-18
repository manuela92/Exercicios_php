<?php
$kgMorangos = (float)$_POST['kg_morangos'];
$kgMacas = (float)$_POST['kg_macas'];

if ($kgMorangos <= 5) {
    $precoMorangos = 2.50;
} else {
    $precoMorangos = 2.20;
}

if ($kgMacas <= 5) {
    $precoMacas = 1.80;
} else {
    $precoMacas = 1.50;
}
$valorMorangos = $kgMorangos * $precoMorangos;
$valorMacas = $kgMacas * $precoMacas;
$valorTotal = $valorMorangos + $valorMacas;

if (($kgMorangos + $kgMacas) > 8 || $valorTotal > 25) {
    $valorTotal *= 0.90;
}

echo "Valor a pagar: R$ $valorTotal";
?>