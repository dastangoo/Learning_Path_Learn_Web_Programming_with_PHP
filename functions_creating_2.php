<?php
function ulLiHtml($label, $array)
{
  $output = "<br />$label:<hr />";
  $output .= '<ul>' . PHP_EOL;
  foreach ($array as $li ) {
    $output .= "<li>$li</li>";
  }
  $output .= '</ul>' . PHP_EOL;
  return $output;
}


$fruits = array('Apples', 'Bananas', 'Pears', 'Oranges', 'Peaches', 'Strawberries');
$vegetables = array('Peas', 'Carrots', 'Lettuce', 'Artichokes', 'Beans');
$meats = array('Beef', 'Pork', 'Veal', 'Chicken', 'Turkey');


echo ulLiHtml('FRUITS', $fruits);
echo ulLiHtml('VEGETABLES', $vegetables);
echo ulLiHtml('MEATS', $meats);
