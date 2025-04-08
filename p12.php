<?php
class MathOperations{
    public function __call($name, $arguments){
        if($name == 'add'){
            switch(count($arguments)){
                case 2:
                    return $arguments[0] + $arguments[1];
                case 3:
                    return $arguments[0] + $arguments[1] + $arguments[2];
                case 4:
                    return $arguments[0] + $arguments[1] + $arguments[2] + $arguments[3];
                case 5:
                    return $arguments[0] + $arguments[1] + $arguments[2] + $arguments[3] + $arguments[4];
                default:
                    return "Invalid number of arguments for add()";
            }
        }
    }
}

$math = new MathOperations();
echo $math->add(1, 2); // Outputs: 3
echo $math->add(1, 2, 3); // Outputs: 6
echo $math->add(1, 2, 3, 4); // Outputs: 10
echo $math->add(1, 2, 3, 4, 5); // Outputs: 15
echo $math->add(1, 2, 3, 4, 5, 6); // Outputs: Invalid number of arguments for add()

?>