<?php
// Working with Arrays: Sort by Value
// array_multisort()
// all sort flags are available (i.e. SORT_NUMERIC, SORT_NATURAL, etc.)
$matrix = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));

array_multisort($matrix, SORT_DESC);
array_multisort($matrix[0], SORT_DESC, $matrix[1], SORT_DESC, $matrix[2], SORT_DESC);

echo '<pre>';
var_dump($matrix);
echo '</pre>';
