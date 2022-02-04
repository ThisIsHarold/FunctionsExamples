<?php

class KucniLjubimac
{
    var $ime;
    var $vrsta;
    var $godina_rod;
}

$lista_ljubimac = array();

for($i=1;$i<=5;$i++)
{
    $ljubimac1 = new KucniLjubimac();

    $ljubimac1->ime=readline("(".$i.")Ime:");
    $ljubimac1->vrsta=readline("(".$i.")Vrsta:");
    $ljubimac1->godina_rod=readline("(".$i.")Godina rodenja:");

    $lista_ljubimac[]=$ljubimac1;

    
}

$vrsta1=readline("Unesite vrstu psa za pretrazivanje:");

$tocna_vrsta = new KucniLjubimac;

$tocna_vrsta= $lista_ljubimac[0];

foreach($lista_ljubimac as $key => $val)
{
    if($val->vrsta == $vrsta1)
    {
         $tocna_vrsta = $val;
    }
}

echo $tocna_vrsta->ime . "," . $tocna_vrsta->vrsta . "," . $tocna_vrsta->godina_rod;

?>