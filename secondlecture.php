<html>
<head>
    <title>
     this is the page
    </title>

</head>
<body>
    <center>
        <marquee>!!!!!!PHP START!!!!!!!</marquee>
        <?php
// switch statement
$weekend=2;
switch($weekend){
    case 1:
        echo "today is monday";
        break;
    case 2:
        echo "today is monday";
        break;
    case 3:
        echo "today is tuesday";
        break;
    case 4:
        echo "today is wednesday";
        break;
    case 5:
        echo "today is thursday";
        break;
    default:
        echo "today is nothing";
}
echo "<br>";
// ternary operator
 $num=18;
 $result=($num>=18) ? print "voting done" : print "cannot vote";
 echo "$num";
 echo "<br>";
//  array
 $fruits=["apple","mango","banana","orange"]; 
echo "$fruits[0]";
echo "<br>";
print_r($fruits);
echo "<br>";
// unary operator
$a=10;
++$a;
echo $a;
$a++;
echo $a;
echo "<br>";
// function
function sum(...$a){
   $num=0;
   foreach($a as $value){
    $num+= $value;
    echo "<br>";
    echo $num;
   }

};
sum(...[30,40,60]);
echo "<br>";
// string methods
// 1. strlen() – For calculating length of the string
echo strlen("hello");  // Output: 5
echo "<br>";
// 2. strtoupper() – Convert string to uppercase
echo strtoupper("hello");  // Output: HELLO
echo "<br>";
// 3. strtolower() – Convert string to lowercase
echo strtolower("HELLO");  // Output: hello
echo "<br>";
// 4. ucfirst() – Capitalize first letter of the string
echo ucfirst("hello world");  // Output: Hello world
echo "<br>";
// 5. ucwords() – Capitalize first letter of each word
echo ucwords("hello world");  // Output: Hello World
echo "<br>";
// 6. strrev() – Reverse the string
echo strrev("hello");  // Output: olleh
echo "<br>";
// 7. strpos() – Find the position of the first occurrence of a substring
echo strpos("hello world", "o");  // Output: 4
echo "<br>";
// 8. str_replace() – Replace part of the string with something else
echo str_replace("world", "PHP", "hello world");  // Output: hello PHP
echo "<br>";
// 9. trim() – Remove whitespace from both ends
echo trim("  hello  ");  // Output: hello
echo "<br>";
// 10. ltrim() – Remove whitespace from the left side
echo ltrim("  hello");  // Output: hello
echo "<br>";
// 11. rtrim() – Remove whitespace from the right side
echo rtrim("hello  ");  // Output: hello
echo "<br>";
// 12. explode() – Convert string to array using a separator
print_r(explode(" ", "hello world"));  // Output: Array ( [0] => hello [1] => world )
echo "<br>";
// 13. implode() – Convert array to string using a separator
echo implode("-", ["hello", "world"]);  // Output: hello-world
echo "<br>";
// 14. substr() – Get part of a string (substring)
echo substr("hello world", 6);  // Output: world
echo "<br>";
// 15. str_repeat() – Repeat a string multiple times
echo str_repeat("ha", 3);  // Output: hahaha
echo "<br>";
// 16. number_format() – Format a number with commas (like money)
echo number_format(1234567);  // Output: 1,234,567
echo "<br>";
// 17. strcmp() – Compare two strings (returns 0 if equal)
echo strcmp("abc", "abc");  // Output: 0
echo "<br>";
// 18. str_split() – Split string into array of characters
print_r(str_split("hello"));  // Output: Array ( [0] => h [1] => e [2] => l [3] => l [4] => o )
echo "<br>";
// 19. nl2br() – Convert new lines (\n) to <br> tags in HTML
echo nl2br("hello\nworld");  // Output: hello<br />world
echo "<br>";
// 20. htmlspecialchars() – Convert HTML tags to plain text for safety
echo htmlspecialchars("<h1>Hello</h1>");  // Output: &lt;h1&gt;Hello&lt;/h1&gt;
echo "<br>";
// 21. str_word_count() – Count the number of words in a string
echo str_word_count("PHP is super easy");  // Output: 4
echo "<br>";
// Bonus: str_word_count() with return = 1 (get all words in array)
print_r(str_word_count("PHP is fun", 1));  // Output: Array ( [0] => PHP [1] => is [2] => fun )
echo "<br>";
// Bonus: str_word_count() with return = 2 (words with position)
print_r(str_word_count("PHP is fun", 2));  // Output: Array ( [0] => PHP [4] => is [7] => fun )
echo "<br>";
echo  str_replace("hi","gudmorning","hi taran");
 ?>
    </center>
</body>
</html>