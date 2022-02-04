<?php

$broj = array();

for($i=1;$i<=999999;$i++)
{
   
    $broj1=readline ("Unesi broj $i:");
    $broj[$i]["broj"]=$broj1;
    $odg=readline( "Zelite li nastaviti:");
    if($odg=="da"|$odg=="Da")
    {   
        continue;
    }
    if($odg=="ne"|$odg=="Ne")
    {
        break;
    }    
}   

foreach($broj as $key => $val)
{
    if()
}

//NE RADI, KOJI KURAC NEZNAM KAKO, VEC 3 SATA RADIM NA OVOME, JEBI SI MATER PHP

?>