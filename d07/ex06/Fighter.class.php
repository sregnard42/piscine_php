<?php

abstract class Fighter
{
    private $__type;

    public abstract function fight($target);
    public function __construct($type)
    {
        $this->__type = $type;
    }
    public function __toString()
    {
        return sprintf("%s", $this->__type);
    }
}

?>