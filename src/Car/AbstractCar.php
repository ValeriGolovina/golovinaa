<?php
namespace Car;

/**
 * Created by PhpStorm.
 * User: default
 * Date: 5/1/2017
 * Time: 9:26 AM
 */
class AbstractCar implements \Car\CarInterface
{
    //private $carcolor;
    private $speed;
    private $speedtype;
    protected $name;
    //private $size;
    public $max = 1;
    public $min = 100;


    public function __construct($speed)
    {
        $this->speed = $speed;
        return $this->speed;

    }
    protected function defineMaxMin($speed)
    {
        if ( $this->max  < $speed )
        {
            $this->max = $speed;
        }
        if ($this->min > $speed)
        {
            $this->min = $speed;
        }
    }

    public function printMax()
    {
        return $this->max.$this->name.'max speed';
    }

    public function printMin()
    {
        return $this->min.$this->name.'min speed';
    }
    public function defineSpeed($speed,$max,$min)
    {
        if ($speed >= $max)
        {
            $this->speedtype = 'Fast car';
        }
        elseif ($speed < $min)
        {
            $this->speedtype = 'Very slow car';
        }
        else
        {
            $this->speedtype = 'Normal car';
        }
    }

    public function getSpeedType()
    {
        return $this->speedtype;
    }
}