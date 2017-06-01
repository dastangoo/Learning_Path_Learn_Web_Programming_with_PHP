<?php
// Looping and Branching: Branching with "continue," "break" and "goto"
$array = array(11, 23, 34, 56, 78, 90, 101, 114);
echo 'Even Numbers Using "continue":', '<br />';
foreach ($array as $value) {
  // check for odd number
  if ($value %2) {
    continue;
  }
  echo '<br />', $value;
}


echo '<br /><br />', 'Even Numbers Using WITHOUT "continute":', '<br />';
foreach ($array as $value ) {
  // check for even numbers by reversing the logic above

  if (!($value % 2)) {
    echo '<br />', $value;
  }
}
