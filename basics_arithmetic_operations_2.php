<?php
// Understanding the Basics: performing Arithmetic Operations
// combination operations: "+" "-" "*" or "/" plus "="
// advantage: represents a shorter way of representing a simple arithmetic operation

// using addition to add a value to an existing variable
$intValue = 39;
$intValue = $intValue + 3; // add original value + 3
echo $intValue;            // returns 42

echo '<br />';

// same thing using combination operaiton +=
$intValue = 39;
$intValue += 3;           // adds original value + 3
echo $intValue;           // returns 42

echo '<br />';

// other examples
$intValue *= 2;
echo $intValue;
echo '<br /';
$intValue -= 20;
echo $intValue;
echo '<br />';
$intValue /= 10;
echo $intValue;
