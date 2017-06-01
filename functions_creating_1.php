<?php
$fruits = array('Apples', 'Bananas', 'Pears', 'Oranges', 'Peaches', 'Strawberries');
$vegetables = array('Peas', 'Carrots', 'Lettuce', 'Artichokes', 'Beans');
$meats = array('Beef', 'Pork', 'Veal', 'Chicken', 'Turkey');

echo '<br />FRUITS:<hr />';
echo '<ul>'.PHP_EOL;
foreach ($fruits as $li ) {
  echo "<li>$li</li>";
}

echo '</ul>' . PHP_EOL;


echo '<br />VEGETABLES:<hr />';
echo '<ul>' . PHP_EOL;
foreach ($vegetables as $li ) {
  echo "<li>$li</li>";
}

echo '</ul>'. PHP_EOL;

echo '<br />MEATS:<hr />';
echo '<ul>'. PHP_EOL;
foreach ($meats as $li ) {
  echo "<li>$li</li>";
}

echo '</ul>' . PHP_EOL;
