<?php

$str = 'Isto  é um teste';

echo $str;

$prim = $str{0};

echo "<br>Primeiro caracter: ". $prim;


$terc = $str{2};

echo "<br>Terceiro caracter: ". $terc ;


$ult = $str{strlen($str) - 1};

echo "<br>Ultimo caracter: ". $ult;

?>
