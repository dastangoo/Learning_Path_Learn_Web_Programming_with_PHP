<?php
$value1 = 123.0;
$value2 = 123;

echo '<br />Value 1:', var_dump($value1);
echo '<br />Value 2:', var_dump($value2);
echo '<br />$value1 == $value2: ', var_dump($value1 == $value2);
echo '<br />$value1 === $value2: ', var_dump($value1 === $value2);
echo  '<br />';

$cost = 12.99;
$quantityOH = 10;
$status = 'ORDER';

echo "<br />Cost: $cost";
echo "<br />Quantity on Hand: $quantityOH";
echo "<br />Status: $status";
echo '<br />$cost < 100 && $quantityOH > 1: ', var_dump(($cost < 100) && ($quantityOH >1));
echo '<br />$quantityOH <= 0 || $status == "ORDER": ', var_dump(($quantityOH <= 0) || ($status == "ORDER"));
echo '<br />';
