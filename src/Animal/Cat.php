<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/28/2017
 * Time: 11:42 AM
 */

namespace Animal;


class Cat extends AbstractAnimal
{
    public function __construct($username='Cat Dodo ')
    {
        $this-> username= $username;
    }
}