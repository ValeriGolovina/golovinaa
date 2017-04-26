<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/26/2017
 * Time: 4:29 PM
 */

namespace Helper;


class FormalGreetingHelper extends AbstractGreetingHelper
{
    public function __construct($message='Hello')
    {
        $this-> message= $message;
    }

}