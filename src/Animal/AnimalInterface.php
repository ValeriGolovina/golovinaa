<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/28/2017
 * Time: 11:25 AM
 */

namespace Animal;


interface AnimalInterface
{
    public function move();
    public function notMove ();
    public function isMoving();
    public function Moving();
    public function notMoving();
}