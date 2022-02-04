<?php

class Student
{
    var $ime;
    var $prezime;
}

include "queue.php";
$q= new Queue;
$q2=new Queue;
for($i=1;$i<=5;$i++)
{
    $student[$i]=new Student;
    $student[$i]->ime=readline("Unesite ime $i. studenta:");
    $q->Enqueue($student[$i]->ime,);
    $student[$i]->prezime=readline("Unesite prezime $i. studenta:");
    $q2->Enqueue($student[$i]->prezime);

}

while($b = $q->Dequeue() && $b2=$q2->Dequeue())
{
    echo $b . "|" . $b2 ."\n" ;
}








?>