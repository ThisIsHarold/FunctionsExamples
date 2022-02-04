<?php

class Queue
{
    private $queue = array();

    public function Enqueue($item)
    {
        $this->queue[]=$item;
    }

    public function Size()
    {
        return count($this->queue);
    }
    private function getLastKey()
    {
        $lastKey =(int)$this->Size()-1;

        if($lastKey<0)
        {
            $lastKey =0;
        }

        return $lastKey;
    }
    public function Dequeue()
    {
        if($this->Size()<1)
        {
            return null;
        }

        $lastKey = $this->getLastKey();

        $item = $this->queue[0];

        for($k=1;$k<=$lastKey;$k++)
        {
            $this->queue[$k-1] = $this->queue[$k];
        }

        unset($this->queue[$lastKey]);

        return $item;
    }
}