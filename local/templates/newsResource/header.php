<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead();  ?>
</head>

<body>
    <div class="panel" id="panel">
        <? $APPLICATION->ShowPanel(); ?>
    </div>
    <header class="header">
        <a href='/' class="header_info">
            <img class="header_info_icon" src="/upload/icons/logo 1.svg">
            <p class="header_info_headline">ГАЛАКТИЧЕСКИЙ </br> ВЕСТНИК</p>
        </a>
    </header>