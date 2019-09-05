<?php

class ProductPicker {

    public $chicken = 20;
    public $cow = 10;
    public $corral = [
    "chicken" => [],
    "cow" => []
    ];
    public $eggs = 0;
    public $milk = 0;

    public function getChicken()
    {
        for ($i = 1; $i <= $this->chicken; $i++)
        {
            $this->corral['chicken']['chicken' . $i] = $i;
            $this->eggs += mt_rand(0, 1);
        }
    }

    public function getCow()
    {
        for ($i = 1; $i <= $this->cow; $i++)
        {
            $this->corral['cow']['cow' . $i] = $i;
            $this->milk += mt_rand(8, 12);
        }
    }

}

$a = new ProductPicker();
$a->getChicken();
$a->getCow();


echo "Кол-во кур: " . $a->chicken . "<br>";
echo "Кол-во коров: " . $a->cow . "<br>";
echo "Кол-во собранных яиц: " . $a->eggs . "<br>";
echo "Литров молока: " . $a->milk . "<br>";
echo "Общее кол-во продуктов: " . ($a->eggs + $a->milk) . "<br>";