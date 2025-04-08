<?php
class Person{
    private $name;
    private $age;
    public function setName($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return "Your Name is ".$this->name." and your age is ".$this->age;
    }
}

$person = new Person();
$ob = new Person();
$person->setName("Karan Attri",21);
echo $person->getName()."\n";
$ob->setName("Archita Das",19);
echo $ob->getName();
?>