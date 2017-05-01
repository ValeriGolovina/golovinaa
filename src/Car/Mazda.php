<?php
namespace Car;

/**
 * Created by PhpStorm.
 * User: default
 * Date: 5/1/2017
 * Time: 9:18 AM
 */
class Mazda extends AbstractCar
{
    private $name;
    public function getName($name = 'Maxda 7x')
    {
        $this->name = $name;
        return $this->name;
    }
}