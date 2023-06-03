<?php


$idade = 16;
$numerodepessoas = 1;
echo "se voce for maior que 18 anos pode entrar"; echo "\n";
if ($idade >= 18 ) {
    echo"voce e maior de $idade anos.";echo"\n";
    echo "pode entar ";
}else if ($idade >= 16 && $numerodepessoas > 1) {
    echo "voce  tem $idade anos, esta acompanhado (a), então pode estar.";
}else { 
    echo"voce so tem $idade anos. voce não pode entrar";
}
echo"\n";
echo "Adeus";