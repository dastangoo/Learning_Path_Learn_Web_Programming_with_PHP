<?php
$thisIsGlobal = 'GLOBAL';
$someValue = 22.47;
$someBoolean = TRUE;

function test()
{
  echo '<br />', 'Output form Function test()';
  $thisIsLocal = 'LOCAL';
  global $thisIsGlobal1;
  echo '<br />', $thisIsGlobal1;
  echo '<br /', $thisIsLocal;
  return TRUE;
}

test();

echo '<br />', '$GLOBALS', '<br />';
var_dump($GLOBALS);
