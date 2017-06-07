<?php
class Test
{
  private $value;
  public function setValue($newValue)
  {
    $this->value = $newValue;
  }

  public function getValue()
  {
    return $this->value;
  }
}

$test = new Test();

$test->setValue('<script>alert("UNSAFE!");</script>');

echo '<br />' . $test->getValue();
