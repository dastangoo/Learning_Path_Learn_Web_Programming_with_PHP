<?php
class Test
{
  private $value;

  public function setValue($newValue)
  {
    $this->value = strip_tags($newValue);
  }

  public function getValue()
  {
    return $this->value;
  }
}


$test = new Test();

$test -> setValue('<script>alert("UNSAFE!");</script>');

echo '<br />', htmlspecialchars($test->getValue());
echo '<br />', htmlspecialchars('<script>alert("UNSAFE!");</script>');
