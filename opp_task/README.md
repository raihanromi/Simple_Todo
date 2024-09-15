# OOP task 

## Task1:
For inheritance task i created a abstract shape class.In this abstract class there is one abstract method and constructor for taking the name value as a parameter.
Shape class has one concrete method so that child class can have the same method 

For child class i created circle and rectangle .circle and rectangle class inherite the parent class which is shape.circle and rectangle both take $name parameter and it is saved the the super class using the parent contruct call.

## Task 4:
For polymorphism part i created a AnimalMakingSound interface.so that other class that inherite this class have to implements the makeSound method. makeSound mehtod return type is always will be string for all class .

Cat class implements the AnimalMakingSound.
Dog class implements the AnimalMakingSound.

Cat class makeSound method return "Meow" string where Dog class makeSound method return "Bark" string.Here we can see the impelmentation of the polymorphism .same method used for different class
