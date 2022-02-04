<?php

include "Stack.php";

$s= new Stack;
for($i=1;$i<=5;$i++)
{
    $string=readline("Unesite niz $i. znakova:");

    $s->Push($string);
}


while($b = $s->Pop())
{
    echo $b . "\n";
}




?>