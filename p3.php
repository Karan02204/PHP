<?php
class Animal{
    public function makeSound(){
        return "Some Sound";
    }
}

class Dog extends Animal{
        public function makeSound(){
            return "Bark";
        }
}

$ob = new Dog();
echo $ob->makeSound()."\n";
?>