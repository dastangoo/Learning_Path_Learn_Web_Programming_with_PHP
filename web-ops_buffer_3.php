<?php
// Manaing Web Operations: Managing Output Buffering
// demonstrates using ob_start(), ob_get_contents(), and ob_flush()

ob_start();
echo '<h3>Output Buffer Test</h3>', '<hr />', PHP_EOL;
echo '<br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id augue diam. Present mollis augue eu nulla s';

//get contents of buffer and erases it
$contents = ob_get_clean();


// flush the buffer
ob_flush();

echo '<h3>Contents from Buffer</h3>', '<hr />', PHP_EOL;
echo $contents;

// flush the buffer
ob_flush();
