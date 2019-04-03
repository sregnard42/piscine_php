<?php
class Color
{
    public static $verbose = false;

    public $red;
    public $green;
    public $blue;

    function __construct($args)
    {
        if (isset($args['rgb'])) {
            $rgb = $args['rgb'];
            $this->red = (int)($rgb >> 16) & 255;
            $this->green = (int)($rgb >> 8) & 255;
            $this->blue = (int)$rgb & 255;
        } else {
            $this->red = isset($args['red']) ? $args['red'] : 0;
            $this->green = isset($args['green']) ? $args['green'] : 0;
            $this->blue = isset($args['blue']) ? $args['blue'] : 0;
        }
        if (self::$verbose)
            printf($this->__toString() . " constructed." . PHP_EOL);
    }

    function __destruct()
    {
        if (self::$verbose)
            printf($this->__toString() . " destructed." . PHP_EOL);
    }

    function __toString()
    {
        return sprintf('Color( red: %3d, green: %3d, blue: %3d )', $this->red, $this->green, $this->blue);
    }

    function doc()
    {
        printf("%s", PHP_EOL . file_get_contents("Color.doc.txt") . PHP_EOL);
    }

    function add(Color $c)
    {
        $red = $this->red + $c->red;
        $green = $this->green + $c->green;
        $blue = $this->blue + $c->blue;
        $color = new Color(array('red' => $red, 'green' => $green, 'blue' => $blue));
        return ($color);
    }
    function sub(Color $c)
    {
        $red = $this->red - $c->red;
        $green = $this->green - $c->green;
        $blue = $this->blue - $c->blue;
        $color = new Color(array('red' => $red, 'green' => $green, 'blue' => $blue));
        return ($color);
    }
    function mult($f)
    {
        $red = $this->red * $f;
        $green = $this->green * $f;
        $blue = $this->blue * $f;
        $color = new Color(array('red' => $red, 'green' => $green, 'blue' => $blue));
        return ($color);
    }
}
?>
