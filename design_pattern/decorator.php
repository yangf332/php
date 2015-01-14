<?php

abstract class Drink
{
    abstract function getPrice();
}

class Tea extends Drink
{
    public function getPrice()
    {
        return 10;
    }
}

class Coffee extends Drink
{
    public function getPrice()
    {
        return 15;
    }
}

abstract class DrinkDecorator extends Drink
{
    protected $_drink;

    public function __construct(Drink $drink)
    {
        $this->_drink = $drink;
    }

    public function getPrice()
    {
        return $this->_drink->getPrice();
    }
}

class Sugar extends DrinkDecorator
{
    public function getPrice()
    {
        return parent::getPrice() + 5;
    }
}

class Milk extends DrinkDecorator
{
    public function getPrice()
    {
        return parent::getPrice() + 8;
    }
}


class Client
{
    public static function main()
    {
        $coffee = new Coffee();
        $sugar  = new Sugar($coffee);
        $milk   = new Milk($sugar);
        echo $milk->getPrice() . "\n";
    }
}

Client::main();