<?php

$broj = array();

for($i=1;$i<=5;$i++)
{
   $broj1=readline("Upisite broj $i:");

   $broj[$i]["broj"]=$broj1;
}

$broj_unaz=array_reverse($broj);

print_r($broj_unaz);

?>