<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    <?php echo "php <br>";
    $cars = array("alto","nano","mercedes");
    class car{
        public $color;
        public $model;
        public function __construct($color,$model){
            $this->color = $color;
            $this->model = $model;
        }

        public function message(){
            return "My car is a ".$this->color." ".$this->model." !<br>";
        }

    }
    $mycar = new car("red","alto");
    echo $mycar->color."<br>";
    echo $mycar->model."<br>";
    echo $mycar->message();
    $x = null;
    var_dump($x)."<br>";
    $y = 5;
    $y = (string) $y;
    var_dump($y);
    ?>
</body>
</html>