<?php
require_once 'classes.php';

class Monitor extends Product {


    const TYPE = 'Монитор: ';

    private $diagonal, $typeOfMatrix;


    public function __construct($article, $name, $price, $weight, $category, $diagonal, $typeOfMatrix, $discount){
        $this->diagonal = $diagonal;
        $this->typeOfMatrix = $typeOfMatrix;
        parent::__construct($article, $name, $price, $weight, $category, $discount);
    }

    public function getDiagonalInch(){
        return $this->diagonal;
    }

    public function getDiagonalCentimeter(){
        return $this->diagonal * 2.54;
    }

    public function getTypeOfMatrix(){
        return $this->typeOfMatrix;
    }

    public function getInfo(){
        echo self::TYPE . PHP_EOL .
                            "Категория: ". $this->getCategory() ."; ". PHP_EOL .
                            "Наименование: ". $this->getName() ."; ". PHP_EOL .
                            "Диагональ: ". $this->getDiagonalInch() ."; ". PHP_EOL .
                            "Тип матрицы: ". $this->getTypeOfMatrix() .";". PHP_EOL . PHP_EOL;
    }
}

class HeadPhones extends Product {


    const TYPE = 'Наушники: ';

    private $maxVol, $wiredOrWireless;


    public function __construct($article, $name, $price, $weight, $category, $maxVol, $wiredOrWireless, $discount){
        $this->maxVol = $maxVol;
        $this->wiredOrWireless = $wiredOrWireless;
        parent::__construct($article, $name, $price, $weight, $category, $discount);
    }

    public function getMaxVol(){
        return $this->maxVol;
    }

    public function getWiredOrWireless(){
        return $this->wiredOrWireless;
    }

    public function getInfo(){
        echo self::TYPE . PHP_EOL ."Категория: ". $this->getCategory()."; ". PHP_EOL .
            "Наименование: ". $this->getName()."; ". PHP_EOL .
            "Макс. громкость: ". $this->getMaxVol()." vol.; ".PHP_EOL .
            "Проводные/безпроводные: ". $this->getWiredOrWireless().";". PHP_EOL . PHP_EOL;
    }
}

