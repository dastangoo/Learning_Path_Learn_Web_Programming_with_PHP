<?php
class Test
{
  public function divide($operand1, $operand2)
  {
    $output = "<br />1st Operand: $operand1\n";
    $output .= "<br />2nd Operand: $operand2\n";
    $output .= '<br />Division Results: ' . $operand1 / $operand2;
    return $output;
  }
}

$test = new Test();

echo $test->divide(22, 11);
echo $test->divide(22, 0);
