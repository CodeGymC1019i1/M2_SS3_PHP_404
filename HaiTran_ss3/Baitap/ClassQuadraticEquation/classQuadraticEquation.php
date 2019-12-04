<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    public function getC() {
        return $this->c;
    }

    private function getDiscriminant() {
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }

    public function getRoot1() {
        return (- $this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

    public function getRoot2() {
        return (- $this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

    public function displayRoot() {
        if ($this->getDiscriminant() > 0)
            return "The equation has 2 roots are x1= ".$this->getRoot1().' '.'x2= '.$this->getRoot2();
        elseif ($this->getDiscriminant() == 0)
            return "The equation has root are x= ".$this->getRoot1().".";
        else
            return "The euqation has no root";
}
}
