<?php
    
function random()
{ 
    $min=1;
    $max=10;
    $rando =rand($min,$max);
    return $rando;
}
$broj2=random();
for($i=1;$i<=999999;$i++)
{

    $broj = readline("Pogodi broj!:");

    if($broj ==$broj2)
    {
       echo "Bravo pogodio si!";
       echo "\n";
       echo "Pogodio si u $i pokusaja.";
       break;
    }
    if($broj<$broj2)
    {
       echo "Nije tocno!,broj je premali,pokusaj ponovno!";
       echo "\n";
    }
    if($broj>$broj2)
    {
        echo "Nije tocno!,broj je preveliki,pokusaj ponovno!";
        echo "\n";
    }
}



?>