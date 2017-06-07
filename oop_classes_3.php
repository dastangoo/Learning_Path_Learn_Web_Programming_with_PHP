<?php
$path = realpath(__DIR__ . '/../');
$rdi = new RecursiveDirectoryIterator($path);

foreach (new RecursiveDirectoryIterator($rdi) as $filename => $item) {
  $filesize = $item->getSize();
  echo "<br />$filename ($filesize)\n";
}
