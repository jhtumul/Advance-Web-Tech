<?php

    class Fruit
    {
        public $name;
        protected $color;
        private $weight;

        //construction
        function __construct($name, $color, $weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        //set functions
        function setName($name)
        {
            $this->name = $name;
        }
        function setColor($color)
        {
            $this->color = $color;
        }
        function setWeight($n)
        {
            $this->weight = $n;
            return $this->weight;
        }

        //get functions
        function getName()
        {
            return $this->name;
        }
        function getColor()
        {
            return $this->color;
        }
        function getWeight()
        {
            return $this->weight;
        }

        function __destruct()
        {
            echo "This fruit is {$this->name}.<br>";
        }

    }

    $mango = new Fruit('pepe', 'black', '1');  //creating object
    $mango->name = 'Mango'; //assigning public variable's value directly
    $mango->setColor ('Yellow'); //setting protected variable's value via public set function
    $mango->setWeight ('300'); //setting private variable's value via public set function
    echo $mango->getName();
    echo $mango->getColor();
    echo $mango->getWeight();

    $apple = new Fruit('Apple', 'Red', '200');  //creating object
    echo $apple->getName();
    echo $apple->getColor();
    echo $apple->getWeight();


?> 