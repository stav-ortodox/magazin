<?php
class Good {
    private $code;
    private $name;
    private $category;
    private $weight;
    private $price;

    private $discount = 10;

    public function __construct($category, $name)
    {
        $this->category = $category;
        $this->name = $name;
    }

    public function getName(){
        return $this->category . ' ' . $this->name;
    }
}

$good1 = new Good('монитор', 'Samsung');

echo $good1->getName();