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
echo $b;         ;
?>
