<?php

class NightsWatch
{

    private static $__members = array();

    public function recruit($recruit)
    {
        array_push(self::$__members, $recruit);
    }

    public function fight()
    {
        foreach (self::$__members as $member)
            $member instanceof IFighter ? $member->fight() : 0;
    }
}

?>