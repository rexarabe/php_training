<!DOCTYPE html>
<html>
<body>
<?php

echo "This is a function by which I am going to return the length of the string";
echo "<br>";
echo "<p>The length of the string (Hello world!) </p>";
echo strlen("Hello world!");
echo "<br>";

echo "This is a function to count the word in the string";
echo "<br>";
echo "<p>The length of the the string per word is:</p>";
echo str_word_count("Hello world!"); //outputs 2
echo "<br>";
echo "<p>We are going to revert the string Hello world! which will look like this: </p>";
echo strrev("Hello world!");
echo "<br>";
echo "This is function from the standard library will locate the word in the string <br>";
echo strpos("Hello world!", "world"); //outputs 6

echo "<br>";
echo "<p>This is function is use to replace a word by another world in a string</p>";
echo str_replace("world", "Olga", "Hello world!");
echo "<br>"


?>
</body>
</html>
