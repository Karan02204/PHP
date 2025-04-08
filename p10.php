<?php
interface Animal {
    public function makeSound();
}
class Dog implements Animal {
    public function makeSound() {
        return "Woof!";
    }
}
class Cat implements Animal {
    public function makeSound() {
        return "Meow!";
    }
}

$dog = new Dog();
$cat = new Cat();
echo $dog->makeSound(); // Outputs: Woof!
echo "<br>";
echo $cat->makeSound(); // Outputs: Meow!
?>