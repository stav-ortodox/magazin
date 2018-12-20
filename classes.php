<?php

// класс Товар
abstract class Product {


    private $article, $name, $price, $weight, $category, $discount;

    public function  __construct($article, $name, $price, $weight, $category, $discount) {
        $this->article = $article;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->category = $category;
        $this->discount = $discount;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getPriceWithoutNDS($nds = '18'){
        $productNDS = round(($this->price) / 100 * $nds);
        $priceWithoutNDS = $this->price - $productNDS;
        return $priceWithoutNDS;
    }

    public function productDiscount(){
        $discount = $this->discount;
        $priceWithoutNDS = $this->getPriceWithoutNDS();
        $productDiscount = round($priceWithoutNDS / 100 * $discount);
        return $productDiscount;
    }

    public function priceWithDiscount(){
        $discount = $this->discount;
        $productDiscount = round(($this->price) / 100 * $discount);
        $priceWithDiscount = $this->price - $productDiscount;
        return $priceWithDiscount;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getName(){
        return $this->name;
    }

    public function getFullInfo(){
        $priceWithoutNDS = $this->getPriceWithoutNDS() - $this->productDiscount();
        return
            "Категория: {$this->category}". PHP_EOL .
            "Наименование: {$this->name}". PHP_EOL .
            "Вес: {$this->weight} кг.". PHP_EOL .
            "Цена: {$this->price} рублей". PHP_EOL .
            "Цена без НДС: ". $priceWithoutNDS ." рублей". PHP_EOL .
            "Скидка: ". $this->productDiscount() ." рублей "."({$this->discount}%)". PHP_EOL .
            "Цена co скидкой: ". $this->priceWithDiscount() ." рублей". PHP_EOL . PHP_EOL;
    }

    public function getArray(){
        $priceWithoutNDS = $this->getPriceWithoutNDS() - $this->productDiscount();
        if ($this->discount > 0){
            $finalPrice = PHP_EOL .
                "Скидка: ". $this->productDiscount() ." рублей "."({$this->discount}%)". PHP_EOL .
                "Цена co скидкой: ". $this->priceWithDiscount() ." рублей". PHP_EOL;
        }
        else {
            $finalPrice = PHP_EOL .
                "Цена: {$this->price} рублей". PHP_EOL;
        }
        return
            "Категория: {$this->category}". PHP_EOL .
            "Наименование: {$this->name}" .
            $finalPrice .
            "Цена без НДС: ". $priceWithoutNDS ." рублей". PHP_EOL . PHP_EOL;
    }
}

