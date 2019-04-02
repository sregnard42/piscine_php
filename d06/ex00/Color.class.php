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
        $this->normalize();
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

    function normalize()
    {
        $this->red = (int)$this->red;
        $this->green = (int)$this->green;
        $this->blue = (int)$this->blue;
        if ($this->red < 0)
            $this->red = 0;
        if ($this->green < 0)
            $this->green = 0;
        if ($this->blue < 0)
            $this->blue = 0;
        if ($this->red > 255)
            $this->red = 255;
        if ($this->green > 255)
            $this->green = 255;
        if ($this->blue > 255)
            $this->blue = 255;
    }

    function add(Color $c)
    {
        $color = new Color([''])
        $color->red = $this->red + $c->red;
        $color->green = $this->green + $c->green;
        $color->blue = $this->blue + $c->blue;
        $color->normalize();
        return ($color);
    }
    function sub(Color $c)
    {
        $color->red = $this->red - $c->red;
        $color->green = $this->green - $c->green;
        $color->blue = $this->blue - $c->blue;
        $color->normalize();
        return ($color);
    }
    function mult($f)
    {
        $color->red = $this->red * $f;
        $color->green = $this->green * $f;
        $color->blue = $this->blue * $f;
        $color->normalize();
        return ($color);
    }
}
?>