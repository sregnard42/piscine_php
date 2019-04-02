<?php

class Color {


    static $verbose = false;

    public $red;
    public $green;
    public $blue;

    function __construct($rgb) {

        if (isset($rgb['rgb'])) {
            $allin = $rgb['rgb'];
            $this->red = (int)($allin >> 16) & 255;
            $this->green = (int)($allin >> 8) & 255;
            $this->blue = (int)$allin & 255;
        }
        else
        {
            $this->red = (int)isset($rgb['red']) ? $rgb['red'] : 0;
            $this->green = (int)isset($rgb['green']) ? $rgb['green'] : 0;
            $this->blue = (int)isset($rgb['blue']) ? $rgb['blue'] : 0;
        }

        $this->_ensure_rgb_values();

        if (self::$verbose == true)
            echo $this->__toString()." constructed.\n";
    }

    function __destruct() {
        if (self::$verbose == true)
            echo $this->__toString()." destructed.\n";
    }

    function __toString() {
        return sprintf('Color( red: %3d, green: %3d, blue: %3d )',
        $this->red, $this->green, $this->blue);
    }

    function add($col) {

        $new_col = new Color(array(
            'red' => $this->red + $col->red,
            'green' => $this->green + $col->green,
            'blue' => $this->blue + $col->blue
        ));
        $new_col->_ensure_rgb_values();
        return $new_col;
    }

    function sub($col) {

        $new_col = new Color(array(
            'red' => $this->red - $col->red,
            'green' => $this->green - $col->green,
            'blue' => $this->blue - $col->blue
        ));
        $new_col->_ensure_rgb_values();
        return $new_col;
    }

    function mult($nb) {

        $new_col = new Color(array(
            'red' => (int)$this->red * $nb,
            'green' => (int)$this->green * $nb,
            'blue' => (int)$this->blue * $nb
        ));
        $new_col->_ensure_rgb_values();
        return $new_col;
    }

    static function doc() {
        echo file_get_contents('Color.doc.txt');
    }

    private function _ensure_rgb_values() {
        if ($this->red > 255)
            $this->red = 255;
        if ($this->green > 255)
            $this->green = 255;
        if ($this->blue > 255)
            $this->blue = 255;

        if ($this->red < 0)
            $this->red = 0;
        if ($this->green < 0)
            $this->green = 0;
        if ($this->blue < 0)
            $this->blue = 0;
    }
}
?>