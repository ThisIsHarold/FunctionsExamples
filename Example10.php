<?php

include "queue.php";

$q=new Queue;

for($i=1;$i<=5;$i++)
{
    $broj=readline("Upiste $i. broj:");

    $q->Enqueue($broj);
}

while($b = $q->Dequeue())
{
    echo $b. "\n";
}
?>