<?php

$fp = fopen("C:/xampp/htdocs/vjezbe/vježbe_za_test/ishod6/zadatak1.txt","w+");

for($i=1;$i<=5;$i++)
{
    $broj=readline("Upisi $i. broj:");

    fwrite($fp,$broj . "\n");
}

fclose($fp);




?>