<?php

class NightsWatch
{

    private $__members = array();

    public function recruit($recruit)
    {
        array_push($this->__members, $recruit);
    }

    public function fight()
    {
        foreach ($this->__members as $member)
            $member instanceof IFighter ? $member->fight() : 0;
    }
}

?>