<?php

class SingletonObject
{
   private static $instance = null;

   public function __construct(){
       var_dump('construction');
   }

   public static function getInstance(){
       if(self::$instance == null){
            self::$instance = new SingletonObject();
       }

       return self::$instance;
   }
}

$instance = SingletonObject::getInstance();
$instance2 = SingletonObject::getInstance();
$instance3 = SingletonObject::getInstance();
$instance4 = SingletonObject::getInstance();
$instance5 = SingletonObject::getInstance();

// output = "string(12) "construction""
