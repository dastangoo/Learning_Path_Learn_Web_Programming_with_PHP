<?php
class MakeHtml
{
  public function makeH1($content)
  {
    return "<h1>$content</h1></hr >\n";
  }

  public function makeUL($items)
  {
    $output = '<ul>' . PHP_EOL;
    foreach ($items as $li ) {
      $output .= "<li>$li</li>\n";
    }
    $output .= '</ul>' . PHP_EOL;
    return $output;
  }
}

$html = new MakeHtml();
echo $html->makeH1('TEST');
echo $html->makeUL(array('Apples', 'Oranges', 'Bananas', 'Cherries', 'Peaches'));
