<?php

declare(strict_types=1);

abstract class Shape {
    protected string $name;
    abstract public function calculateArea() :float;

    public function __construct($name){
        $this->name= $name;
    }

    public function getName() :string
    {
        return $this->name;
    }
}


class Circle extends Shape {
    private float $radius;

    public function __construct(string $name,float $radius,) 
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    
    public function calculateArea(): float
     {
        return pi() * pow($this->radius, 2);
    }

    public function getRadius(): float 
    {
        return $this->radius;
    }
}


class Rectangle extends Shape {
    private float $width;
    private float $height;

    
    public function __construct(string $name, float $width,float $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    
    public function calculateArea(): float 
    {
        return $this->width * $this->height;
    }

    
    public function getWidth(): float 
    {
        return $this->width;
    }

    public function getHeight(): float 
    {
        return $this->height;
    }
    
}


function printShapeArea(Shape $shape): void
{
    $area = $shape->calculateArea();
    echo "The area of the {$shape->getName()} is: " . number_format($area, 2) . PHP_EOL;
}


$circle = new Circle('Circle',10);
$rectangle = new Rectangle('Rectangle',15, 10);


printShapeArea($circle);
printShapeArea($rectangle);