<!DOCTYPE html>
<html>
<body>
<?php

echo "We will verify each number with the function that allow us to check";
echo "<br>";
$x = 5989;
var_dump(is_int($x));
echo "<br>";


$x = 59.85;
echo "<p>is $x a interger?</p>";
var_dump(is_int($x));

echo "<br>";
$x = 10.365;
echo "<p> is 10.356 a float? </p>";
var_dump(is_float($x));
echo "<br>";


echo "Let now if 1.9e411 is an infinit number or not";
echo "<br>";
$x = 1.9e411;
var_dump(is_finite($x));
echo "<br>";


echo "Is acos(8) a number? <br> ";
$x = acos(8);
var_dump($x);

?>
</body>
</html>
