<?php
class Test
{
  private $privateVar = 'PRIVATE PROPERTY';

  private function privateMethod()
  {
    return 'PRIVATE METHOD';
  }

  public function getValue()
  {
    return $this->privateVar . '<br />' . $this->privateMethod();
  }
}

$test = new Test();
echo '<br />', $test->getValue();
