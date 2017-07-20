<?php
function concatenate($transform) {
  $string = '';
  $pieces = func_get_args();
  $transform = array_shift($pieces);
  foreach ($pieces as $piece ) {
    $string .= $piece;
  }
  return ($transform($string));
}

echo concatenate("strtoupper", "I'd ", "like ", 4 + 2, " apples");
