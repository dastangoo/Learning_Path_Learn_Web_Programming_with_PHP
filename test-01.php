<?php
require "headlinearticle.php";
$a = new HeadlineArticle();
echo $a->getTitle();
echo $a->getExcerpt();
