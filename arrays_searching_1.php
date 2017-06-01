<?php
// Working with Arrays: Searching Arrays
// in_array(needle, haystack, strict) returns TRUE or FALSE
// array_search(needle, haystack, strict) returns the KEY of the element or FALSE
// use "strict" = TRUE if type check desired

// assign an array
$names = array('Doug', 'Julia', 'George', 'Francois');

// locate a name
$foundYesNo = in_array('George', $names);
$foundKey = array_search('George', $names);

// display results
var_dump($names);
echo '<br />Found George: ', var_dump($foundYesNo);
echo "<br />Found Key: $foundKey";
echo "<br />Retrieved name: {$names[$foundKey]}";
