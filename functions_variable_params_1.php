<?php
function  preferenceRow()
{
  $output = '';
  $params = func_get_args();
  $maxCols = 10;

  foreach ($params as $item) {
    $output .= "<td width='80px' align='center'>$item</td>";
    $maxCols--;
  }

  for ($x=0; $x < $maxCols; $x++) {
    $output .= "<td width='80px'>$nbsp;</td>\n";
  }
  return $output;
}

echo '<h1>Preferences</h1><hr />' . PHP_EOL;
echo '<table border=1>' . PHP_EOL;
echo '<tr><th>Tarzan</th>';
echo preferenceRow('Africa', 'jungles', 'tantor', 'mangani', 'cabin in the woods', 'hunting', 'swinging in trees', 'Jane');
echo '</tr>';
echo '<tr><th>Jane</th>';
echo preferenceRow('London', 'parties', 'dancing', 'social events', 'lavish estates');
echo '</tr>';
echo '</table>' . PHP_EOL;
