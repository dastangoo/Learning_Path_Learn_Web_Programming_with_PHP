<?php
class ParentClass
{
  public $br = '<br />';
  public $space = '&nbsp;';
  public function wrapBTag($content)
  {
    return sprintf('<b>%s</b>', $content);
  }
}
class ChildClass extends ParentClass
{
  public function wrapItag($content)
  {
    return sprintf('<i>%s</i>', $content);
  }
}

$wrapper = new ChildClass();
echo $wrapper->br, $wrapper->wrapBTag('BOLD'), $wrapper->space, $wrapper->wrapItag('ITALICS');
echo $wrapper->br, htmlentities(var_export($wrapper, TRUE));
