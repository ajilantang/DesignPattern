<?php

interface Coffee {
    public function serve();
    public function price();
}


interface VietnamDrip {
    public function mixMilk();
    public function price(); 
}

class Customer {
    public function __construct()
    {
    }
    public function Order(Coffee $coffee) 
    {
        $coffee->serve();
        $coffee->price();        
    }   
}


class Gayo implements Coffee {
    public function serve()
    {
        echo "Robusta coffee and only brew with smooth taste!";
    }
    public function price()
    {
        echo "10000 idr";
    }
} 


class GayoDrip implements VietnamDrip
{
    public function mixMilk()
    {
        echo "Mixed with pure milk make your coffee gonna be awesome";
    }
    public function price()
    {
        echo "20000 idr";
    }
}  

class CoffeeAdapter implements Coffee
{
    public function __construct(VietnamDrip $coffee)
    {
        $this->coffee = $coffee;
    }  
    
    public function serve()
    {
        $this->coffee->mixMilk();
    }
    public function price()
    {
        $this->coffee->price();
    }
}

$firstChoice = new Gayo();
$SecondChoice = new GayoDrip();

$aji = new Customer($firstChoice);
$aji->order($firstChoice);
echo  "\xA";
$finalChoice = new CoffeeAdapter($SecondChoice);
$finalChoice->serve();
$finalChoice->price();


