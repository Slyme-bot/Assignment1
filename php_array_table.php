<?php
/* Basic Calculation
$a = "1";
$b = 2;
var_dump($a + $b); echo '<br>'; // 3
var_dump($a . $b);*/

/* Arithmetic Operation
$a = 10;
$b = 3;
var_dump($a + $b); echo '<br>'; // 13
var_dump($a - $b); echo '<br>'; // 7
var_dump($a * $b);  echo '<br>';// 30
var_dump($a / $b); echo '<br>';// 3.333333...
var_dump($a % $b); echo '<br>'; // 1
var_dump($a ** $b); echo '<br>';// 1000 this is an exponential that raises the first to the power of the second. eg 10^3 
var_dump(-$a);
*/

/* Comparison Operation
var_dump(2 < 3);echo '<br>'; // true
var_dump(3 < 3); echo '<br>'; // false
var_dump(3 <= 3); echo '<br>';// true
var_dump(4 <= 3); echo '<br>';// false
var_dump(2 > 3); echo '<br>';// false
var_dump(3 >= 3); echo '<br>';// true
var_dump(3 > 3); echo '<br>';// false
var_dump(1 <=> 2); echo '<br>';// There is also the special operator <=> (spaceship) that compares both the operands and returns an integer instead of a Boolean.When comparing a with b, the result will be less than 0 if a is less than b, 0 if a equals b, and greater than 0 if a is greater than b.
var_dump(1 <=> 1); echo '<br>';// 0
var_dump(3 <=> 2);echo '<br>';
*/

/*
$properties = [
'firstname' => 'Tom',
'surname' => 'Riddle',
'house' => 'Slytherin'
];
$keys = array_keys($properties);
var_dump($keys);echo '<br>';
//$values = array_values($properties);
//  var_dump($values);

*/

$looking = isset($_GET['title']) || isset($_GET['author']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
</head>
<body>
<p>You lookin'? <?php echo (int) $looking; ?></p>
<p>The book you are looking for is</p>
<ul>
<li><b>Title</b>: <?php echo $_GET['title']; ?></li>
<li><b>Author</b>: <?php echo $_GET['author']; ?></li>
</ul>
</body>
</html>