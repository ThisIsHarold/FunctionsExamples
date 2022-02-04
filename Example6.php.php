<?php

class Grad
{
    var $naziv;
    var $br_stanov;
    var $površina;
    var $gl_grad;
}

$lista_gradova=array();

$grad1= new  Grad();

$grad1->naziv = readline("Unesite ime grada:");
$grad1->br_stanov = readline("Unesite broj stanovnika:");
$grad1->povrsina = readline("Unesite povrsinu:");
$grad1->gl_grad = readline("Je li glavni grad?:");

$grad2= new  Grad();

$grad2->naziv = readline("Unesite ime grada:");
$grad2->br_stanov = readline("Unesite broj stanovnika:");
$grad2->povrsina = readline("Unesite povrsinu:");
$grad2->gl_grad = readline("Je li glavni grad?:");

echo $grad1->naziv . "," . $grad1->br_stanov . "," . $grad1->povrsina . "," . $grad1->gl_grad  . "\n";
echo $grad2->naziv . "," . $grad2->br_stanov . "," . $grad2->povrsina . "," . $grad2->gl_grad;

?>