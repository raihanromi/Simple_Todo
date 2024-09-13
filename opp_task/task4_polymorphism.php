<?php
declare(strict_types=1);

interface AnimalMakingSound {
    public function makeSound():string;  
}


class Dog implements AnimalMakingSound {
    public function makeSound():string 
    {
        return "Bark";
    }
}


class Cat implements AnimalMakingSound {
    public function makeSound():string
     {
        return "Meow";
    }
}


function outputAnimalSound(AnimalMakingSound $animal):void
 {
    echo $animal->makeSound() . "\n";
}

$dog = new Dog();
$cat = new Cat();

outputAnimalSound($dog);  
outputAnimalSound($cat);  
