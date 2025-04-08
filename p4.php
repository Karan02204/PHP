<?php
class A{
    public function func1(){
        return "A";
    }
}

class B extends A{
    public function func2(){
        return "B";
    }
}

class C extends B{
    public function func3(){
        return "C";
    }
}

$ob = new C();
echo $ob->func1()."\n";
echo $ob->func2()."\n";
echo $ob->func3();
?>