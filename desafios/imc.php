<?php

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "seu IMC é de $imc. voce esta com o IMC";

if ($imc < 18.5){
    echo "abaixo";
} elseif ($imc < 25) {
 echo " dentro " . "\n";
} else {
    echo "acima";
}

echo "do recomendado";