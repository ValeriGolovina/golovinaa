<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/26/2017
 * Time: 4:30 PM
 */

namespace Helper;


class FriendlyGreetingHelper extends AbstractGreetingHelper
{
    public function __construct($message='Hi')
    {
        $this-> message= $message;
    }


}