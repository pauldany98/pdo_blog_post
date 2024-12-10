<?php


abstract class Fruit {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    abstract public function getTaste();
    abstract public function getBotanicalName();
    abstract public function getFruitPeculiar();
    

   
}
class Apple extends Fruit {
   
    public function getTaste() {
        return 'sweet';
    }
    public function getBotanicalName() {
        return 'Malus domestica';
    }
    public function getFruitPeculiar() {
        return 'It is a round fruit';
    }
   
}

class Banana extends Fruit {
    private $peelColor;

    public function __construct($name, $peelColor) {
        parent::__construct($name);
        $this->peelColor = $peelColor;
    }
    public function getFruitPeculiar() {
        return 'It is a long fruit';
    }

    public function getTaste() {
        return 'sweet';
    }

    public function getBotanicalName() {
        return 'Musa acuminifera';
    }

    public function getPeelColor() {
        return $this->peelColor;
    }
}

class Cashew extends Fruit {
    private $shellType;

    public function __construct($name, $shellType) {
        parent::__construct($name);
        $this->shellType = $shellType;
    }

    public function getTaste() {
        return 'nutty';
    }
    public function getFruitPeculiar() {
        return 'It is a small fruit';
    }

    public function getBotanicalName() {
        return 'Anacardium occidentale';
    }

    public function getShellType() {
        return $this->shellType;
    }
}

class Orange extends Fruit {
    private $juiceContent;

    public function __construct($name, $juiceContent) {
        parent::__construct($name);
        $this->juiceContent = $juiceContent;
    }

    public function getFruitPeculiar()
    {
        return 'It is a round fruit';
    }
    public function getTaste() {
        return 'sour';
    }

    public function getBotanicalName() {
        return 'Citrus sinensis';
    }

    public function getJuiceContent() {
        return $this->juiceContent;
    }
}

class Pineapple extends Fruit {
    private $prickliness;

    public function __construct($name, $prickliness) {
        parent::__construct($name);
        $this->prickliness = $prickliness;
    }

    public function getTaste() {
        return 'sweet';
    }


    public function getFruitPeculiar() {
        return 'It is a tropical fruit';
    }
    public function getBotanicalName() {
        return 'Ananas comosus';
    }

    public function getPrickliness() {
        return $this->prickliness;
    }
}

$apple = new Apple('Apple', 'Granny Smith');
echo $apple->getTaste() . '<br>';
echo $apple->getBotanicalName() . '<br>';
echo $apple->getName() . '<br>';
echo $apple->getFruitPeculiar() . '<br>' .'<br>';

$banana = new Banana('Banana', 'Yellow');
echo $banana->getTaste() . '<br>'; 
echo $banana->getBotanicalName() . '<br>';
echo $banana->getName() . '<br>';
echo $banana->getPeelColor() . '<br>';
echo $banana->getFruitPeculiar() . '<br>' .'<br>';



$cashew = new Cashew('Cashew', 'Red');
echo $cashew->getTaste() . '<br>';
echo $cashew->getBotanicalName() . '<br>';
echo $cashew->getName() . '<br>';
echo $cashew->getShellType() . '<br>';
echo $cashew->getFruitPeculiar() . '<br>' .'<br>';

$orange = new Orange('Orange', 'Sweet');
echo $orange->getTaste() . '<br>';
echo $orange->getBotanicalName() . '<br>';
echo $orange->getName() . '<br>';
echo $orange->getJuiceContent() . '<br>';
echo $orange->getFruitPeculiar() . '<br>' .'<br>';

$pineapple = new Pineapple('Pineapple', 'Sweet');
echo $pineapple->getTaste() . '<br>';
echo $pineapple->getBotanicalName() . '<br>';
echo $pineapple->getName() . '<br>';
echo $pineapple->getPrickliness() . '<br>';
echo $pineapple->getFruitPeculiar() . '<br>' .'<br>';
