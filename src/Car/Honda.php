<?php

namespace Car;

/**
 * Created by PhpStorm.
 * User: default
 * Date: 5/1/2017
 * Time: 9:17 AM
 */
class Honda extends AbstractCar
{
    public function getName($name = 'Honda 123')
    {
        $this->name = $name;
        return $this->name;
    }
}
