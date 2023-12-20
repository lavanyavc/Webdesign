
<?php 
// string
$x = "Hello world!";
echo($x);
var_dump($x);
echo "<br>"; 

// integer
$y = 100;
echo($y);
var_dump($y);
echo "<br>"; 

// float
$y = 55.55;
echo($y);
var_dump($y);
echo "<br>"; 

// array
$vehicles = array("Car","Bike","Bus","Cycle");
echo($vehicles[2]);
var_dump($vehicles);
echo "<br>"; 

// boolen
$y = (4>5);
echo($y);
var_dump($y);
echo "<br>"; 

// object
class Person {
      public $name;
      public $age;
      public function __construct($name,$age) {
            $this->name=$name;
            $this->age=$age;
      }
      public function personalDetails(){
            return "My name is " .  $this->name . " " ."& age is ". $this->age . " months";
      }
}

$myPerson = new Person ("Advith",18);
var_dump($myPerson->personalDetails());
echo"<br>";

class Shape {
      public $length;
      public $breadth;
      public function __construct($length,$breadth) {
            $this->length=$length;
            $this->breadth=$breadth;
      }

      public function getArea(){
            return $this->length*$this->breadth;
      }

      public function getPerimeter(){
            return 2*($this->length+$this->breadth);
      }

}

$myShape = new shape (10,10);
// var_dump($myShape);
echo $myShape->getArea();
echo"<br>";
echo $myShape->getPerimeter();
echo"<br>";


class Car {
      public $model;
      public $color;
      public function __construct($model,$color) {
            $this->model=$model;
            $this->color=$color;
      }
      public function carDetails() {
            echo "I have ". $this->model." car";
            echo " & color is ".$this->color. "!";
      }
}
$myCar = new Car("BMW","Black");
echo $myCar->carDetails();
echo"<br>";

// null
$a=null;
echo($a);
echo"<br>";

var_dump($a);

?>


            