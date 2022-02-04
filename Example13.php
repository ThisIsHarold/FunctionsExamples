<?php

$fp = fopen("C:/xampp/htdocs/vjezbe/vježbe_za_test/ishod6/zadatak3.txt","w+");

for($i=1;$i<=5;$i++)
{
    $b= readline("Upisi ime $i. studenta:");
    fwrite($fp, sprintf("%-10s",$b));

    $p = readline("Upisi prezime $i. studenta:");
    fwrite($fp, sprintf("%-15s",$p));

    $g = readline("Upisi god.rodenja $i. studenta:");
    fwrite($fp, sprintf("%-4s",$g,));
    fwrite($fp,"\n");
}

fclose($fp);
?>