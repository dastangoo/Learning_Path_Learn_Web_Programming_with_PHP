<?php
// Looping an Branching: Using a "foreach" Loop
// use "foreach" to iterate through an array
$options = array('How will you arrive?' => array('Car', 'Bus', 'Train', 'Plane'),
                 'Your Gender' => array('Male', 'Female'),
                 'Prefered Housing' => array('House', 'Condo', 'Flat', 'Apartment', 'Shared Room'),
                 'How Many in Family' => array('1 - 2', '3 - 4',  '5+'));

// use nested "foreach" loops to generate survery questions from an array
$styleInner = 'style="float: left; width: 150px; border: 1px solid black; text-align: center;"';
$styleOuter = 'style="float: left; width: 900px;"';


foreach ($options as $key => $value) {
  echo "<div $styleOuter>".PHP_EOL;
  echo '<b>', $key, '</b>', '<br />', PHP_EOL;
  $tag = strtolower(str_replace(' ', '_', $key));
  foreach ($value as $item) {
    echo "<div $styleInner>\n";
    echo $item, '<input type="radio" name="', $tag, '[]">', PHP_EOL;
    echo "</div>\n";
  }
  echo '</div><p>&nbsp;</p>' . PHP_EOL;
}
