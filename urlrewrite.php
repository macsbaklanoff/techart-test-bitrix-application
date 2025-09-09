<?php
$arUrlRewrite=array (
  7 => 
  array (
    'CONDITION' => '#^/news-list/page-([0-9]+)/#',
    'RULE' => '',
    'ID' => 'resource:news.list',
    'PATH' => '/news/list/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/detail-news/([0-9]+)/#',
    'RULE' => '',
    'ID' => 'resource:detail.news',
    'PATH' => '/news/detail/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/news-list/#',
    'RULE' => '',
    'ID' => 'resource:news.list',
    'PATH' => '/news/list/index.php',
    'SORT' => 100,
  ),
);
