<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/28/2017
 * Time: 11:39 AM
 */

namespace Animal;


class Dog extends AbstractAnimal
{
    public function __construct($username='Dog Lisi ')
    {
        $this-> username= $username;
    }
}