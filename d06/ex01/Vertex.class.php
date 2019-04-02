<?php

class Vertex {

    static $verbose = false;

    private $_x;
    private $_y;
    private $_z;
    private $_w;
    private $_color;

    function getX() {
        return $_x;
    }

    function setX($v) {
        $_x = $v;
    }

    function getY() {
        return $_y;
    }

    function setY($v) {
        $_y = $v;
    }

    function getZ() {
        return $_z;
    }

    function setZ($v) {
        $_z = $v;
    }

    function getW() {
        return $_w;
    }

    function setW($v) {
        $_w = $v;
    }

    function getColor() {
        return $_color;
    }

    function setColor($v) {
        $_color = $v;
    }

    function __construct(array $kwargs) {

        $this->_x = $kwargs['x'];
        $this->_y = $kwargs['y'];
        $this->_z = $kwargs['z'];
        $this->_w = isset($kwargs['w']) ? $kwargs['w'] : 1.0;
        $this->_color = isset($kwargs['color']) ? $kwargs['color'] : new Color(array('rgb' => (256 ** 3 - 1)));

        if (self::$verbose == true) {
            echo $this->__toString()." constructed\n";
        }
    }

    function __destruct() {
        if (self::$verbose == true) {
            echo $this->__toString()." destructed\n";
        }
    }   

    function __toString() {
        $res = self::$verbose == true ? ", ".$this->_color : '';
        return sprintf('Vertex( x: %4.2f, y: %4.2f, z:%.2f, w:%.2f%s )',
        $this->_x, $this->_y, $this->_z, $this->_w, $res);
    }

    static function doc() {
        echo file_get_contents('Vertex.doc.txt');
    }
}
?>
