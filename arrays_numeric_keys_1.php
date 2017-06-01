<?php
$arrayNumeric1 = array(1, 2, 3, 4, 5);
var_dump($arrayNumeric1);
echo '<br />';

$arrayNumeric2 = array('apple', 'banana', 'cucumber', 'date', 'egg');
var_dump($arrayNumeric2);
echo '<br />';

$arrayNumeric3 = array('apple', 22, 'cucumber', 192.47, FALSE);
var_dump($arrayNumeric3);
echo '<br />';

echo "<br />Element 0: {$arrayNumeric3[0]}";
echo "<br />Element 3: {$arrayNumeric3[3]}";
