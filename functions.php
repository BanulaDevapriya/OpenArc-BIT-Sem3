<html>
    <head>
        <title></title>
    </head>

<body>
    <h1>Functions</h1>

<?php
function writemsg(){
    echo "Hello World!";
}
writemsg();//call the function
echo "</br>";

function rewritemsg($Fname,$Lname){
    echo "Hello World! - $Fname, $Lname";
}
rewritemsg("Saman","Silva");//Argument need to declared before execute
//If there is one argument only take one/first value we declare
echo "</br>";

/*Default value argument - should come at the end */
function fun1($name,$height,$age = 30){
    echo " Player 1 : Name = $name, Height = $height, Age = $age";
}
fun1("Kareem","165",);
fun1("Saveeta","",);
echo "</br>";

/*Functions with return*/
function returnSum($x,$y,$z){
    $z = $x+$y+$z;
    return $z;
}
echo "Total is = ".returnSum(60,20,10);
echo "</br>";
?>

</body>
</html>