<?php
$combustivel = $_POST["combustivel"];
$litros= $_POST["l"];

    if (strtoupper ($combustivel) === "A") {
        if($litros>0&&$litros<=20){
            $desconto = $litros * 0.03;
            $preco = ($litros * 3.90) - $desconto;
            echo"Valor a ser pago: R$ $preco";
        }elseif ($litros>20){
            $desconto = $litros * 0.05;
            $preco = ($litros * 3.90) - $desconto;
            echo"Valor a ser pago: R$ $preco";
        }else{
            echo"Valor inválido";
            ext;
        }
    } elseif (strtoupper  ($combustivel) === "G") {
       if($litros>0&&$litros<=20){
            $desconto = $litros * 0.04;
            $preco = ($litros * 5.50) - $desconto;
            echo"Valor a ser pago: R$ $preco";
        }elseif ($litros>20){
            $desconto = $litros * 0.06;
            $preco = ($litros * 5.50) - $desconto;
            echo"Valor a ser pago: R$ $preco";
        }else{
            echo"Valor inválido";
            ext;
        }
    } else {
        echo"Tipo de combustível inválido.";
    }



?>