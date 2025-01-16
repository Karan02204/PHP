<?php
function show(){
    echo "<h1>Hello World <br></h1>";
}

show();
function add($a,$b){
    return "The sum of ".$a." and ".$b." is ".$a + $b;
}
echo add(2,5)."<br>";

function simple_interest($p,$r,$t){
    return "The simple interest is ".(($p*$r*$t)/100)."<br>";
}

echo simple_interest(1000,2,5);

class student{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function display(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
    }

}

$student1 = new student("Karan",20);
$student1->display();
?>