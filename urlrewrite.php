<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/news/filter-theme/(\\d+)/#',
    'RULE' => 'themeId=$1',
    'ID' => '',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/news/(\\d+)/#',
    'RULE' => 'newsId=$1',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
);
