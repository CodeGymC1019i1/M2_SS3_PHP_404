<?php

class Fan
{
    public $SLOW = 1;
    public $MEDIUM = 2;
    public  $FAST = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = $this->SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = 'Blue';
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    public function getOn()
    {
        return $this->on;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function setOn($status)
    {
        $this->on = $status;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function toString()
    {
        if ($this->on)
            return 'Speed: '.$this->speed.' Color: '.$this->color.' Radius '.$this->radius.'. Fan is on.';
        else
            return "Color: ".$this->color."Radius: ".$this->radius.". Fan is off.";
    }
}
