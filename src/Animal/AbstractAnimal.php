<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/28/2017
 * Time: 11:23 AM
 */

namespace Animal;


class AbstractAnimal implements AnimalInterface
{   protected $move=false;
    public $username;


    public function move()
    {
        $this-> move = true;
    }
    public function notMove ()
    {
        $this-> move = false;
    }
    public function isMoving ()
    {
        return $this-> move;
    }
   public function Moving()
   {
       return $this-> username.'is moving';
   }
    public function notMoving()
    {
        return $this-> username.'is not moving';
    }
}