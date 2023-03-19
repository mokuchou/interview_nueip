<?php
$myCar = new Car('藍色');
$myMotor = new Motorcycle(125);

echo "我有一輛".$myCar->getWheel()."輪的".$myCar->getColor().$myCar->getType();
// 我有一輛4輪的藍色汽車
echo '<br>';
echo "我有一輛".$myMotor->getWheel()."輪的".$myMotor->getDisplacement()."cc".$myMotor->getType();
// 我有一輛2輪的125cc機車

// $myCar->getType();
// $myMotor->getType();
// Car 與 Motorcycle 都有繼承與建立 Vehicles 的 車種 function

// $myCar->getWheel();
// $myMotor->getWheel();
// Car 與 Motorcycle 都有繼承與建立 Vehicles 的 輪胎數量 function

// $myCar->getDisplacement();
// Fatal error => 因為 Car 中沒有建立 排氣量 的參數與function

// $myMotor->getColor();
// Fatal error => 因為 Motorcycle 中沒有建立 車殼顏色 的參數與function

class Vehicles
{
    protected $type; // String 車種
    protected $wheel; // Integer 輪胎數量

    public function __construct($type,$wheel)
    {
        $this->type = $type;
        $this->wheel = $wheel;
    }

    public function getType()
    {
        return $this->type;
    }
    public function getWheel()
    {
        return $this->wheel;
    }
}

class Car extends Vehicles
{
    protected $color; // String 車殼顏色

    public function __construct($color)
    {
        parent::__construct('汽車',4);
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Motorcycle extends Vehicles
{
    protected $displacement; // Integer 排氣量cc數

    public function __construct($displacement)
    {
        parent::__construct('機車',2);
        $this->displacement = $displacement;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }
}

