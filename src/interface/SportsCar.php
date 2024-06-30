<?php
namespace App\interface;
use App\interface\Car;
use App\interface\CarModel;



class SportsCar implements Car, CarModel
{

    public function __construct(private string $model = "")
    {
        //
    }
    public function applyBreak()
    {
        echo "Applying Breaks to Car \n";
    }

    public function increaseSpeed()
    {
        echo "Increasing Speed of the Car \n";
    }

    public function decreaseSpeed()
    {
        echo "Decreasing Speed of the Car \n";
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }
}

