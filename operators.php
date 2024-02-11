<html>
    <head>
        <title>Test Page</title>
</head>

<body>
<h1>Operators PHP</h1>
<h2> Arithmetic operators</h2>
<?php

$x=2;
$y=3;

echo $x % $y; //modulus
echo "<br>"; 
echo $x ** $y; //Power
?>

<h2>Assignment operators</h2>
<?php
$x=5;
$y=5;
$x += $y; //$x = $x + $y
echo  $x."<br>";  

var_dump($x==$y); //check for compare the value
echo "<br>";
var_dump($x===$y); //check for both value and data type
echo "<br>";
?>

<H2>Binary Operators - Spaceship</h2>
<?php
$x=0;
$y=0;
//var_dump($x <=> $y); //x is less than y(-1) [x=5,y=10]
//var_dump($x <=> $y); //x is less than y(1) [x=10,y=5]
var_dump($x <=> $y); //x = y (0)
?>

<h2>Increment/Decrement operators</h2>
<?php
$x=5;
$y=5;
$sum = $x++ + ++$x + ++$y + --$x + $y++;
var_dump($x++ + ++$x + ++$y + --$x + $y++);

echo "Sum = ",$sum."<br>";
echo "X = ".var_dump($x). ",  Y = " .var_dump($y);

?>

</body>
</html>