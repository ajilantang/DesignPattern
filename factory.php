<?php
class Coffee
{
    private $coffee_bean;
    private $coffee_brew;
    private $sugar;

    public function __construct($coffee_bean, $coffee_brew, $sugar)
    {
        $this->coffee_bean = $coffee_bean;
        $this->coffee_brew = $coffee_brew;
        $this->sugar       = $sugar;
    }

    public function get_make_and_model()
    {
        return   ' We Make with this bean :  ' . $this->coffee_bean . ' , Type of brew is :' . $this->coffee_brew . ' , With :' .  $this->sugar  . ' sugar ';
    }
}

class CoffeeFactory
{
    public static function create($coffee_bean, $coffee_brew, $sugar)
    {
        return new Coffee($coffee_bean, $coffee_brew, $sugar);
    }
}

// have the factory create the Coffee Object
$v60 = CoffeeFactory::create('Aceh', 'V60', "brown");

print_r($v60->get_make_and_model()); //  We Make with this bean :  Aceh , Type of brew is :V60 , With :brown sugar"
