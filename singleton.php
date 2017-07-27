<?php
class Singleton
{
    /**
    * Return Singletone instance of the class
    * Create method to get instance of the class
    */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
        
    }
    /**
    * Protected constructor to prevent creating new instance with new operator
    */
    protected function __construct()
    {

    }
    /**
    * Private clone method to prevent cloning of the instance of the singleton isntance
    */
    private function __clone()
    {

    }
    /**
    * private unserialize method of singleton
    */
    private function __wakeup()
    {

    }
}

class SingletonChild extends Singleton
{

}

$firstObj = Singleton::getInstance();
var_dump($firstObj === Singleton::getInstance());//true  
$secondObj = SingletonChild::getInstance();
var_dump($secondObj === $firstObj);//false
var_dump($secondObj === SingletonChild::getInstance());//true