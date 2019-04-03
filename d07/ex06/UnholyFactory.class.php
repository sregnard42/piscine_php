<?php

class UnholyFactory
{
    private $__soldiers;

    public function __construct()
    {
        $this->__soldiers = array();
    }

    public function absorb($fighter)
    {
        if (!($fighter instanceof Fighter))
            return print "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
        $type = $fighter->__toString();
        if (!isset($this->$__soldiers[$type])) {
            $this->__soldiers[$type] = $fighter;
            return print "(Factory absorbed a fighter of type " . $type . ")" . PHP_EOL;
        } else
            return print "(Factory already absorbed a fighter of type " . $type . ")" . PHP_EOL;
    }

    public function fabricate($type)
    {
        if (!isset($this->__soldiers[$type])) {
            print "(Factory hasn't absorbed any fighter of type " . $type . ")" . PHP_EOL;
            return null;
        }
        print "(Factory fabricates a fighter of type " . $type . ")" . PHP_EOL;
        return $this->__soldiers[$type];
    }
}

?>