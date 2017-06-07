<?php
class ParentClass
{
  public function wrapBody($content)
  {
    return sprintf("<body>\n$content</body>", $content);
  }
  public function docType()
  {
    return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"'
           . "http://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd>" . PHP_EOL;
  }
}

class ChildClass extends ParentClass
{
  public function docType()
  {
    return '<!DOCTYPE html>' . PHP_EOL;
  }
}

$parentClass = new ParentClass();
$childClass = new ChildClass();
echo $parentClass->docType();
echo $parentClass->wrapBody('<h1>TEST PARENT</h1>');
// echo $childClass->docType();
// echo $childClass->wrapBody('<h1>TEST CHILD</h1>');
