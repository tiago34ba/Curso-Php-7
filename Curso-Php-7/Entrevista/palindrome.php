<?php

$numero = array("6100",'3000','59321','4643','5343244');
echo $palindromo = Checar($numero);

function Checar($numero)
{
$numero_reversa = array_reverse($numero);
for ($i = 0; $i < 5; $i++) {

if ($numero[$i] != $numero_reversa[$i]) {

return false;
}

}
return true;
}