<?php
class Test
{
  public function divide($operand1, $operand2)
  {
    $output = "<br />1st Operand: $operand1\n";
    $output .= "<br />2nd Operand: $operand2\n";
    if ($operand2 == 0) {
      throw new Exception($output . '<br />Cannot Divide by Zero!');
    }
    else {
      $output .= '<br />Division Results: ' . $operand1 / $operand2;
      return $output;
    }
  }
}


$test = new Test();

try {
  echo $test->divide(22, 11);
  echo $test->divide(22, 0);
} catch (Exception $e) {
  echo $e->getMessage();
}
