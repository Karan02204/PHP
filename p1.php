<?php
class Student{
    public function __construct($name,$age,$reg){
        $this->name = $name;
        $this->age = $age;
        $this->reg = $reg;
    }

    public function getDetails(){
        return "Your Name is ".$this->name." and your age is ".$this->age." and your registration number is ".$this->reg;
    }
}

$ob = new Student("Karan",21,12309068);
$ob1 = new Student("Archita",19,12307421);

echo $ob->getDetails()."\n";
echo $ob1->getDetails();
?>