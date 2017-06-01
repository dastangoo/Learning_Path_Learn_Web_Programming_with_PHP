<?php
// Working with Arrays: Searching Arrays
// array_key_exists()
// isset($array["key"]) = fastest technique but only works for associative array

// using array() to assign keys
$arrayAssoc = array('first' => 'Julia', 'last' => 'Roberst', 'age' => 37, 'occupation' => 'Actress');

// search by key
$foundKey = array_key_exists('last', $arrayAssoc);

// search ussing isset()
$foundIsset = isset($arrayAssoc['last']);

// display results
var_dump($arrayAssoc);
echo '<br />Found by Key: ', var_dump($foundKey);
echo '<br />Found by isset', var_dump($foundIsset);
