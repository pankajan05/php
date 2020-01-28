<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

//PHP code goes here

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

eChO "My first PHP script!";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
echo date("l") . "<br>";
echo date("d-m-y"); //faster good
print("kajan"); //return 1 and 1 argument create new line
print "<h2>PHP is Fun!</h2>";

$color = "red";
$red = 5;
echo $color;
echo "$color";

$color =5;
echo $color;

echo "Case sensitive";

//local global static
$s =3;//global
static $x =0; //function close keep save from delete

function test(){
    $d =4;//local
    echo ($d);
    global $s; //global scope
    $GLOBALS['s'] = 67; //access global
}

test();

//String Integer Float Boolean Array Object NULL

class Car {
     function Car() { //public
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();
echo $herbie->model;


//string function
echo strlen("Hello world!"); // outputs 12
echo str_word_count("Hello world!"); // outputs 2
echo strrev("Hello world!"); // outputs !dlrow olleH
echo strpos("Hello world!", "world"); // outputs 6
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

$x = 5985;
var_dump(is_int($x)); //what is really there in variable
var_dump(is_float($x));
$x = 1.9e411;
var_dump($x);
$x = acos(8); //invalid produce NaN
var_dump($x);
$x = "";//
var_dump(is_numeric($x));

//typecast
$x = 4839.943;
echo (int)$x;

//constant
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>


</body>
</html> 