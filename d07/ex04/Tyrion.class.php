<?php
class Tyrion extends Lannister
{
    public function sleepWith($target)
    {
        $target = get_class($target);
        if ($target == "Jaime")
            return print "Not even if I'm drunk !" . PHP_EOL;
        if ($target == "Sansa")
            return print "Let's do this." . PHP_EOL;
        if ($target == "Cersei")
            return print "Not even if I'm drunk !" . PHP_EOL;
    }
}
?>