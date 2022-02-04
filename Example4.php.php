<?php

function brojevi($a,$b,$c,$d)
{
$najveci=max($a,$b,$c,$d);
return $najveci;
}


$a=readline("Unesi broj a:");
$b=readline("Unesi broj b:");
$c=readline("Unesi broj c:");
$d=readline("Unesi broj d:");

echo brojevi($a,$b,$c,$d);

?>