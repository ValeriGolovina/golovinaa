<?php

/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/21/2017
 * Time: 4:26 PM
 */
namespace Helper;
class GreetingHelper
{
    private $message;

    public function __construct($message)
    {
        $this-> message= $message;
    }

    public function getMessage()
    {
       return $this->message;
    }
    public function sayHello($name="Guest")
    {
        return $this->message.','.$name;
    }
}