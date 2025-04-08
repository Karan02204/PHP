<?php
interface Animal {
    public function makeSound();
}

interface Pet{
    public function play();
}

class Dog implements Animal,Pet {
    public function makeSound() {
        return "Woof!";
    }
    public function play() {
        return "The dog is playing fetch!";
    }
}
$dog = new Dog();
echo $dog->makeSound(); // Outputs: Woof!
echo "<br>";
echo $dog->play(); // Outputs: The dog is playing fetch!

?>