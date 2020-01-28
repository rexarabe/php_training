<!DOCTYPE html>
<html>
<head>
<title>
     Php Numerical Strings
</title>
<head>
<body>
<?php

echo "<p>Php Numerical strings</p>";
echo "Let's know if the number is numerical or not";
echo "<br>";
$x=5954;
var_dump(is_numeric($x));

echo "<br>";
echo "<p>Let's know if the this string is a numerical or not</p>";

$x = "5954";
var_dump(is_numeric($x));

echo "<br>";

echo "<p>Is is a a numeric string</p>";
$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

echo "Is Hello a numeric string? <br>";
$x = "Hello";
var_dump(is_numeric($x));
?>
</body>
</html>
