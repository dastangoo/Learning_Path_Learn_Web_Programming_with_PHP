<?php
// Working with Arrays: Sort by Value
// ksort()

// assign values
$arrayAssoc = array('meat' => 'beef', 'dairy' => 'Milk', 'grain' => 'Whole Wheat Bread', 'fruit' => 'Grapes');
ksort($arrayAssoc);


// display results
echo '<pre>';
var_dump($arrayAssoc);
echo '</pre>';
