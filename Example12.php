<?php

class Stack
{
    private $stack = array();

    public function Push($item)
    {
        $this->stack[] = $item;
    }
    public function Size()
    {
        return count($this->stack);
    }
    private function getLastKey()
    {
        $lastKey = (int)$this->Size() - 1;

        if($lastKey<0)
        {
            $lastKey=0;
        }

        return $lastKey;
    }
    public function Pop()
    {
        if($this->Size()<1)
        {
            return null;
        }

        $lastKey = $this->getLastKey();

        $item = $this->stack[$lastKey];

        unset($this->stack[$lastKey]);

        return $item;
    }
}

$s= new Stack; 

$fp=fopen("C:/xampp/htdocs/vjezbe/vježbe_za_test/ishod6/zadatak2.txt","w+");

for($i=1;$i<=5;$i++)
{
    $rijec=readline("Upisi $i. rijec:");

    $s->Push($rijec);
}
while($b = $s->Pop())
{
    fwrite($fp, $b . ",");
}


fclose($fp);
?>