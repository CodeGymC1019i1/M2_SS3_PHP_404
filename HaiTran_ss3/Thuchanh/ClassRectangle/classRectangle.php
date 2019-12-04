<?php
class Rectangle {
    public $width;
    public  $height;
    public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
}

    public function  getPerimeter() {
        return ($this->height + $this->width) * 2;
    }

    public function display()
    {
        return "This rectangle have width = ".$this->width." and height = ".$this->height;
    }

};