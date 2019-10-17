<?php

require "Article.php";

$article1 = new Article('Программирование на РНР', 300);

$article2 = clone $article1;
$article2 -> pageSize = 150;

$article3 = $article1->myClone();
$article4 = $article1->myClone(700);

print_r($article1);
print_r($article2);
print_r($article3);
print_r($article4);