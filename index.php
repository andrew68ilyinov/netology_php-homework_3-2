<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 25.07.2018
 * Time: 23:43
 */

# Задание 3.

/*
 *  1) Автомобили
 */

class Cars
{
    const WHEELS = 4;  // 4 колеса
    
    public $brand;    // Марка, напр. 'Toyota'
    public $model;    // Модель (Rav4)
    public $color;    // Цвет
    public $complect; // Комплектация
    public $price;    // Цена
    
    public function __construct($brand = 1, $model = 1, $color = 'Yellow', $complect = 25, $price = 100) // Инициализируем любыми знач. по умолч.
    {
        $this->brand    = $brand;
        $this->model    = $model;
        $this->color    = $color;
        $this->complect = $complect;
        $this->price    = $price;
    }
    
    public function getPrice($discount)
    {
        if ($discount === 0) {
            $finalPrice = $this->price;
        } else {
            $finalPrice = $this->price * $discount / 100;
        }
        echo $finalPrice;
        return $finalPrice;
    }
}

$car1 = new Cars(); // Создаю 2 объекта двумя способами
$car1->brand    = 'Toyota';
$car1->model    = 'Rav4';
$car1->color    = 'White';
$car1->complect = 'U287';
$car1->price    = 1100000;

$car2 = new Cars('BMW', 'X5', 'Black', 'Y8651', 3500000);

echo '<br>' . 'Итоговая цена машины марки Toyota: ' . $car1->getPrice(0);
echo '<br>' . 'Итоговая цена машины марки BMW: ' . $car2->getPrice(5); // Дадим скидку 5 процентов


/*
 *  2) Телевизоры
 */

class TV
{
    public $brand;
    public $model;
    public $diagonal;
    public $resolution;
    public $price;
    
    public function __construct($brand = 1, $model = 1, $diagonal = 40, $resolution = 'HD', $price = 1000)
    {
        $this->brand       = $brand;
        $this->model       = $model;
        $this->diagonal    = $diagonal;
        $this->resolution  = $resolution;
        $this->price       = $price;
    }
    
    public function getTV()
    {
        echo 'Вы получили: ' . $this->brand . ' ' . $this->model . ' ' . $this->diagonal . ' ' . $this->resolution . ' ' . $this->price;
    }
}

$tv1 = new TV('Sony', 'KD-55XF8577', '55', 'Ultra HD', 110000);
$tv2 = new TV('Samsung', 'UE40MU6470U', '40', 'Ultra HD', 40000);


/*
 *  3) Шариковая ручка
 */

class Pens
{
    public $brand;
    public $color;
    public $widthWright; // Толщина линии письма
    
    
}