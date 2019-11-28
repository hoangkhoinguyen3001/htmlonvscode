<?php 
// php string
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y; 
// php integer
$x = 5985;
var_dump($x);
//php float
$x = 10.365;
var_dump($x);
//php boolean
/*$x = true;
$y = false;*/
//php array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
//php object
class Car {
    //function Car() will error "Methods with the same name as their class will not be constructors in a future version of PHP"
    function __construct() {
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
//php Null value
$x = "Hello world!";
$x = null;
var_dump($x);

//PHP - The if Statement
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
echo "<br>";
//PHP - The if...else Statement
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
//PHP - The if...elseif...else Statement
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
//The PHP switch Statement
$favcolor = "blue";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
//PHP Loops
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "<br>";
$x = 0;

while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}
echo "<br>";
//The PHP do...while Loop
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";
//PHP for Loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
echo "<br>";
for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
}
echo "<br>";
//PHP foreach Loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>

