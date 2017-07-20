<?php
require "article.php";

$article = new Article();
$article->comments = 6;
$article->getTitle();

// var_dump($article);
var_export($article);
