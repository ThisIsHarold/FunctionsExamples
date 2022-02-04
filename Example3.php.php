<?php

$ime = array();

for($i=1;$i<=5;$i++)
{
    $ime1=readline("Upisi $i. ime:");
    $ime[$i]["ime"]=$ime1;
    
}

foreach($ime as $key =>$word)
{
    $first_char = $word[0];

    if($firt_char == "a")
    {
        $word == $key;
        echo $word . "\n";
    }
}

?>