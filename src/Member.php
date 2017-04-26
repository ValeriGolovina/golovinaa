<?php

/**
 * Created by PhpStorm.
 * User: default
 * Date: 4/26/2017
 * Time: 1:50 PM
 */
class Member
{
   public $username="";
   private $loggedIn = false;

   public function login()
   {
       $this-> loggedIn = true;
   }
   public function logout ()
   {
       $this-> loggedIn = false;
   }
   public function isLoggedIn ()
   {
       return $this-> loggedIn;
   }
}