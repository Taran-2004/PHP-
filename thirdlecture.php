<?php 
// array methods in php
$ar=array("pune","delhi","hyderabad","mumbai");
for($i=0;$i<count($ar);$i++){
   echo $ar[$i];
   echo "<br>";
}
print_r($ar);
$fruits = ["apple", "banana"];
array_push($fruits, "mango", "orange"); // Used when you want to add items at the end of an array.
// Now: ["apple", "banana", "mango", "orange"]
$fruits = ["apple", "banana", "mango"];
$last = array_pop($fruits); // Useful for removing the last item, like a stack.
// Now: ["apple", "banana"]
$fruits = ["apple", "banana", "mango"];
$first = array_shift($fruits); // Removes and returns the first element of an array.
// Now: ["banana", "mango"]
$fruits = ["banana", "mango"];
array_unshift($fruits, "apple"); // Used to insert elements at the beginning. 
// Now: ["apple", "banana", "mango"]
$a = ["red", "green"];
$b = ["blue", "yellow"];
$merged = array_merge($a, $b); // Useful for combining arrays together.
// ["red", "green", "blue", "yellow"]
$user = ["name" => "Taran", "age" => 25];
$keys = array_keys($user); // Returns all the keys of an array.
$user = ["name" => "Taran", "age" => 25];
$values = array_values($user); // Returns all the values of an array.
$colors = ["red", "green", "blue"]; // Checks if a value exists in an array.
if (in_array("green", $colors)) {
    echo "Green is in the array";
}
$colors = ["a" => "red", "b" => "green"];
$key = array_search("green", $colors); // Searches an array for a value and returns the key.
$colors = ["red", "green", "blue"];
echo count($colors); //  Used to get array length.
$colors = ["red", "green", "blue", "yellow"];
$part = array_slice($colors, 1, 2); //  Extracts a portion of the array.
$numbers = [1, 2, 2, 3, 4, 4];
$unique = array_unique($numbers); // Removes duplicate values from an array.
$numbers = [3, 1, 4];
sort($numbers); //  Sorts array values in ascending order (index keys are reset).
$numbers = [3, 1, 4];
rsort($numbers); 
print_r($numbers); //  Sorts array values in descending order (index keys are reset).
// Output: Array ( [0] => 4 [1] => 3 [2] => 1 )

$prices = ["apple" => 100, "banana" => 50];
asort($prices); // Sorts associative arrays by values (keeps keys).

// ["banana" => 50, "apple" => 100]
$data = ["b" => 2, "a" => 1];
ksort($data); // Sorts an associative array by keys.
 // ["a" => 1, "b" => 2]
$array1 = ["red", "green", "blue"];
$array2 = ["green", "yellow", "blue"];
$common = array_intersect($array1, $array2); //  Compares two or more arrays and returns the values that are present in all arrays.
print_r($common); 
// Output: Array ( [1] => green [2] => blue )

?>