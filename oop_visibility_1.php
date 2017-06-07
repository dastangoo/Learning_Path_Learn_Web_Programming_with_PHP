<?php
class Test
{
  public $publicVar = 'PUBLIC';
  private $privateVar = 'Private';
  public function publicMethod()
  {
    return 'PUBLIC';
  }
  private function privateMethod()
  {
    return 'PRIVATE';
  }
}

$test = new Test();

echo '<br />', $test->publicVar;
echo '<br />', $test->publicMethod();

echo '<br />', $test->privateMethod();
