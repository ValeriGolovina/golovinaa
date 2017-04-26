<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/26/2017
 * Time: 4:58 PM
 */

namespace Helper;


abstract class AbstractGreetingHelper implements GreetingHelperInterface
{   protected $message;
    public function sayHello($name = 'Guest')
    {
        return $this->message.','.$name;
    }
}