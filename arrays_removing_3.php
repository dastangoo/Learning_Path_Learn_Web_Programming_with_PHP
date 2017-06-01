<?php
// Working with Arrays: Removing Single Array Element
// array_shift($array)

// assign values
$arrayAssoc = array('meat' => 'Beef', 'dairy' => 'Milk', 'grain' => 'Whole Wheat Bread', 'fruit' => 'Grapes');

// dipsplay results
echo '<pre>';
var_dump($arrayAssoc);

// remove element
$firstElement = array_shift($arrayAssoc);
echo "<br />Removed Element: $firstElement<br />";

// dipslay results
var_dump($arrayAssoc);
echo '</pre>';

// assign values
$arrayNumeric = array(1 => 11, 5 => 55, 2 => 22, 6 => 66);

// dispaly results
echo '<pre>';
var_dump($arrayNumeric);

// remove element
$firstElement = array_shift($arrayNumeric);
echo "<br />Removed Element: $firstElement<br />";

// display results
echo "<br />WARNING: keys get reset using unshift()<br />";
var_dump($arrayNumeric);
echo '</pre>';
