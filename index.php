<?php 
echo "hi";
echo ("<b>Hello, Taran! Welcome to PHP.</b>");
echo "<h1><i>hellow" . "bubu</i></h1>";

$a = "hi taran. Are you ok?<br>";
echo $a;
echo $a;
echo $a;
echo $a;
echo $a;

echo "<h1>" . $a . "</h1>";
echo $a . "<br>";

// Data Types Examples
$x = "hlo world";   // String
$x = 25;            // Integer
$x = 2.33;          // Float
$x = null;          // Null
$x = false;         // Boolean
$x = array("html", "css", "js"); // Array
// $x = new MyClass(); // Object example (uncomment when class is defined)

// Check value and type
var_dump($x);

// Define Constant
define("NUM",200);  // constant name must be quoted string
echo NUM; 
$b=NUM+20;
echo "<br>". $b;
echo "<br>"."hi ji";     

// arithmetic operators

$a=10;
$b=20;
echo "<br>" . ($a + $b);
echo "<br>" . ($a - $b);
echo "<br>" . ($a * $b);
echo "<br>" . ($a / $b);
echo "<br>" . ($a % $b);
echo "<br>" . ($a ** $b);

// assignment operators
$x = 10;
echo "<br>Original x = $x<br>";

$x += 5;
echo "After += : $x<br>";

$x -= 2;
echo "After -= : $x<br>";

$x *= 3;
echo "After *= : $x<br>";

$x /= 4;
echo "After /= : $x<br>"; //  $x = $x % 4;


$name = "Hello";
$name .= " Taran!";
echo $name;
$a = 10;
$b = "10";
$c = 20;

echo "<h3>Comparison Operators in PHP</h3>";

echo "1. Equal (==): ";
var_dump($a == $b);  // true, because values are equal (type not checked)

echo "<br>2. Identical (===): ";
var_dump($a === $b); // false, because types are different (int vs string)

echo "<br>3. Not Equal (!=): ";
var_dump($a != $c);  // true, 10 is not equal to 20


echo "<br>5. Not Identical (!==): ";
var_dump($a !== $b); // true, because types are different

echo "<br>6. Greater Than (>): ";
var_dump($c > $a);   // true, 20 > 10

echo "<br>7. Less Than (<): ";
var_dump($a < $c);   // true, 10 < 20

echo "<br>8. Greater Than or Equal (>=): ";
var_dump($a >= 10);  // true

echo "<br>9. Less Than or Equal (<=): ";
var_dump($a <= 9);   // false
?>
