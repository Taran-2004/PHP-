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
 ?>
    </center>
</body>
</html>