<?php
class Jaime extends Lannister
{
    public function sleepWith($target)
    {
        $target = get_class($target);
        if ($target == "Tyrion")
            return print "Not even if I'm drunk !" . PHP_EOL;
        if ($target == "Sansa")
            return print "Let's do this." . PHP_EOL;
        if ($target == "Cersei")
            return print "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
    }
}
?>